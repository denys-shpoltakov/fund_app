<?php 

// декларация пополнения

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TFund | Вывод средств</title>
  <style>
html, body {
  height: 100%;
  margin: 0;
  padding: 0;
  display: flex;
  flex-direction: column;
  font-family: Arial, Helvetica, sans-serif;
}


    header {
  background-color: #0a3a66;
  color: white;
  padding: 15px 0;
  }

  header .container 
  {
  display: flex;
  justify-content: space-between;
  align-items: center;
  max-width: 1000px;
  margin: auto;
  padding: 0 20px;
  }

  header nav a {
  color: white;
  text-decoration: none;
  margin-left: 20px;
  font-weight: 500;
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


  </style>
</head>
<body>
  <header>
    <div class="container">
      <h1>Инвестиционный фонд</h1>
      <nav>
        <a href="#">Главная</a>
        <a href="#">Профиль</a>
        <a href="#">Инвестиции</a>
        <a href="#">Выход</a>
      </nav>
    </div>
  </header>
      <section class="grid">
      <div class="card">
        <h2>Вывод средств</h2>
        <form>
          <label>Сумма</label>
          <input type="number" step="0.01" placeholder="Введите сумму">

          <label>Валюта</label>
          <select>
            <option>PLN</option>
            <option>EUR</option>
            <option>USD</option>
          </select>

          <button>Вывести средства</button>
        </form>
      </div>


</body>
</html>