<?php
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: ../public/index.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <title>TFund | Личный кабинет</title>
  <link rel="stylesheet" href="/fund_app/public/css/dashboard.css">
  <script src="/fund_app/public/js/script.js" defer></script>
</head>
  <!-- Стили черной темы -->
<style>
body.dark {
  background-color: #121212;
  color: #fff;
}

body.dark .card {
  background: #3f3f3fff;
}

body.dark tr th {
  background: #3f3f3fff;
}

body.dark .profile-card {
  background: #3f3f3fff;
}

body.dark .profile-card .label {
  color: #fff;
}

body.dark .profile-card .email {
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
</style>
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

  <main class="container">

    <!-- Профиль пользователя -->
    <section class="profile-card">
       <img src="/fund_app/<?= $_SESSION['user']['avatar'] ?>" alt="Awatar użytkownika" class="avatar">
      <div class="profile-info">
        <h2><?= $_SESSION['user']['full_name'] ?></h2>
        <p class="email"><?= $_SESSION['user']['email'] ?></p>
        <div class="balance">
          <div>
            <span class="label">bilans ogólny:</span>
            <h3>Bilans: <?= htmlspecialchars($_SESSION['user']['balance'] ?? '0.00') ?> PLN</h3>
          </div>
          <div>
            <span class="label">Rentowność:</span>
            <span class="value positive">+6.2%</span>
          </div>
        </div>
                <?php
        if (!empty($_SESSION['message'])) {
            echo '<p>' . htmlspecialchars($_SESSION['message']) . '</p>';
            unset($_SESSION['message']);
        }
        ?>
      </div>
    </section>

    <!-- Статистика -->
    <section class="card">
      <h2>Stan rachunku</h2>
      <table>
        <tr>
          <th>Dewiza</th>
          <th>Wniesiono</th>
          <th>Wartość bieżąca</th>
          <th>Zmiana</th>
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




       
