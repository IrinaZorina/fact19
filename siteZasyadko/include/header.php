<?php
require_once 'DayNight.php';
?>
<?php
session_start();
if (isset($_POST['theme'])) {
    setcookie('background', $_POST['theme'], time() + (3600 * 24 * 30), '');
}
$bgColor = isset($_COOKIE['background']) ? $_COOKIE['background'] : "";
?>
<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?= $style ?>">
</head>
<style>
    body {
        background-color: <?php echo $bgColor?>;
    }
</style>
<body>
<header>
    <form method="post">
        <select name="theme" size="3">
            <option value="#FF0000" <?php echo $bgColor == '#FF0000' ? 'selected' : ''; ?>> Красный</option>
            <option value="#FF69B4" <?php echo $bgColor == '#FF69B4' ? 'selected' : ''; ?>> Розовый</option>
            <option value="#4169E1" <?php echo $bgColor == '#4169E1' ? 'selected' : ''; ?>> Голубой</option>
        </select>
        <input type="submit" value="Изменить">
    </form>
    <div class="container-header">
        <a href="index.php">
            <img src="assets/image/home.png"alt="search" width="100">
        </a>
        <div class="theme1">
            <a href="mendeelev.html">Таблица Мендлеева </a>
        </div>
        <div class="theme2">
            <a href="Cycles.php"> Циклы </a>
        </div>
        <div class="theme3">
            <a href="array.php"> Массивы </a>
        </div>
        <div class="theme4">
            <a href="function.php"> Функции </a>
        </div>
        <div class="theme5">
            <a href="getPost.php"> GetPost </a>
        </div>
        <div class="theme6">
            <a href="/auto.php"> Авторизация </a>

        </div>
    </div>
</header>