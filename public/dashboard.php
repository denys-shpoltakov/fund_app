<?php 

// личный кабинет пользователя
 
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<style>

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

/* ===== Контейнер ===== */
.container {
  max-width: 1000px;
  margin: 20px auto;
  padding: 0 20px;
}

/* ===== Карточки ===== */
.card {
  background: white;
  border-radius: 12px;
  padding: 20px;
  margin-bottom: 20px;
  box-shadow: 0 4px 10px rgba(0,0,0,0.05);
}

h2 {
  color: #0a3a66;
  margin-top: 0;
}

/* ===== Профиль ===== */
.profile-card {
  display: flex;
  align-items: center;
  background: white;
  border-radius: 12px;
  padding: 20px;
  margin-bottom: 25px;
  box-shadow: 0 4px 10px rgba(0,0,0,0.05);
}

.avatar {
  width: 100px;
  height: 100px;
  border-radius: 50%;
  margin-right: 20px;
  object-fit: cover;
  border: 3px solid #0a3a66;
}

.profile-info h2 {
  margin: 0;
  font-size: 22px;
}

.profile-info .email {
  color: #555;
  margin: 4px 0 12px;
}

.balance {
  display: flex;
  gap: 30px;
}

.balance .label {
  color: #777;
  font-size: 14px;
}

.balance .value {
  font-weight: bold;
  font-size: 16px;
}

.balance .positive {
  color: green;
}

/* ===== Таблицы ===== */
table {
  width: 100%;
  border-collapse: collapse;
  margin-top: 10px;
}

th {
  background: #f0f2f8;
  text-align: left;
  padding: 10px;
  border-bottom: 2px solid #ddd;
}

td {
  padding: 10px;
  border-bottom: 1px solid #eee;
}

.change-up {
  color: green;
  font-weight: bold;
}

.change-down {
  color: red;
  font-weight: bold;
}

/* ===== Формы ===== */
form {
  display: flex;
  flex-direction: column;
  gap: 10px;
}

input, select {
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 6px;
  font-size: 15px;
}

button {
  background-color: #0a3a66;
  color: white;
  border: none;
  padding: 10px 15px;
  border-radius: 6px;
  cursor: pointer;
  font-weight: 600;
  transition: 0.2s;
}

button:hover {
  background-color: #094066;
}

/* ===== Сетка для форм ===== */
.grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 20px;
}


</style>
<body>
    <header>
        <div class="container">
            <h1>Инвестиционный фонд</h1>
            <nav>
                <a href="#">Главная</a>
                <a href="#">Счёт</a>
                <a href="#">Выплаты</a>
                <a href="#">Профиль</a>
            </nav>
        </div>
    </header>

    <!-- Статистика -->
    <section class="card">
      <h2>Состояние счёта</h2>
      <table>
        <tr>
          <th>Валюта</th>
          <th>Внесено</th>
          <th>Текущая стоимость</th>
          <th>Изменение</th>
        </tr>
        <tr>
          <td>PLN</td>
          <td>10 000</td>
          <td>10 600</td>
          <td class="change-up">+6.0%</td>
        </tr>
        <tr>
          <td>EUR</td>
          <td>2 000</td>
          <td>2 100</td>
          <td class="change-up">+5.0%</td>
        </tr>
      </table>
    </section>
  </main>
</body>
</html>




       
