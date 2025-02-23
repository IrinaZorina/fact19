<?php
$hour = date("H");
if ($hour >= 8 && $hour < 20) {
    $style = '\assets\style\styles.css';
} else {
    $style = '\assets\style\nightTheme.css';
}
?>
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
                <li><a href="/">Главная</a></li>
                <li><a href="/cycles.php">Циклы</a></li>
                <li><a href="/massive.php">Массивы</a></li>
            </ul>
        </nav>
    </div>
</header>
</body>
</html>