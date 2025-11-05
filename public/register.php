<?php 

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
    <form action="" method="">
        <label>ФИО</label>
        <input type="text" placeholder="Введите своё полное имя">
        <label>Логин</label>
        <input type="text" placeholder="Введите свой логин">
        <label>Почта</label>
        <label>Изображение профиля</label>
        <input type="file">
        <input type="email" placeholder="Введите свою почту">
        <label>Пароль</label>
        <input type="password" placeholder="Введите пароль">
        <label>Подтверждение пароля</label>
        <input type="password" placeholder="Подтвердите пароль">
        <button>Зарегестрироваться</button>
        <p>
            У вас уже есть аккаунт? - <a href="/fund_app/public/index.php">войдите</a>
        </p>
    </form>
</body>
</html>