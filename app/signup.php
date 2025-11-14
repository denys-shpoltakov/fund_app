<?php

    // регистрация пользователя

    session_start();
    require_once 'db.php';

    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];

    if ($password === $password_confirm) {
        
        // $_FILES['avatar']['name']
        $path = 'uploads/' . time() .  $_FILES['avatar']['name'];
        if(!move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path)) {
        $_SESSION['message'] = 'Błąd podczas załadowania pliku';
        header('Location: ../public/register.php');
        }

        $password = md5($password);

        mysqli_query($connect, "INSERT INTO `users` (`id`, `full_name`, `email`, `password`, `avatar`, `balance`) VALUES (NULL, '$full_name', '$email', '$password', '$path', 0)");
        $_SESSION['message'] = 'Rejestracja przebiegła pomyślnie';
        header('Location: ../public/index.php');



    } else {
        $_SESSION['message'] = 'Hasła są różne';
        header('Location: ../public/register.php');
    }