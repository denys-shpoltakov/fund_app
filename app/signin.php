<?php
session_start();
require_once 'db.php';

define('MAX_ATTEMPTS', 5);
define('WINDOW_MINUTES', 15);

$window = WINDOW_MINUTES;

$ip = $_SERVER['REMOTE_ADDR'] ?? 'unknown';

$email = trim($_POST['email'] ?? '');
$password_raw = $_POST['password'] ?? '';

if ($email === '' || $password_raw === '') {
    $_SESSION['message'] = 'Wprowadź email i hasło';
    header('Location: ../public/index.php');
    exit();
}


// 1) Проверяем число попыток

$sql_count = "SELECT COUNT(*) AS cnt 
              FROM login_attempts 
              WHERE ip = ? AND attempt_time > (NOW() - INTERVAL $window MINUTE)";
$stmt_count = $connect->prepare($sql_count);
$stmt_count->bind_param('s', $ip);
$stmt_count->execute();
$res = $stmt_count->get_result();
$row = $res->fetch_assoc();
$attempts = (int)($row['cnt'] ?? 0);
$stmt_count->close();

if ($attempts >= MAX_ATTEMPTS) {
    // Сколько осталось до разблокировки
    $sql_oldest = "SELECT MIN(attempt_time) AS oldest 
                   FROM login_attempts 
                   WHERE ip = ? AND attempt_time > (NOW() - INTERVAL $window MINUTE)";
    $stmt_o = $connect->prepare($sql_oldest);
    $stmt_o->bind_param('s', $ip);
    $stmt_o->execute();
    $r = $stmt_o->get_result()->fetch_assoc();
    $stmt_o->close();

    if (!empty($r['oldest'])) {
        $old_ts = strtotime($r['oldest']);
        $expires_in = max(0, $window*60 - (time() - $old_ts));
        $minutes_left = ceil($expires_in / 60);
    } else {
        $minutes_left = $window;
    }

    $_SESSION['message'] = "Zbyt wiele prób logowania. Spróbuj ponownie po {$minutes_left} minutach";
    header('Location: ../public/index.php');
    exit();
}


// 2) Проверяем пользователя

$password_md5 = md5($password_raw); // пока оставляем md5

$sql_user = "SELECT id, full_name, email, avatar, balance 
             FROM users 
             WHERE email = ? AND password = ?";
$stmt = $connect->prepare($sql_user);
$stmt->bind_param('ss', $email, $password_md5);
$stmt->execute();
$result = $stmt->get_result();

if ($user = $result->fetch_assoc()) {
    // Успешная авторизация — удаляем попытки
    $del_sql = "DELETE FROM login_attempts WHERE ip = ? OR email = ?";
    $d = $connect->prepare($del_sql);
    $d->bind_param('ss', $ip, $email);
    $d->execute();
    $d->close();

    session_regenerate_id(true);
    $_SESSION['user'] = [
        "id" => $user['id'],
        "full_name" => $user['full_name'],
        "avatar" => $user['avatar'],
        "email" => $user['email'],
        "balance" => $user['balance']
    ];

    header('Location: ../public/dashboard.php');
    exit();
} else {
    // Неверные данные — логируем попытку
    $ins_sql = "INSERT INTO login_attempts (ip, email) VALUES (?, ?)";
    $ins = $connect->prepare($ins_sql);
    $ins->bind_param('ss', $ip, $email);
    $ins->execute();
    $ins->close();

    $_SESSION['message'] = 'Nieprawidłowy email lub hasło';
    header('Location: ../public/index.php');
    exit();
}

$stmt->close();
