<?php

    session_start();
    require_once 'db.php';

    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'");
    if (mysqli_num_rows($check_user) > 0) {

        $user = mysqli_fetch_assoc($check_user);

        $_SESSION['user'] = [
            "id" => $user['id'],
            "full_name" => $user['full_name'],
            "avatar" => $user['avatar'],
            "email" => $user['email'],
            "balance" => $user['balance']
        ];

        header('Location: ../public/dashboard.php');

    } else {
        $_SESSION['message'] = 'Неверная почта или пароль';
        header('Location: ../public/index.php');
    }