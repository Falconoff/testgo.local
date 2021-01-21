<?php

// данные для подключения к БД
$server = "localhost";
$username = "root";
$password = "";
$dbname = "testgo";

// подключение к БД testgo
$connect = mysqli_connect($server, $username, $password, $dbname);
// устанавливаем кодировку БД для кириллицы
mysqli_set_charset($connect, 'utf8');

?>