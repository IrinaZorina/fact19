<?php
require_once __DIR__ . '/mainFunctions.php';
$theme = dayNnight();

// Проверяем куки и устанавливаем начальный цвет
$defaultColor = '#ffffff'; // Белый по умолчанию
if (isset($_COOKIE['last_background_color'])) {
    $defaultColor = $_COOKIE['last_background_color'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Евгений Крупнов</title>
  <link rel="stylesheet" href="/style.css" />
  <style>
    body { transition: background-color 0.3s; }
  </style>
</head>
<body class="<?php echo $theme; ?>" style="background-color: <?php echo $defaultColor; ?>">
  <header>
    <div style="text-align: center; margin-bottom: 10px;">
      <label for="colorSelect">Выберите цвет фона: </label>
      <select id="colorSelect" onchange="changeBackground()">
        <option value="#ffffff">Белый</option>
        <option value="#ff0000">Красный</option>
        <option value="#00ff00">Зелёный</option>
        <option value="#0000ff">Синий</option>
        <option value="#ffff00">Жёлтый</option>
      </select>
    </div>
    <div class="workcontainer">
      <ul class="work-list">
        <li><strong>Мои работы</strong></li>
        <li><a href="element/element.php">Элемент таблицы Менделеева</a></li>
        <li><a href="homework/cycles.php">Работа с циклами</a></li>
        <li><a href="homework/arrays.php">Работа с массивами</a></li>
        <li><a href="homework/functions.php">Работа с функциями</a></li>
        <li><a href="homework/dates.php">Работа с данными от пользователей</a></li>
        <li><a href="authorization.php">Авторизация</a></li>
      </ul>
    </div>
    <h1 class="titleheader">Мой сайт</h1>
  </header>
  <script>
    function changeBackground() {
      var select = document.getElementById("colorSelect");
      var color = select.value;
      document.body.style.backgroundColor = color;

      // Отправляем запрос на сервер для сохранения цвета в куки
      var xhr = new XMLHttpRequest();
      xhr.open("POST", "save_color.php", true);
      xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
      xhr.send("color=" + encodeURIComponent(color));
    }

    // Устанавливаем начальное значение селекта на основе текущего цвета
    window.onload = function() {
      var select = document.getElementById("colorSelect");
      var currentColor = "<?php echo $defaultColor; ?>";
      for (var i = 0; i < select.options.length; i++) {
        if (select.options[i].value === currentColor) {
          select.options[i].selected = true;
          break;
        }
      }
    };
  </script>