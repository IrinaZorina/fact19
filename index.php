<?php
$time = date("H");
if ($time >= 8 && $time < 20) {
    $tiptemy = '/assets/css/styleday.css';
        $logo = '/assets/image/logoday.png';
} else {
    $tiptemy = '/assets/css/style.css';
        $logo = '/assets/image/logo.png';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=" <?= $tiptemy ?>">
    <title>О себе</title>
</head>
<body>
<header>
    <div class="header">
        <div class="logo">
            <a href="index.html"><img src="<?=$logo ?>" alt="На главную"></a>

        </div>
        <div>
            <br>
            <a href="tema1.html">Тема 1</a>
        </div>
        <div>
            <br>
            <a href="tema2.html">Тема 2</a>
        </div>
        <div>
            <br>
            <a href="tema3.html">Тема 3</a>
        </div>
    </div>

</header>
<main>
    <div class="biogrid">
        <div class="foto">
            <img src="assets/image/foto.jpeg" width="100%" height="100%" alt="Я">

        </div>

        <div class="bio"><H1>Константин Мосунов</H1></div>
        <div class="persinfo">
            Добрый день! Хотел бы рассказать несколько слов о себе.
            Мне 30 лет и являюсь студентом академии "Факт". Также имею высшее образование по профилю
            "Производственный менеджмент". Долгое время владел и руководил небольшой компанией, занимающейся
            обслуживанием частной недвижимости.
            У меня 3-ое детей и счастливая семья!
        </div>
        <div class="feedback">
            Хотел бы оставить небольшой отзыв по пройденному материалу, на текущий момент. Вводный курс я
            прошел и вопрос практически не возникало.
            Т.к. с HTMl я сталкивался еще в школе, основные проблемы это синтаксис и ошибки связанные с этим, но в
            целом
            все ясно. После просмотра записи встречи, тоже особых вопросов нет, кроме ощущения выполнения задания с
            помощью "костылей". В общем перед началом курса было страшней)
        </div>
    </div>
    <h1>Достопримечательности Москвы</h1>
    <div class="attract">
        <div class="fontan">
            <br>
            <img src="assets/image/fontan.jpg" alt="Фонтан 'Дружбы народов'"
                 style="max-width: 90%; max-height: 80%">
            <p>Фонтан "Дружбы Народов" на ВДНХ</p>
        </div>
        <div class="sobor">
            <br>
            <img src="assets/image/sobor.jpg" alt="Собор Василия Блаженного"
                 style="max-width: 90%; max-height: 80%; align-items: center">
            <p>Собор Василия Блаженного</p>
        </div>
        <div class="tsar">
            <br>
            <img src=" assets/image/tsar2.jpg" alt="Царь-пушка"
                 style="width: 90%; max-height: 80%">
            <p> Царь-Пушка</p>
        </div>
        <div class="kremlin">
            <br>
            <img src=" assets/image/kremlin.jpg" alt="Московский Кремль"
                 style="max-width: 90%; max-height: 80%">
            <p>Московский Кремль</p>
        </div>
    </div>
    <h1> Достопримечательности Московского региона</h1>
    <div class="attract1">
        <div class="ierus">
            <br>
            <img src=" assets/image/ierus1.jpg" alt="Н-И монастырь"
                 style="max-width: 90%; max-height: 80%">
            <p> Ново-Иерусалимский монастырь</p>
        </div>
        <div class="prioksk">
            <br>
            <img src=" assets/image/prioksk1.jpg" alt="Приокский заповедник"
                 style="max-width: 90%; max-height: 80%">
            <p> Приокско-Террасный заповедник</p>
        </div>
        <div style="width: 100%; height: 30px"></div>
        <div class="zarajsk">
            <br>
            <img src="assets/image/zarajsk1.jpg" alt="Зарайский Кремль"
                 style="max-width: 90%; max-height: 80%">
            <p> Зарайский кремль</p>

        </div>
        <div class="borodino">
            <br>
            <img src="assets/image/borodino1.jpg" alt="Музей Бородино"
                 style="max-width: 90%; max-height: 80%">
            <p> Музей Бородино</p>

        </div>

    </div>
</main>

</div>
</body>
</html>