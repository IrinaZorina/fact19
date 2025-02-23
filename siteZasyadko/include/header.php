<?php
$hour = date("H");
//$hour = 21;
if ($hour >= 8 && $hour < 20) {
    $style = '\assets\css\styleSite.css';
} else {
    $style = '\assets\css\night.css';
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Засядько Максим - Студент курсов Fact</title>
    <link rel="stylesheet" href="<?= $style ?>">
</head>
<body>
<header class="header">
    <a href="index.php">
        <img src="assets/image/home.png" width="100">
    </a>
    <section class="projects">
        <h2>Проекты и ссылки</h2>
        <div class="project-links">
            <a href="https://www.tripadvisor.ru/Attractions-g298541-Activities-Magnitogorsk_Chelyabinsk_Oblast_Urals_District.html"
               target="_blank" class="project-link">
                <div class="project-content">
                    <span class="project-title">Достопримечательности города Магнитогорска</span>
                    <span class="project-description">Просмотр</span>
                </div>
                <div class="arrow">→</div>
            </a>
            <a href="https://www.tripadvisor.ru/Attractions-g2323973-Activities-Chelyabinsk_Oblast_Urals_District.html"
               target="_blank" class="project-link">
                <div class="project-content">
                    <span class="project-title">Достопримечательности Челябинской Области</span>
                    <span class="project-description">Просмотр</span>
                </div>
                <div class="arrow">→</div>
            </a>
            <a href="Cycles.php"
               target="_blank" class="project-link">
                <div class="project-content">
                    <span class="project-title">Циклы</span>
                    <span class="project-description">Просмотр</span>
                </div>
                <div class="arrow">→</div>
                <a href="array.php"
               target="_blank" class="project-link">
                <div class="project-content">
                    <span class="project-title">Массив</span>
                    <span class="project-description">Просмотр</span>
                </div>
                <div class="arrow">→</div>
            </a>
</header>
