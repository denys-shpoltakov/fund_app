<?php
session_start();

if (isset($_SESSION['user'])) {
    header('Location: ../public/dashboard.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/fund_app/public/css/auth.css">
   <script src="/fund_app/public/js/script.js" defer></script>
  <title>TFund — Rejestracja</title>
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

body.dark .form-container {
  background-color: #3f3f3fff;
}

body.dark h2 {
  background-color: #3f3f3fff;
}

body.dark h2 {
  color: #121212;
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
</head>
<body>
  <div class="form-container">
    <h2>Rejestracja</h2>
    <form action="/fund_app/app/signup.php" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="full_name">Imię i nazwisko</label>
        <input type="text" name="full_name" id="full_name" placeholder="Wprowadź swoje pełne imię i nazwisko">
      </div>

      <div class="form-group">
        <label for="email">E-mai</label>
        <input type="email" name="email" id="email" placeholder="Wprowadź swój adres e-mail">
      </div>

      <div class="form-group">
        <label for="avatar">Zdjęcie profilowe(opcjonalnie)</label>
        <input type="file" name="avatar" id="avatar" >
      </div>

      <div class="form-group">
        <label for="password">Hasło</label>
        <input type="password" name="password" id="password" placeholder="Wprowadź hasło">
      </div>

      <div class="form-group">
        <label for="password_confirm">Potwierdzenie hasła</label>
        <input type="password" name="password_confirm" id="password_confirm" placeholder="Potwierdź hasło">
      </div>

      <button type="submit">Zarejestrować się</button>

        <label class="switch">
        <input type="checkbox" id="theme-toggle">
        <span class="slider"></span>
        </label>


      <p>
       Masz już konto — <a href="index.php">Zalogować się</a>
      </p>
        <?php  
      if (isset($_SESSION['message'])) {
        echo '      <p class="msg"> ' . $_SESSION['message'] . ' </p>';
      }
      unset($_SESSION['message']);
        ?>
    </form>
  </div>
</body>
</html>
