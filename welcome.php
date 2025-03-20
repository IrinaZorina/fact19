<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: authorization.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добро пожаловать</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; text-align: center; }
        h1 { color: #333; }
    </style>
</head>
<body>
    <h1>Добро пожаловать, <?php echo htmlspecialchars($_SESSION['user']); ?>!</h1>
    <?php if (isset($_SESSION['last_visited_page'])): ?>
        <p>Последняя посещённая страница: <?php echo htmlspecialchars($_SESSION['last_visited_page']); ?></p>
    <?php else: ?>
        <p>Вы ещё не посещали страницы Fact или Bitrix.</p>
    <?php endif; ?>
    <p><a href="fact.php">Перейти на Fact</a> | <a href="bitrix.php">Перейти на Bitrix</a></p>
    <p><a href="logout.php">Выйти</a></p>
</body>
</html>