<?php
session_start();

function getStylesheetByTime()
{
    $Hour = date('H');
    if ($Hour >= 8 && $Hour < 20) {
        return 'assets/css/style.css';
    } else {
        return 'assets/css/noch.css';
    }
}

$smena = getStylesheetByTime();
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Мой сайт</title>
    <link rel="stylesheet" href="<?= $smena ?>">
    <style>
        body {
            background-color: <?php echo isset($_SESSION['bg_color']) ? $_SESSION['bg_color'] : '#ffffff'; ?>;
            transition: background-color 0.5s ease;
        }
    </style>
</head>

<body>
    <header>
        <a href="Serebro-1.html">
            <button>Серебро</button>
        </a>
        <a href="Cycles.php">
            <button>Циклы</button>
        </a>
        <a href="Massiv.php">
            <button>Массивы</button>
        </a>
        <a href="Function.php">
            <button>Функции</button>
        </a>
        <a href="Files1.php">
            <button>Файл общий</button>
        </a>
        <a href="Files2.php">
            <button>Файл дублей</button>
        </a>
        <a href="logout.php">
            <button>Выйти</button>
        </a>

        <form method="POST" action="set_color.php" style="display: inline;">
            <select name="color" onchange="this.form.submit()">
                <option value="">Выберите цвет</option>
                <option value="#ffffff" <?= (isset($_SESSION['bg_color']) && $_SESSION['bg_color'] == '#ffffff') ? 'selected' : '' ?>>Белый</option>
                <option value="#CD5C5C" <?= (isset($_SESSION['bg_color']) && $_SESSION['bg_color'] == '#CD5C5C') ? 'selected' : '' ?>>Красный</option>
                <option value="#808000" <?= (isset($_SESSION['bg_color']) && $_SESSION['bg_color'] == '#808000') ? 'selected' : '' ?>>Зеленый</option>
                <option value="#48D1CC" <?= (isset($_SESSION['bg_color']) && $_SESSION['bg_color'] == '#48D1CC') ? 'selected' : '' ?>>Синий</option>
                <option value="#8A2BE2" <?= (isset($_SESSION['bg_color']) && $_SESSION['bg_color'] == '#8A2BE2') ? 'selected' : '' ?>>Фиолетовый</option>
            </select>
        </form>
    </header>