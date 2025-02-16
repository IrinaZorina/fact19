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
    <a href="Table.html">
        <button>Тема 1</button>
    </a>
    <a href="form.html">
        <button>Тема 2</button>
    </a>
    <a href="Table.html">
        <button>Тема 3</button>
    </a>
</header>
<main>
    <div class="glava"><h1> Алмаз Фахертдинов</h1></div>
    <div class="photo-text-block">
        <img src="assets/image/photo_2025-01-21_00-57-03.jpg" alt="Фото">
        <div class="text">Меня зовут Алмаз, работаю в компании "Открытый регион" руководителем проектов. Как
            проект-менеджер
            в IT, я координирую команды, планирую задачи и обеспечиваю успешную реализацию проектов.
        </div>
        <div class="text">Я только что начал прохождение курсов программирования в академии "Факт". Волнение переполняет
            меня. Погружение в мир кода и алгоритмов обещает быть увлекательным. Преподаватели вдохновляют, а атмосфера
            поддержки к обучению. Я готов к новым вызовам и надеюсь, что эти курсы откроют передо мной новые горизонты.
        </div>
    </div>
    <h1>Красоты Уфы</h1>
    <div class="ufa">
        <div class="item">
            <img src="assets/image/ufa/1.jpg" alt="Фото 1">
            <p> Проспект Октября</p>
        </div>
        <div class="item">
            <img src="assets/image/ufa/2.jpg" alt="Фото 1">
            <p> Набережная реки Белая</p>
        </div>
        <div class="item">
            <img src="assets/image/ufa/4.jpg" alt="Фото 1">
            <p> Микрорайон Сипайлово</p>
        </div>
        <div class="item">
            <img src="assets/image/ufa/5.jpg" alt="Фото 1">
            <p> Праздничный "Горсовет"</p>
        </div>
    </div>
    <h2>Достопримечательности Республики Башкортостан</h2>
    <div class="bashkir">
        <div class="item">
            <img src="assets/image/bshk/1.jpg" alt="Достопримечательность 1">
            <p>Природа Башкортостана</p>
        </div>
        <div class="item">
            <img src="assets/image/bshk/2.jpg" alt="Достопримечательность 2">
            <p>Природа Башкортостана</p>
        </div>
        <div class="item">
            <img src="assets/image/bshk/3.jpg" alt="Достопримечательность 3">
            <p>Природа Башкортостана</p>
        </div>
        <div class="item">
            <img src="assets/image/bshk/4.jpeg" alt="Достопримечательность 4">
            <p>Природа Башкортостана</p>
        </div>
    </div>
</main>
<footer>
    Всем права ущемлены :D
</footer>
</body>
</html>