<?php 
    session_start();

// страница регистрации

?>


<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TFund</title>
</head>
<body>
    <form action="/fund_app/app/auth.php" method="post" enctype="multipart/form-data">
        <label>ФИО</label>
        <input type="text" name="full_name" placeholder="Введите своё полное имя">
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите свой логин">
        <label>Почта</label>
        <input type="email" name="email" placeholder="Введите свою почту">
        <label>Изображение профиля</label>
        <input type="file" name="avatar">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль">
        <label>Подтверждение пароля</label>
        <input type="password" name="password_confirm" placeholder="Подтвердите пароль">
        <button>Зарегестрироваться</button>
        <p>
            У вас уже есть аккаунт? - <a href="/fund_app/public/index.php">войдите</a>
        </p>
        <p>
            какое то сообщение
        </p>
    </form>
</body>
</html>