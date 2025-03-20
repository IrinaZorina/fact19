<?php
session_start();

// Сохраняем информацию о посещении этой страницы
$_SESSION['last_visited_page'] = 'fact.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fact Page</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; text-align: center; }
        h1 { color: #333; }
    </style>
</head>
<body>
    <h1>Это страница Fact</h1>
    <p>Здесь интересные факты!</p>
    <p><a href="bitrix.php">Перейти на Bitrix</a></p>
    <p><a href="authorization.php">Вернуться к авторизации</a></p>
</body>
</html>