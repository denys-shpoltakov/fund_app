<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/fund_app/public/css/auth.css">
  <title>TFund — Регистрация</title>
</head>
<body>
  <div class="form-container">
    <h2>Регистрация</h2>
    <form action="/fund_app/app/auth.php" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="full_name">ФИО</label>
        <input type="text" name="full_name" id="full_name" placeholder="Введите своё полное имя">
      </div>

      <div class="form-group">
        <label for="login">Логин</label>
        <input type="text" name="login" id="login" placeholder="Введите свой логин">
      </div>

      <div class="form-group">
        <label for="email">Почта</label>
        <input type="email" name="email" id="email" placeholder="Введите свою почту">
      </div>

      <div class="form-group">
        <label for="avatar">Изображение профиля (опционально)</label>
        <input type="file" name="avatar" id="avatar">
      </div>

      <div class="form-group">
        <label for="password">Пароль</label>
        <input type="password" name="password" id="password" placeholder="Введите пароль">
      </div>

      <div class="form-group">
        <label for="password_confirm">Подтверждение пароля</label>
        <input type="password" name="password_confirm" id="password_confirm" placeholder="Подтвердите пароль">
      </div>

      <button type="submit">Зарегистрироваться</button>

      <p>
        Уже есть аккаунт? — <a href="index.php">Войти</a>
      </p>
    </form>
  </div>
</body>
</html>
