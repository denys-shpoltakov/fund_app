<?php 

// декларация пополнения

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/fund_app/public/css/transactions.css">
  <title>TFund | Пополнение депозита</title>
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
        <h2>Добавить вклад</h2>
        <form>
          <label>Сумма</label>
          <input type="number" step="0.01" placeholder="Введите сумму">

          <label>Валюта</label>
          <select>
            <option>PLN</option>
            <option>EUR</option>
            <option>USD</option>
          </select>

          <button>Добавить вклад</button>
        </form>
      </div>


</body>
</html>