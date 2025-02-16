<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<?php

$currentTime = date('H');
if ($currentTime >= 8 && $currentTime < 20) {
    
    $theme = 'day';
} else {
    
    $theme = 'night';
}
echo '<p>Текущая тема: ' . $theme . '</p>';
?>
<header>
    <a href="Mendel.html">
        <button>Тема 1</button>
    </a>
     <a href="Mendel.html">
        <button>Тема 2</button>
    </a>
</header>
<main>
    <div class="glava"><h1> Денис</h1></div>
    <div class="photo-text-block">
        <img src="assets/image/MV5BNDk1ZTA4OWYtZTliNS00MjAwLThjZjYtMjhkYjEyOTUxNGJmXkEyXkFqcGdeQXVyNjk1MjM0MTk@._V1_.jpg" alt="Фото">
        <div class="text">Привет. Меня зовут Денис Касимов. Работаю руководителем проектов в ай ти компании, г. Уфа.
        </div>
        <div class="text">О курсе: Начинаю практически с нуля. Чувствую придется потрудиться.
        </div>
    </div>
    <h1>Природа</h1>
    <div class="nature">
        <div class="item">
            <img src="assets/image/nature/inzer.jpg" alt="Фото 1">
            <p> Инзер</p>
        </div>
        <div class="item">
            <img src="assets/image/nature/assy.jpg" alt="Фото 1">
            <p> Ассы</p>
        </div>
        <div class="item">
            <img src="assets/image/nature/yaktikul.jpg" alt="Фото 1">
            <p> Якты Куль</p>
        </div>
        <div class="item">
            <img src="assets/image/nature/bannoe.jpg" alt="Фото 1">
            <p> Банное</p>
        </div>
    </div>
    <h2>События Уфы</h2>
    <div class="city">
        <div class="city">
            <img src="assets/image/city/city1.jpg" alt="Уфа 1">
            <p>Уфа</p>
        </div>
        <div class="city">
            <img src="assets/image/city/city2.jpg" alt="Уфа 2">
            <p>Уфа</p>
        </div>
        <div class="city">
            <img src="assets/image/city/city3.jpg" alt="Уфа 3">
            <p>Уфа</p>
        </div>
        <div class="city">
            <img src="assets/image/city/city4.jpg" alt="Уфа 4">
            <p>Уфа</p>
        </div>
        <div class="city">
            <img src="assets/image/city/city5.jpg" alt="Уфа 5">
            <p>Уфа</p>
        </div>
    </div>
</main>
<body class="<?= $theme ?>">
</body>
</html>