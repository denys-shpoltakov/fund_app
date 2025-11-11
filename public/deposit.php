<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/fund_app/public/css/transactions.css">
  <script src="/fund_app/public/js/script.js" defer></script>
  <title>TFund | Пополнение депозита</title>
  <!-- Стили черной темы -->
  <style>
body.dark {
  background-color: #121212;
  color: #ffffff;
}

.switch {
  position: fixed;
  top: 15px;
  right: 15px;
  display: inline-block;
  width: 50px;
  height: 28px;
}

.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  transition: 0.3s;
  border-radius: 34px;
}


.slider:before {
  position: absolute;
  content: "";
  height: 22px;
  width: 22px;
  left: 3px;
  bottom: 3px;
  background-color: white;
  transition: 0.3s;
  border-radius: 50%;
}

input:checked + .slider {
  background-color: #000000ff; 
}
input:checked + .slider:before {
  transform: translateX(22px);
}
/* текст внутри формы */
a {
  color: #0077ff;
  transition: color 0.3s;
}

body.dark a {
  color: #66aaff;
}
label {
  color: #0b2447;
  font-weight: 600;
  transition: color 0.3s;
}

body.dark label {
  color: #cfcfcf; 
}
body.dark a form {
  color: #cfcfcf;
}
  </style>
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
        <label class="switch">
        <input type="checkbox" id="theme-toggle">
        <span class="slider"></span>
        </label>
      </nav>
    </div>
  </header>
      <section class="grid">
      <div class="card">
        <h2>Добавить вклад</h2>
      <form action="/fund_app/app/deposit.php" method="post">
      <label>Сумма:
    <input type="text" name="amount">
          <label>Валюта</label>
          <select>
            <option>PLN</option>
            <option>EUR</option>
            <option>USD</option>
          </select>

          <button type="submit">Добавить вклад</button>
        </form>
      </div>
</body>
</html>