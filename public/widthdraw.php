<?php 

// декларация пополнения

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/fund_app/public/css/transactions.css">
  <script src="/fund_app/public/js/script.js" defer></script>
  <title>TFund | Вывод средств</title>
  <!-- Стили черной темы -->
  <style>
body.dark {
  background-color: #121212;
  color: #ffffff;
}

body.dark form {
  background: #3f3f3fff;

}

body.dark input {
  background: #7a7a7aff;
  color: #fff;
}

body.dark input::placeholder {
  color: #fff;
}

body.dark select {
  background: #7a7a7aff;
  color: #fff;
}

body.dark h2 {
  color: #fff;
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
  color: #fff;
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
      <h1>Fundusz inwestycyjny</h1>
      <nav>
        <a href="/fund_app/public/dashboard.php">Profil</a>
        <a href="/fund_app/public/deposit.php">Zasilić depozyt</a>
        <a href="/fund_app/public/widthdraw.php">Wypłata środków</a>
        <a href="/fund_app/app/logout.php">Wyjście</a>
        <label class="switch">
        <input type="checkbox" id="theme-toggle">
        <span class="slider"></span>
        </label>
      </nav>
    </div>
  </header>
      <section class="grid">
      <div class="card">
        <h2>Wypłata środków</h2>
        <form action="../app/widthdraw.php" method="post">
          <label>Kwota</label>
          <input type="number" name="amount" step="0.01" placeholder="Wprowadź kwotę">

          <label>Waluta</label>
          <select>
            <option>PLN</option>
            <option>EUR</option>
            <option>USD</option>
          </select>

          <button type="submit">Wypłacić środki</button>
        </form>
      </div>
</body>
</html>