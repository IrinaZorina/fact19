<?php
session_start();
$Vremya = date('H');
if ($Vremya >= 8 && $Vremya < 20) {
    $den_noch = 'assets/css/style.css';
} else {
    $den_noch = 'assets/css/noch.css';
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?= $den_noch ?>">
    <style>
    body {
    background-color: <?php echo isset($_SESSION['bg_color']) ? $_SESSION['bg_color'] : '#ffffff'; ?>;
    transition: background-color 0.5s ease;
    }
    </style>
</head>
<body>
<header>
    <a href="index.php">
        <button>Главня</button>
    </a>
    <a href="Cycles.php">
        <button>Циклы</button>
    </a>
    <a href="form.php">
        <button>Форма</button>
    </a>
    <a href="Table.html">
        <button>Элемент "Менделеева"</button>
    </a>
    <a href="Massiv.php">
        <button>Массивы</button>
    </a>
    <a href="Function.php">
        <button>Функции</button>
    </a>
    <a href="Files.php">
        <button>Файлы Оригинал</button>
    </a>
    <a href="Files2.php">
        <button>Файлы Дубли</button>
    </a>
    <a href="logout.php">
        <button>Выход</button>
    </a>
    <form method="POST" action="set_color.php" style="display: inline;">
        <select name="color" onchange="this.form.submit()">
            <option value="">Выберите цвет</option>
            <option value="#BC8F8F" <?= (isset($_SESSION['bg_color']) && $_SESSION['bg_color'] == '#BC8F8F') ? 'selected' : '' ?>>
                Розовый
            </option>
            <option value="#00FFFF" <?= (isset($_SESSION['bg_color']) && $_SESSION['bg_color'] == '#00FFFF') ? 'selected' : '' ?>>
                Аква
            </option>
            <option value="#FFE4C4" <?= (isset($_SESSION['bg_color']) && $_SESSION['bg_color'] == '#FFE4C4') ? 'selected' : '' ?>>
                Бисквит
            </option>
            <option value="#48D1CC" <?= (isset($_SESSION['bg_color']) && $_SESSION['bg_color'] == '#48D1CC') ? 'selected' : '' ?>>
                Синий
            </option>
            <option value="#FFFF00" <?= (isset($_SESSION['bg_color']) && $_SESSION['bg_color'] == '#FFFF00') ? 'selected' : '' ?>>
                Жёлтый
            </option>
        </select>
    </form>
</header>