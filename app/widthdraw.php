<?php
session_start();
require_once 'db.php';

if (!isset($_SESSION['user'])) {
    header('Location: ../public/index.php');
    exit();
}

$user_id = (int) $_SESSION['user']['id'];
$amount_raw = $_POST['amount'] ?? '';
$amount = str_replace(',', '.', trim($amount_raw));

if (!is_numeric($amount) || (float)$amount <= 0) {
    $_SESSION['message'] = 'Некорректная сумма';
    header('Location: ../public/dashboard.php');
    exit();
}

$amount = number_format((float)$amount, 2, '.', '');

// Атомичный conditional UPDATE: отнимем только если balance >= amount
$stmt = $connect->prepare("UPDATE `users` SET `balance` = `balance` - ? WHERE `id` = ? AND `balance` >= ?");
if (!$stmt) {
    $_SESSION['message'] = 'Ошибка БД: ' . $connect->error;
    header('Location: ../public/dashboard.php');
    exit();
}
$stmt->bind_param('did', $amount, $user_id, $amount);
$stmt->execute();

if ($stmt->affected_rows === 0) {
    // либо пользователь не найден, либо недостаточно средств
    $_SESSION['message'] = 'Недостаточно средств или пользователь не найден';
    $stmt->close();
    header('Location: ../public/dashboard.php');
    exit();
}
$stmt->close();

// Получаем новый баланс и кладём в сессию
$stmt2 = $connect->prepare("SELECT `balance` FROM `users` WHERE `id` = ?");
$stmt2->bind_param('i', $user_id);
$stmt2->execute();
$res = $stmt2->get_result();
if ($row = $res->fetch_assoc()) {
    $_SESSION['user']['balance'] = $row['balance'];
    $_SESSION['message'] = 'Вывод (симуляция) успешен';
} else {
    $_SESSION['message'] = 'Пользователь не найден';
}
$stmt2->close();

header('Location: ../public/dashboard.php');
exit();
