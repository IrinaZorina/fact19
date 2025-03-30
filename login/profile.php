<?php
session_start();
require_once 'config.php';
require_once '../functions.php';
$title='Профиль пользователя';
[$cssfunct, $logofunct] = themeSelect();
include_once '../header.php';
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}

$username = $_SESSION['user'];
$userData = getUserData($username);

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['bg_color'])) {
    $color = $_POST['bg_color'];
    saveUserColor($username, $color);
    $_SESSION['profile_bg_color'] = $color;
    [$cssfunct, $logofunct] = themeSelect();
    $_SESSION['theme'] = ($color === '#ffffff') ? 'day' : 'night';
}

$bg_color = $_SESSION['profile_bg_color'] ?? getUserColor($username) ?? '#000000';

if (!$userData) {
    die("Данные пользователя не найдены!");
}
$current_theme = ($bg_color === '#ffffff') ? 'day' : 'night';
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Профиль</title>
    <style>
    </style>
</head>
<body>
<div class="div_profile">
    <h1>Добро пожаловать, <?= htmlspecialchars($username) ?>!</h1>

    <div class="user_info">
        <h2>Ваш профиль</h2>
        <p><strong>Имя пользователя:</strong> <?= htmlspecialchars($userData['username']) ?></p>
        <p><strong>Дата регистрации:</strong> <?= htmlspecialchars($userData['created_at']) ?></p>
        <p><strong>Последняя посещенная страница:</strong>
            <?= isset($_COOKIE['last_visited']) ? htmlspecialchars($_COOKIE['last_visited']) : 'Вы еще не посещали страницы' ?>
        </p>
    </div>
    <div class="navprofile">
        <h3>Перейти:</h3>
        <ul>
            <li><a href="/fact.php">Страница ФАКТ</a></li>
            <li><a href="/bitrix.php">Страница Bitrix</a></li>
        </ul>
    </div>
    <div class="color-picker">
        <form method="POST">
            <label for="bg_color">Выберите тему сайта:</label>
            <select name="bg_color" id="bg_color" onchange="this.form.submit()">
                <option value="#000000" <?= $bg_color === '#000000' ? 'selected' : '' ?>>Ночная тема (style.css)</option>
                <option value="#ffffff" <?= $bg_color === '#ffffff' ? 'selected' : '' ?>>Дневная тема (styleday.css)</option>
                <option value="auto">Авто (по времени)</option>
                </select>
            </select>
        </form>
    </div>
</div>

    <p><a href="logout.php">Выйти</a> | <a href="../index.php">На главную</a></p>
</div>
</body>
</html>