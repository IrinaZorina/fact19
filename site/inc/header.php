<?php
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
</head>
<body>
<header>
    <a href="../index.php">
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
</header>