<?php
$hostname = "MySQL-8.2";
$username = "Mike";
$password = "evrei228";
$dbname = "db_Yuzhakov";
$conn = mysqli_connect($hostname, $username, $password, $dbname);
if (!$conn) {
    die("Ошибка подключения: " . mysqli_connect_error());
}