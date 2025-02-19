<?php
$Hour = date('H');
if ($Hour >= 8 && $Hour < 20) {
    $smena = 'assets/css/style.css';
} else {
    $smena = 'assets/css/noch.css';
}
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
        <a href="">
            <button>Ссылка 3</button>
        </a>
    </header>