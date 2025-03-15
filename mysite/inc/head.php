<?php require_once 'daynight.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?= $style ?>">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <title>Домашняя работа</title>
</head>
<body>
<header>
    <div class="head">
        <img class="logo" src="/assets/image/logo.jpg" alt="Лого">
        <nav id="menu">
            <ul>
                <li><a href="/auth.php" class="auth">Авторизация</a></li>
                <li><a href="/">Главная</a></li>
                <li><a href="/cycles.php">Циклы</a></li>
                <li><a href="/massive.php">Массивы</a></li>
                <li><a href="/function.php">Функции</a></li>
                <li><a href="/getpost.php">GET/POST</a></li>
            </ul>
        </nav>
    </div>
</header>
</body>
</html>