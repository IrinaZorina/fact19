
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    date_default_timezone_set('Asia/Yekaterinburg');
    $time = Date('H');
    if ($time >= 8 && $time < 24) {
        $css = 'style';
    } else {
        $css = 'style2';
    }
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Title</title>
    <link rel="stylesheet" href="assets/style/<?php echo $css ?>.css">
</head>
<body>
<header>
    <menu>
        <nav>
            <a href="index.php" class="linkHeader">Главная</a>
            <a href="tableM.php" class="linkHeader">Ячейка таблицы</a>
            <a href="cycles.php" class="linkHeader">Циклы</a>
            <a href="taskFunction.php" class="linkHeader">Функции</a>
            <a href="fact.php" class="linkHeader">Факт</a>
            <a href="bitrix.php" class="linkHeader">Битрикс</a>
        </nav>
        <nav>
            <a href="login.php" class="linkHeader">Авторизация</a>
        </nav>
    </menu>
</header>