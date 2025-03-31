<?php
session_start();

if (isset($_SESSION['username'])) {
    header("Location: Welcome.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная страница</title>
</head>
<body>
    <h1>Добро пожаловать на сайт!</h1>
    <nav>
        <ul>
            <li><a href="site/index.php">Главная</a></li>
            <li><a href="auth.php">Авторизация</a></li>
        </ul>
    </nav>
</body>
</html>