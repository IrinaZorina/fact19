<?php
function getStylesheetByTime() {
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
        <a href="index.php">
            <button>На главную</button>
        </a>
    </header>