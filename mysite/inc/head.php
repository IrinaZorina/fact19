<?php require_once 'daynight.php'; ?>

<?php
session_start();
if (isset($_POST['theme'])) {
    setcookie('background', $_POST['theme'], time() + (3600 * 24 * 30), '');
}
$bgColor = isset($_COOKIE['background']) ? $_COOKIE['background'] : "";
?>

<!DOCTYPE html>
<html lang="en">
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
                <option value="#800080" <?php echo $bgColor == '##800080' ? 'selected' : ''; ?>> Фиолетовый</option>
                <option value="#008000" <?php echo $bgColor == '#008000' ? 'selected' : ''; ?>> Зеленый</option>
            </select>
            <input type="submit" value="Изменить">
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
            </ul>
        </nav>

    </div>

</header>
</body>
</html>