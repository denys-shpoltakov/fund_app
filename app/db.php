<?php 

// подключение к БД

    $connect = mysqli_connect('localhost', 'root', '', 'schema');

    if (!$connect) {
        die('Error connect to DB');
    }
?>