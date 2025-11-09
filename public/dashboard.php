<?php 

// личный кабинет пользователя

?>


<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <title>TFund | Личный кабинет</title>
  <link rel="stylesheet" href="/fund_app/public/css/dashboard.css">
</head>
<style>

</style>
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

  <main class="container">

    <!-- Профиль пользователя -->
    <section class="profile-card">
      <img src="" alt="Аватар пользователя" class="avatar">
      <div class="profile-info">
        <h2>Иван Петров</h2>
        <p class="email">ivan.petrov@example.com</p>
        <div class="balance">
          <div>
            <span class="label">Общий баланс:</span>
            <span class="value">12 700 PLN</span>
          </div>
          <div>
            <span class="label">Доходность:</span>
            <span class="value positive">+6.2%</span>
          </div>
        </div>
      </div>
    </section>

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




       
