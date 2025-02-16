<?php
$Hour = date('H');
if ($Hour >= 8 && $Hour < 20) {
    $Style = '\assets\css\style.css';
} else {
    $Style = '\assets\css\noch.css';
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
    <link rel="stylesheet" href="<?= $Style ?>">

</head>

<body>
    <header>
        <a href="Serebro-1.html">
            <button>Серебро</button>
        </a>
        <a href="">
            <button>Ссылка 2</button>
        </a>
        <a href="">
            <button>Ссылка 3</button>
        </a>
    </header>
    <main>
        <div class="FIO">
            <h1> Дамир Садрисламов</h1>
        </div>
        <div class="photo-text-block">
            <img src="assets/image/photo_2024-12-23_16-01-43.jpg" alt="Фото">
            <div class="text">
                <h3>О себе</h3>
                Привет! Меня зовут Дамир, работаю в компании ЦИТ "Открытый Регион" руководителем проектов.
            </div>
            <div class="text">
                <h3>О курсе</h3>
                Обучаюсь на курсах в академии "ФАКТ". Это моё первое домашнее задание. Учусь постепенно кодить,
                надеюсь курс будет мне понятен и я смогу в дальнейшем активно пользоваться полученными на этом курсе
                знаниями!
            </div>
        </div>
        <h1>Чем богат Башкортостан</h1>
        <div class="priroda">
            <div class="item">
                <img src="assets/image/bashkort/Sheehan.jpg" alt="Фото 1">
                <p> Могучие шиханы</p>
            </div>
            <div class="item">
                <img src="assets/image/bashkort/bee.jpg" alt="Фото 1">
                <p> Самый лучший мёд</p>
            </div>
            <div class="item">
                <img src="assets/image/bashkort/river.jpg" alt="Фото 1">
                <p> Бесконечные реки</p>
            </div>
            <div class="item">
                <img src="assets/image/bashkort/kurai.jpg" alt="Фото 1">
                <p> Уникальная музыка</p>
            </div>
        </div>
        <h2>Достопримечательности города Уфы</h2>
        <div class="Ufa">
            <div class="item">
                <img src="assets/image/ufa/fontain.jpg" alt="Достопримечательность 1">
                <p>Фонтан "Семь девушек"</p>
            </div>
            <div class="item">
                <img src="assets/image/ufa/mechet.jpg" alt="Достопримечательность 2">
                <p>Мечеть Ляля-Тюльпан</p>
            </div>
            <div class="item">
                <img src="assets/image/ufa/monument.jpg" alt="Достопримечательность 3">
                <p>Монумент Дружбы</p>
            </div>
            <div class="item">
                <img src="assets/image/ufa/Salavat.jpg" alt="Достопримечательность 4">
                <p>Памятник Салавату Юлаеву</p>
            </div>
        </div>
    </main>
    <footer>
        Мой сайт. Уфа - 2025 год.
    </footer>
</body>

</html>