<?php
session_start(); // Инициализация сессии

require('../style/function.php');
include_once "header.php";

// Функция для удаления сессии и очистки куки
function destroySession() {
    // Очищаем все данные сессии
    session_unset(); 
    // Уничтожаем сессию
    session_destroy(); 
    // Перенаправляем на главную страницу
    header("Location: ../index.php"); 
    // Завершаем выполнение скрипта
    exit(); 
}

$theme = "light-theme";

// Если тема уже сохранена в cookie, используем её
if (isset($_COOKIE['theme'])) {
    $theme = $_COOKIE['theme'];
}

// Если тема выбирается через форму
if (isset($_POST['theme'])) {
    if ($_POST['theme'] == "dark") {
        $theme = "dark-theme"; 
        setcookie('theme', 'dark-theme', time() + (86400 * 30), "/"); // Сохраняем в cookie
    } else {
        $theme = "light-theme"; 
        setcookie('theme', 'light-theme', time() + (86400 * 30), "/"); // Сохраняем в cookie
    }
    header("Refresh:0"); 
}

// Если нажата кнопка удаления сессии
if (isset($_POST['delete-session']) && $_POST['delete-session'] == "true") {
    destroySession(); // Вызываем функцию для удаления сессии и очистки куки
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="php,html,css,bitrix">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body class="<?php echo $theme; ?>">

<h1>Добро пожаловать!</h1>
<p>Вы авторизованы</p>
<?php 
    if (isset($_COOKIE['last-url'])) {
        echo "<p> В последний раз вы были на странице: " . $_COOKIE['last-url'] . "</p>";
    } else {
        echo "ошибка";
    }
?>
<h2>Выберите страницу</h2>
<a href="bitrix.php">Bitrix</a>
<a href="fact.php">Fact</a>

<p>Удалить сессию</p>
<form action="" method="post">
    <input type="hidden" name="delete-session" value="true">
    <button type="submit">
        Удалить сессию
    </button>
</form>

<h2>Выбрать тему</h2>
<form action="" method="post">
    <select name="theme">
        <option value="dark" <?= ($theme == 'dark-theme') ? 'selected' : '' ?>>Темная</option>
        <option value="light" <?= ($theme == 'light-theme') ? 'selected' : '' ?>>Светлая</option>
    </select>
    <button type="submit">
        Выбрать
    </button>
</form>

</body>
<?php
require_once('../pages/footer.php');
?>
</html>