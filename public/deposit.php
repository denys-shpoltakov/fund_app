<?php 

// декларация пополнения

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TFund | Пополнение депозита</title>
  <style>
* { box-sizing: border-box; }

body {
  margin: 0;
  font-family: "Segoe UI", Arial, sans-serif;
  background-color: #f5f6fa;
  color: #222;
}


  /* ===== Шапка ===== */
header {
  background-color: #0a3a66;
  color: white;
  padding: 15px 0;
  box-shadow: 0 2px 6px rgba(0,0,0,0.15);
}

header .container {
  display: flex;
  justify-content: space-between;
  align-items: center;
  max-width: 1000px;
  margin: auto;
  padding: 0 20px;
}

header h1 {
  margin: 0;
  font-size: 22px;
}

header nav a {
  color: white;
  text-decoration: none;
  margin-left: 20px;
  font-weight: 500;
  transition: 0.2s;
}

header nav a:hover {
  text-decoration: underline;
}

form {
  background-color: #f8f9fa; 
  padding: 20px;
  border-radius: 10px; 
  max-width: 500px;
  margin: 40px auto; 

}

h2 {
  text-align: center;
  margin-bottom: 20px;
  color: #0a3c68; 
}

label {
  font-weight: bold;
  margin-top: 10px;
  display: block;
}

input, select {
  width: 100%;
  padding: 10px;
  margin-top: 5px;
  margin-bottom: 15px;
  border: 1px solid #ccc;
  border-radius: 6px;
  box-sizing: border-box;
  
}

button {
  width: 100%;
  padding: 12px;
  background-color: #0a3c68;
  color: white;
  font-weight: bold;
  border: none;
  border-radius: 6px;
}

button:hover {
  background-color: #0e538c;
}

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
      <script>
const toggle = document.getElementById('theme-toggle');

// При загрузке страницы проверяем сохранённую тему
if (localStorage.getItem('theme') === 'dark') {
  document.body.classList.add('dark');
  toggle.checked = true;
}

toggle.addEventListener('change', () => {
  if (toggle.checked) {
    document.body.classList.add('dark');
    localStorage.setItem('theme', 'dark');
  } else {
    document.body.classList.remove('dark');
    localStorage.setItem('theme', 'light');
  }
});
</script>
</body>
</html>