<?php

// декларация пополнения

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
    $_SESSION['message'] = 'Nieprawidłowa kwota';
    header('Location: ../public/dashboard.php');
    exit();
}

$amount = number_format((float)$amount, 2, '.', '');

$stmt = $connect->prepare("UPDATE `users` SET `balance` = `balance` + ? WHERE `id` = ?");
if (!$stmt) {
    $_SESSION['message'] = 'Błąd BD ' . $connect->error;
    header('Location: ../public/dashboard.php');
    exit();
}
$stmt->bind_param('di', $amount, $user_id);
$stmt->execute();
$stmt->close();

$stmt2 = $connect->prepare("SELECT `balance` FROM `users` WHERE `id` = ?");
$stmt2->bind_param('i', $user_id);
$stmt2->execute();
$res = $stmt2->get_result();
if ($row = $res->fetch_assoc()) {
    $_SESSION['user']['balance'] = $row['balance'];
    $_SESSION['message'] = 'Doładowanie przebiegło pomyślnie';
} else {
    $_SESSION['message'] = 'Nie znaleziono użytkownika';
}
$stmt2->close();

header('Location: ../public/dashboard.php');
exit();
