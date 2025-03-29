<?php require_once 'DayNight.php' ?>
<?php
session_start();
if (isset($_POST['color'])) {
    setcookie('backgroundColor', $_POST['color'], time() + (30 * 24 * 60 * 60), '/');
    header('Location: ' . $_SERVER['REQUEST_URI']);
    exit;
}
$bgColor = isset($_COOKIE['backgroundColor']) ? $_COOKIE['backgroundColor'] : "";
?>

<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?= $style ?>">
</head>
<style>
    body {
        background-color: <?php echo $bgColor?>;
    }
</style>
<body>
<header>
    <div class="container-header">
        <a href="index.php">
            <img src="assets/image/search.png"alt="search" width="100">
        </a>
        <div class="out">
            <a href="loguot.php"> Выход </a>
        </div>
        <div class="theme1">
            <a href="mendeelev.html">Таблица Мендлеева </a>
        </div>
        <div class="theme2">
            <a href="cikli.php"> Циклы </a>
        </div>
        <div class="theme3">
            <a href="massive.php"> Массивы </a>
        </div>
        <div class="theme4">
            <a href="function.php"> Функции </a>
        </div>
        <div class="theme5">
            <a href="post.php"> Get/Post </a>
        </div>
        <?php
        if (isset($_SESSION['login'])) {
        ?>
        <div class="theme6">
            <p> Привет , <?= $_SESSION['login'] ?>  </p>
        </div>
        <?php }else{?>
        <div class="theme6">
            <a href="authentication.php"> Авторизация  </a>
        </div>
        <?php }?>
        <div class="theme7">
            <form method="post">
                <select name="color" size="3">
                    <option value="#A9A9A9" <?php echo $bgColor == '#A9A9A9'? 'selected':'';?>>Темно-серый </option>
                    <option value="#006400" <?php echo $bgColor == '#006400'? 'selected':'';?>>Темно-зеленый </option>
                    <option value="#00BFFF" <?php echo $bgColor == '#00BFFF'? 'selected':'';?>>Голубой </option>
                </select>
                <input type="submit" value="Изменить">
            </form>
        </div>
        <div class="theme8">
            <a href="Files.php"> Файлы </a>
        </div
    </div>
</header>