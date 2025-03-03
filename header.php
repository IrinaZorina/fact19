<?php
$time = date("H");
if ($time >= 8 && $time < 20) {
    $tiptemy = '/assets/css/styleday.css';
    $logo = '/assets/image/daylogo.png';
} else {
    $tiptemy = '/assets/css/style.css';
    $logo = '/assets/image/nighlogo.png';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=" <?= $tiptemy ?>">
    <title><?php echo $title; ?></title>
</head>
<body>
<header>
    <div class="header">
        <div class="logo">
            <a href="index.php"><img src="<?=$logo ?>" alt="Главная"></a>
        </div>
        <div>
            <br>
            <a href="hw-php1.php">Домашняя Работа по PHP</a>
        </div>
        <div>
            <br>
            <a href="hw-array-php.php">Массивы PHP</a>
        </div>
        <div>
            <br>
            <a href="hw-php-rows.php">Строки PHP</a>
        </div>
    </div>
</header>