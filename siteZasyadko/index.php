<?php
$hour = date("H");
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
    <div class="avatar">👨‍💻</div>
    <div class="one"><img src="assets/image/2.png" width="500px" height="500px"></div>
    <h1>Привет, Я Засядько Максим</h1>
    <p class="description">
        Здравствуйте!Меня зовут Засядько Максим,мне 26 лет.Хочу поменять профессию.Работал во множестве
        сферах,мой инетерес встал на этом так как часто увлекался пк и многим что связанно с ним.
    </p>
    <div class="social-links">
        <a href="https://t.me/Einherjar_piorun">
            <img src="assets/image/telegram.png" width=150px alt="Telegram">
        </a>
    </div>
</header>
<section class="about">
    <h2>О себе</h2>
    <p>Я работаю в сфере продаж. Я мендежер по продажам. Хочу научится программировать и
        создавать что-то. Ещё мне нравится проводить время на корде и играть в басктебол
    </p>
</section>
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
        <h2 class="sight">Достопримечательности Магнитогорска</h2>
        <div class="box1">
            <img src="assets/image/mgn1.png" width="500px">
            <img src="assets/image/mgn2.png" width="500px">
            <img src="assets/image/mgn3.png" width="500px">
            <img src="assets/image/mgn4.png" width="500px">
        </div>
        <h2 class="sight2">Достопримечательности Челябинской Области </h2>
        <div class="box2">
            <div class="photo1">
            <img src="assets/image/chel.png" width="500px" height="450">
        </div>
        <div class="photo2">
            <img src="assets/image/chel2.png" width="500px" height="450"  alt="«Метеоритное» озеро Сунгур">
        </div>
        <div class="photo3">
            <img src="assets/image/chel3.png" width="500px" alt="«Марсианские» терриконы Копейска">
        </div>
        <div class="photo4">
            <img src="assets/image/chel4.png" width="500px" height="375"
                 alt="Андреевский каменный карьер - рукотворный памятник природы">
        </div>
    </div>
    <footer class="footer">
        <p>© 2025 Засядько Максим. Футер</p>
    </footer>
    </div>
</section>
</body>
</html>