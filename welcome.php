<?php
session_start(); // Запускаем сессию

if (!isset($_SESSION['user'])) {
    header("Location: authorization.php"); // Перенаправление, если пользователь не авторизован
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
    <p><a href="authorization.php?logout=1">Выйти</a></p>
</body>
</html>

<?php
if (isset($_GET['logout'])) {
    session_destroy(); // Уничтожаем сессию при выходе
    header("Location: authorization.php");
    exit();
}
?>