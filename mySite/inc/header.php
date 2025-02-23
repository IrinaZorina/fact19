<?php
$hour = date("H");
//$hour = 21;
if ($hour >= 8 && $hour < 20) {
    $style = '/assets/css/Style.css'; // дневной стиль
} else {
    $style = '/assets/css/nightStyle.css'; // ночной стиль
}
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
<body>
<header>
    <div class="container-header">
        <a href="index.php">
            <img src="assets/image/search.png"alt="search" width="100">
        </a>
        <div class="theme1">
            <a href="mendeelev.html">Таблица Мендлеева </a>
        </div>
        <div class="theme2">
            <a href="cikli.php"> Циклы </a>
        </div>
        <div class="theme3">
            <a href="massive.php"> Массивы </a>
        </div>
    </div>
</header>