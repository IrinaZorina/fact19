<?php
require_once 'functions.php';
if (!isset($cssfunct)) {
    [$cssfunct, $logofunct] = themeSelect();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=" <?=$cssfunct?>">
    <title><?php echo $title; ?></title>
</head>
<body>
<header>
    <div class="header">
        <div class="logo">
            <a href="/index.php"><img src="<?= htmlentities($logofunct) ?>" alt="На главную"></a>

        </div>
        <div>
            <br>
            <a href="/hw-php1.php">Домашняя Работа PHP</a>
        </div>
        <div>
            <br>
            <a href="/hw-array-php.php">Массивы PHP</a>
        </div>
        <div>
            <br>
            <a href="/hw-php-rows.php">Работа со строками</a>
        </div>
        <div>
            <br>
            <a href="/login/login.php">Авторизация</a>
        </div>
    </div>

</header>