<?php
$hour = date("H");
$hour = 21;
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
        <img src="assets/image/search.jpg"alt="search" width="150">
        <div class="theme1">
            <a href="mendeelev.html">Таблица Мендлеева </a>
        </div>
        <div class="theme2"> </div>
        <div class="theme3"> </div>
    </div>
</header>
<main>
    <div class="main">
        <div class="photo">
            <img src="assets/image/1.jpg" width="500">
        </div>
    <div class="container">
        <div class="about">
            Здравстуйте , меня зовут Горячих Иван. Живу в городе Магнитогорск , ранее учился на программиста , сейчас хочу вспомнить и получить новые знания. В свободное время занимаюсь баскетболом.
        </div>
        <div class="name">
            <h1>Горячих Иван</h1>
        </div>
        <div class="lesson">
            С 1 урока был в восторге , все четко и по делу!
        </div>
    </div>
    </div>
    <div class="mgn-text">
        <h1> Достопримечательности города Магнитогорск </h1>
    </div>
    <div class="mgn-container">
        <div class="mgn-photo1">
            <div class="tyl">
                <p>Тыл-фронту</p>
            </div>
            <img src="assets/image/tyl.JPG" alt="Тыл-фронту" width="350" height="250">
        </div>
        <div class="mgn-photo2">
            <div class="palatka">
                <p>Первая палатка</p>
            </div>
            <img src="assets/image/palatka.jpg" alt="Палатка" width="350" height="250">
        </div>
        <div class="mgn-photo3">
            <div class="hram">
                <p>Собор Вознесения</p>
            </div>
            <img src="assets/image/hram.jpg" alt="hram" width="350" height="250">
        </div>
        <div class="mgn-photo4">
            <div class="arena">
                <p>Арена Металлург</p>
            </div>
            <img src="assets/image/arena.jpg" alt="arena" width="350" height="250">
        </div>
    </div>
    <div class="oblast-text">
        <h1>Достопримечательности Челябинской области</h1>
    </div>
    <div class="oblast-container">
            <div class="oblast-photo1">
            <img src="assets/image/taganay.jpg"alt="taganay" width="920" height="550">
                <p>Парк Таганай</p>
        </div>
        <div class="oblast-photo2">
            <img src="assets/image/turgoyak.jpg"alt="turgoyak" width="920" height="550">
            <p>Озеро Тургояк<p>
        </div>
        <div class="oblast-photo3">
            <img src="assets/image/Sugomak.jpg"alt="sukomak" width="920" height="550">
            <p>Сугомакская пещера</p>
        </div>
        <div class="oblast-photo4">
            <img src="assets/image/arkaym.jpg" alt="arkaym" width="920" height="550">
            <p>Аркаим</p>
        </div>
    </div>
</main>
</body>
