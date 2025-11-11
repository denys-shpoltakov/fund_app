<?php
session_start();

if (isset($_SESSION['user'])) {
    header('Location: ../public/dashboard.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/fund_app/public/css/auth.css">
  <title>TFund — Вход</title>
  <style>
    
  </style>
</head>
<body>
  <div class="form-container">
    <h2>Вход</h2>
    <form action="/fund_app/app/signin.php" method="post">
      <div class="form-group">
        <label for="email">Почта</label>
        <input type="email" name="email" id="email" placeholder="Введите свою почту">
      </div>

      <div class="form-group">
        <label for="password">Пароль</label>
        <input type="password" name="password" id="password" placeholder="Введите пароль">
      </div>

      <button type="submit">Войти</button>

      <p>
        Нет аккаунта? — <a href="register.php">Зарегистрироваться</a>
      </p>

        <?php  
      if (isset($_SESSION['message'])) {
        echo '      <p class="msg"> ' . $_SESSION['message'] . ' </p>';
      }
      unset($_SESSION['message']);
        ?>
    </form>
  </div>
</body>
</html>
