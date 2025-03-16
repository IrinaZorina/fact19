<?php
require_once __DIR__ . '/mainFunctions.php'; // Подключаем файл с функциями
$theme = dayNnight(); // Определяем тему
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Евгений Крупнов</title>
  <link rel="stylesheet" href="/style.css" />
</head>
<body class="<?php echo $theme; ?>">
  <header>
    <div class="workcontainer">
      <ul class="work-list">
        <li><strong>Мои работы</strong></li>
        <li><a href="element/element.php">Элемент таблицы Менделеева</a></li>
        <li><a href="homework/cycles.php">Работа с циклами</a></li>
        <li><a href="homework/arrays.php">Работа с массивами</a></li>
        <li><a href="homework/functions.php">Работа с функциями</a></li>
        <li><a href="homework/dates.php">Работа с данными от пользователей</a></li>
        <li><a href="authorization.php">Авторизация</a></li> <!-- Добавленная ссылка -->
      </ul>
    </div>
    <h1 class="titleheader">Мой сайт</h1>
  </header>