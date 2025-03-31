<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: auth.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добро пожаловать</title>
</head>
<body>
    <h1>Добро пожаловать, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
    <?php if(isset($_SESSION['last_visited'])): ?>
        <p>Последняя посещенная страница: <?php echo htmlspecialchars($_SESSION['last_visited']); ?></p>
    <?php endif; ?>
    <nav>
        <a href="fact.php">Fact Page</a>
        <a href="bitrix.php">Bitrix Page</a>
        <a href="index.php">На главную</a>
    </nav>
</body>
</html>