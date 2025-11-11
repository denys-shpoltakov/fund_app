<?php 

// выход с аккаунта

    session_start();
    unset($_SESSION['user']);
    header('Location: ../public/index.php');

?>