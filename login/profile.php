<?php
session_start();
require_once 'config.php';
require_once '../functions.php';
$title='Профиль пользователя';
include_once '../header.php';
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}

$username = $_SESSION['user'];
$userData = getUserData($username);

if (!$userData) {
    die("Данные пользователя не найдены!");
}
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
    </div>

    <p><a href="logout.php">Выйти</a> | <a href="../index.php">На главную</a></p>
</div>
</body>
</html>