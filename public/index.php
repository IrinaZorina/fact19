<?php

declare(strict_types=1);

$name = 'Блинов Владислав';

if (date('H') >= 8 && date('H') < 20) {
    $cssFile = 'assets/styles/color/light.css';
    $logoFile = 'assets/img/factAcademy-logo_light.svg';
} else {
    $cssFile = 'assets/styles/color/dark.css';
    $logoFile = 'assets/img/factAcademy-logo_dark.svg';
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link
            href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet">
    <link rel="stylesheet" href="<?= $cssFile ?>">
    <link rel="stylesheet" href="assets/styles/global.css">
    <link rel="stylesheet" href="assets/styles/header.css">
    <link rel="stylesheet" href="assets/styles/index.css">
    <link rel="stylesheet" href="assets/styles/footer.css">
    <title><?= $name ?></title>
</head>
<body>
<div class="root">
    <header class="header">
        <?php require '../src/templates/header.php'; ?>
    </header>
    <main class="main">
        <section class="bio section">
            <aside class="aside">
                <div class="aside__photo"><img src="assets/img/Photo.jpg" alt="photo" width="220px"></div>
            </aside>
            <div class="content">
                <h1 class="content__title content__title_hidden">Страничка о себе</h1>
                <h2 class="content__title"><?= $name ?></h2>
                <div class="content-container">
                    <p class="paragraph content__about">Работаю моушн-дизайнером, делаю анимацию. Очень нравится изучать
                        разработку, писать скрипты. Люблю прогулки, настольные игры, слушать музыку, играть в
                        компьютерные
                        игры.</p>
                    <p class="paragraph content_opinion">Первое занятие очень понравилось, объяснили много сложного
                        доступным
                        языком.</p>
                </div>
            </div>
        </section>
        <section class="city section">
            <div class="city__attractions">
                <h3 class="attractions__title city__title">Достопримечательности города Оренбурга</h3>
                <ul class="attractions__list city__list">
                    <li class="attractions__item city__item">
                        <img src="https://avatars.dzeninfra.ru/get-zen_doc/271828/pub_6597ad273c349263cdfc8e45_6597ae50a4afb845b1b977f0/scale_2400"
                             alt="Пешеходный мост Европа-Азия">
                        <p>Пешеходный мост Европа-Азия</p>
                    </li>
                    <li class="attractions__item city__item">
                        <img src="https://nashural.ru/assets/uploads/DSC04395-e1571218652996.jpg"
                             alt="Елизаветинские ворота">
                        <p>Елизаветинские ворота</p>
                    </li>
                    <li class="attractions__item city__item">
                        <img src="https://nashural.ru/assets/uploads/DSC04129-e1571218661880.jpg"
                             alt="Парк победы">
                        <p>Парк победы</p>
                    </li>
                    <li class="attractions__item city__item">
                        <img src="https://nashural.ru/assets/uploads/DSC03960-e1571218717823.jpg"
                             alt="Караван-сарай">
                        <p>Караван-сарай</p>
                    </li>
                </ul>
            </div>
            <div class="city__museums">
                <h3 class="museums__title city__title">Музеи города Оренбурга</h3>
                <ul class="museums__list city__list">
                    <li class="museums__item city__item">
                        <img src="https://nashural.ru/assets/uploads/DSC04415-e1571218643611.jpg"
                             alt="Музей истории Оренбурга">
                        <p>Музей истории Оренбурга</p>
                    </li>
                    <li class="museums__item city__item">
                        <img src="https://nashural.ru/assets/uploads/DSC04185-e1571218697353.jpg"
                             alt="Дом-музей Гагариных">
                        <p>Дом-музей Гагариных</p>
                    </li>
                    <li class="museums__item city__item">
                        <img src="https://nashural.ru/assets/uploads/DSC03989-e1571218729958.jpg"
                             alt="Музей изобразительного искусства">
                        <p>Музей изобразительного искусства</p>
                    </li>
                    <li class="museums__item city__item">
                        <img src="https://nashural.ru/assets/uploads/DSC04216-e1571218740508.jpg"
                             alt="Оренбургский губернаторский музей">
                        <p>Оренбургский губернаторский музей</p>
                    </li>
                </ul>
            </div>
        </section>
    </main>
    <footer class="footer">
        <?php require '../src/templates/footer.php'; ?>
    </footer>
</div>
<script src="assets/js/hamburger-menu.js"></script>
</body>
</html>