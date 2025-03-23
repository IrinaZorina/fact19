<?php require_once 'daynight.php'; ?>

<?php
session_start();
if (isset($_POST['theme'])) {
    setcookie('background', $_POST['theme'], time() + (3600 * 24 * 30), '/');
    header("Location: " . $_SERVER['REQUEST_URI']);
    exit;
}

if (isset($_POST['reset'])) {
    setcookie('background', $_POST['reset'], time() - 3600, '/');
    header("Location: " . $_SERVER['REQUEST_URI']);
    exit;
}
$bgColor = isset($_COOKIE['background']) ? $_COOKIE['background'] : "";
?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?= $style ?>">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <title>Домашняя работа</title>
</head>
<style>
    body {
        background-color: <?php echo $bgColor?>;
    }
</style>
<body>
<header>
    <div class="theme7">
        <form method="post">
            <select name="theme" size="3">
                <option value="#808080" <?php echo $bgColor == '#808080' ? 'selected' : ''; ?>> Серый</option>
                <option value="#800080" <?php echo $bgColor == '#800080' ? 'selected' : ''; ?>> Фиолетовый</option>
                <option value="#008000" <?php echo $bgColor == '#008000' ? 'selected' : ''; ?>> Зеленый</option>
            </select>
            <input type="submit" value="Изменить">
        </form>
        <form method="post">
            <input type="submit" name="reset" value="Вернуть прежний">
        </form>
    </div>
    <div class="auth">
        <a href="/auth.php"> Авторизация </a>
    </div>
    <div class="head">
        <img class="logo" src="/assets/image/logo.jpg" alt="Лого">
        <nav id="menu">
            <ul>
                <li><a href="/">Главная</a></li>
                <li><a href="/cycles.php">Циклы</a></li>
                <li><a href="/massive.php">Массивы</a></li>
                <li><a href="/function.php">Функции</a></li>
                <li><a href="/getpost.php">GET/POST</a></li>
                <li><a href="/files.php">Файлы</a></li>
            </ul>
        </nav>

    </div>

</header>
</body>
</html>