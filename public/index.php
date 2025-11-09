<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TFund — Вход</title>
  <style>
    * { box-sizing: border-box; }
    body {
      font-family: Arial, sans-serif;
      display: flex;
      background-color: #f5f6fa;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }
    .form-container {
      background: #f8f9fa;
      padding: 30px;
      border-radius: 12px;
      width: 370px;
      max-width: 90%;
    }
    h2 { text-align: center; margin-bottom: 20px; color: #0a3a66; }
    .form-group { margin-bottom: 15px; }
    label { 
      display: block; 
      margin-bottom: 5px; 
      color: #000; 
    }
    input[type="text"], input[type="email"], input[type="password"], input[type="file"] {
      width: 100%;
      padding: 10px;
      border: 1px solid #444;
      border-radius: 6px;
    }
    input::placeholder { color: #000; }
    button {
      width: 100%;
      padding: 12px;
      background-color: #0a3c68;
      border: none;
      border-radius: 6px;
      color: #fff;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.2s ease;
    }
    button:hover { background-color: #0e538c; }
    p {
      text-align: center;
      color: #000;
      font-size: 14px;
      margin-top: 15px;
    }
    p a { color: #000; text-decoration: underline; }
  </style>
</head>
<body>
  <div class="form-container">
    <h2>Вход</h2>
    <form action="/fund_app/app/auth.php" method="post">
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

      <?php if (isset($_SESSION['message'])): ?>
        <div class="message"><?= $_SESSION['message'] ?></div>
        <?php unset($_SESSION['message']); ?>
      <?php endif; ?>
    </form>
  </div>
</body>
</html>
