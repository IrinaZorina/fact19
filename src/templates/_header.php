<?php

declare(strict_types=1);


require $_SERVER['DOCUMENT_ROOT'] . '/../src/init.php';
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
    <link rel="stylesheet" href="/<?= $cssFile ?>">
    <link rel="stylesheet" href="/assets/styles/global.css">
    <link rel="stylesheet" href="/assets/styles/header.css">
    <link rel="stylesheet" href="/assets/styles/content.css">
    <link rel="stylesheet" href="/assets/styles/footer.css">
    <title>Блинов Владислав</title>
</head>
<body>
<div class="root">
    <header class="header">
        <div class="header__container">
            <a class="header__logo" href="/">
                <img src="/<?= $logoFile ?>" alt="logotype" width="120px"></a>
            <nav class="menu">
                <ul class="menu__list">
                    <li class="menu__item"><a href="/">Главная</a></li>
                    <li class="menu__item"><a href="/homework2">ДЗ от 31.01</a></li>
                    <li class="menu__item"><a href="/homework3">ДЗ от 3.02</a></li>
                    <li class="menu__item"><a href="/homework4">ДЗ от 17.02</a></li>
                    <li class="menu__item"><a href="/homework5">ДЗ от 20.02</a></li>
                </ul>
                <div class="menu__mobile">
                    <ul class="menu__list-mobile">
                        <li class="menu__item-mobile"><a href="index.html">Главная</a></li>
                        <li class="menu__item-mobile"><a href="homework2.php">ДЗ от 31.01</a></li>
                        <li class="menu__item-mobile"><a href="homework3.php">ДЗ от 3.02</a></li>
                        <li class="menu__item-mobile"><a href="homework4.php">ДЗ от 17.02</a></li>
                        <li class="menu__item-mobile"><a href="homework5.php">ДЗ от 20.02</a></li>
                    </ul>
                    <button class="menu__mobile-button">
                        <img class="menu-icon" src="assets/img/burger-menu.svg">
                        <img class="close-icon" src="assets/img/Krest.svg">
                    </button>
                </div>
            </nav>
        </div>
    </header>