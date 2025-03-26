<?php
    function timeOfDay()
    {
        return ((date("H") >= 8 && date('H') < 22) || (isset($_COOKIE['theme']) && $_COOKIE['theme'] == 1)) ? '../assets/Styles/styles.css' : '../assets/Styles/styles_dark.css' ;

    }
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Сарбаева Галия</title>
    <link rel="stylesheet"
          href="<?=timeOfDay()?>">
</head>
<body>
<header>
    <nav class="navbar_menu">
        <div class="container">
            <ul class="navbar_list">
                <li><a class="nav_p" href="../index.php"> ПОРТФОЛИО</a></li>
                <!--<li><a class="nav_p" href="../get_post.php"> GET/POST</a></li>-->
                <li><a class="nav_p" href="../session.php"> COOKIE/SESSION</a></li>
                <!--<li><a class="nav_p" href="../files.php"> РАБОТА С ФАЙЛАМИ</a></li>-->
                <li><a class="nav_p" href="../auth/index.php"> Авторизация</a></li>

            </ul>
        </div>
    </nav>
</header>