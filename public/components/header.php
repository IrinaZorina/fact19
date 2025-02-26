<?php
$hour = date("H");

$theme = ($hour >= 8 && $hour < 20) ? "day-theme" : "night-theme";
?>


<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>О себе</title>
  <link rel="stylesheet" href="/styles/index.css?v=<?= time() ?>" />
  <link rel="stylesheet" href="/styles/table.css?v=<?= time() ?>" />
</head>

<body class="<?php echo $theme; ?>">

  <header class="header">
    <nav>
      <ul>
        <li><a href="index.php">Главная</a></li>
        <li><a href="table.php">Таблица</a></li>
        <li><a href="cycles.php">Циклы</a></li>
      </ul>
    </nav>
  </header>