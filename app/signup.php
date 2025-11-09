<?php

    session_start();
    require_once 'db.php';

    $full_name = $_POST['full_name'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];

    if ($password === $password_confirm) {
        // con...
    } else {
        $_SESSION['message'] = die('Пароли не совпадают');
        header('Location: ../public/register.php');
    }