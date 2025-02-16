<?php

declare(strict_types=1);

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
    <link rel="stylesheet" href="assets/styles/homework2.css">
    <link rel="stylesheet" href="assets/styles/footer.css">
    <title>Блинов Владислав - ДЗ_2</title>
</head>
<body>
<header class="header">
    <?php require '../src/templates/header.php'; ?>
</header>
<main class="main">
    <div class="content">
        <section class="section form">
            <h2 class="title form__title">Форма:</h2>
            <form class="form__content" action="#">
                <div class="form__group">
                    <label for="user">Имя пользователя</label>
                    <input id="user" type="text" name="user" required>
                </div>
                <div class="form__group">
                    <label for="email">E-mail</label>
                    <input id="email" type="email" name="email" required>
                </div>
                <div class="form__group">
                    <label for="select">Что собираетесь учить?</label>
                    <select id="select" name="select" required>
                        <option value="php">PHP</option>
                        <option value="php">HTML</option>
                        <option value="bitrix">Битрикс</option>
                    </select>
                </div>
                <fieldset class="form__fieldset">
                    <legend class="form__legend">Хочу быть...</legend>
                    <div class="form__fieldset-group">
                        <input id="junior" type="radio" name="radio-button" value="juniorPhp">
                        <label for="junior">Junior PHP Developer</label>
                    </div>
                    <div class="form__fieldset-group">
                        <input id="middle" type="radio" name="radio-button" value="middlePhp">
                        <label for="middle">Middle PHP Developer</label>
                    </div>
                    <div class="form__fieldset-group">
                        <input id="frontend" type="radio" name="radio-button" value="frontend">
                        <label for="frontend">Frontend разработчик</label>
                    </div>
                    <div class="form__fieldset-group">
                        <input id="designer" type="radio" name="radio-button" value="designer"><label for="designer">Дизайнером</label>
                    </div>
                </fieldset>
                <fieldset class="form__fieldset">
                    <legend class="form__legend">Мои навыки...</legend>
                    <div class="form__fieldset-group">
                        <input id="god" type="checkbox" name="god">
                        <label for="god">Бог программирования</label>
                    </div>
                    <div class="form__fieldset-group">
                        <input id="guru" type="checkbox" name="guru">
                        <label for="guru">Гуру программирования</label>
                    </div>
                    <div class="form__fieldset-group">
                        <input id="student" type="checkbox" name="student">
                        <label for="student">...только учусь</label>
                    </div>
                </fieldset>
                <div class="form__group">
                    <label for="date-time">Во сколько мне удобно приходить на занятия?</label>
                    <input id="date-time" type="datetime-local" name="date-time">
                </div>
                <div class="form__group">
                    <label for="comment">Мои пожелания</label>
                    <textarea id="comment" name="comment" rows="10"></textarea>
                </div>
                <button class="form__submit" type="submit">Все, я справился с формой!</button>
            </form>
        </section>
        <section class="section table">
            <h2 class="title table__title">Таблица</h2>
            <table class="table__content">
                <tr class="table__row">
                    <td class="table__data" colspan="2">
                        ячейка 1
                        <img src="assets/img/cat.jpg"></td>
                    <!--		<td class="table__data" >ячейка 2</td>-->
                </tr>
                <tr class="table__row">
                    <td class="table__data" rowspan="2">ячейка 3</td>
                    <td class="table__data"><img src="assets/img/cat.jpg"></td>
                </tr>
                <tr class="table__row">
                    <!--		<td class="table__data" >ячейка 5</td>-->
                    <td class="table__data"><img src="assets/img/cat.jpg"></td>
                </tr>
            </table>
        </section>
        <section class="section image-table">
            <h2 class="title image-table__title">Картинка и таблица</h2>
            <div class="image-table__image"></div>
            <div class="table-two">
                <table class="table-two__content">
                    <tr class="table-two__row">
                        <td class="table-two__data">Птица</td>
                        <td class="table-two__data"><img src="assets/img/bird.png" alt="Изображение птицы"
                                                         title="Птица"></td>
                    </tr>
                    <tr class="table-two__row">
                        <td colspan="2" class="table-two__data">Хомяк
                            <img src="assets/img/hamster.png" alt="Изображение хомяка"
                                 title="Хомяк"></td>
                    </tr>
                    <tr class="table-two__row">
                        <td class="table-two__data">Божья коровка</td>
                        <td class="table-two__data"><img src="assets/img/insect.png" alt="Изображение божьи коровки"
                                                         title="Божья коровка"></td>
                    </tr>
                </table>
            </div>
        </section>
    </div>
</main>
<footer class="footer">
    <?php require '../src/templates/footer.php'; ?>
</footer>
<script src="assets/js/hamburger-menu.js"></script>
</body>
</html>