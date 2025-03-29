<?php
$hostname = "MySQL-8.2";
$username = "Ivan";
$password = "defuses9diAbl";
$dbname = "db_goryachikh";
$conn = mysqli_connect($hostname, $username, $password, $dbname);
if (!$conn) {
    die("Ошибка подключения: " . mysqli_connect_error());
}