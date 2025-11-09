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
      background: #111;
      color: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }
    .form-container {
      background: #1a1a1a;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 0 30px rgba(255,255,255,0.05);
      width: 370px;
      max-width: 90%;
      animation: fadeIn 0.4s ease;
    }
    h2 { text-align: center; margin-bottom: 20px; color: #4fc3f7; }
    .form-group { margin-bottom: 15px; }
    label { display: block; margin-bottom: 5px; font-weight: bold; color: #ccc; }
    input[type="email"], input[type="password"] {
      width: 100%;
      padding: 10px;
      background: #000;
      border: 1px solid #444;
      border-radius: 6px;
      color: #fff;
    }
    input::placeholder { color: #888; }
    button {
      width: 100%;
      padding: 12px;
      background-color: #fff;
      border: none;
      border-radius: 6px;
      color: #000;
      font-size: 16px;
      font-weight: bold;
      cursor: pointer;
      transition: background-color 0.2s ease;
    }
    button:hover { background-color: #ccc; }
    p {
      text-align: center;
      color: #888;
      font-size: 14px;
      margin-top: 15px;
    }
    p a { color: #4fc3f7; text-decoration: underline; }
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(30px); }
      to { opacity: 1; transform: translateY(0); }
    }
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
