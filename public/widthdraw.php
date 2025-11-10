<?php 

// декларация пополнения

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/fund_app/public/css/transactions.css">
  <title>TFund | Вывод средств</title>
</head>
<body>
  <header>
    <div class="container">
      <h1>Инвестиционный фонд</h1>
      <nav>
        <a href="/fund_app/public/dashboard.php">Профиль</a>
        <a href="/fund_app/public/deposit.php">Пополнить депозит</a>
        <a href="/fund_app/public/widthdraw.php">Вывод средств</a>
        <a href="#">Выход</a>
      </nav>
    </div>
  </header>
       <section class="grid">
    <div class="card">
      <h2>Вывод средств</h2>

      <!-- Форма отправляет данные на withdraw.php -->
      <form action="../app/widthdraw.php" method="post">
        <label>Сумма</label>
        <input type="number" name="amount" step="0.01" placeholder="Введите сумму" required>

        <label>Валюта</label>
        <select name="currency">
          <option>PLN</option>
          <option>EUR</option>
          <option>USD</option>
        </select>

        <button type="submit">Вывести средства</button>
      </form>

      <!-- Сообщение из сессии -->
      <?php
        session_start();
        if (!empty($_SESSION['message'])) {
            echo '<p>' . htmlspecialchars($_SESSION['message']) . '</p>';
            unset($_SESSION['message']);
        }
      ?>
    </div>
  </section>
</body>
</html>