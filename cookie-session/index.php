<?php
session_start();

if (isset($_POST['color'])) {
    $_SESSION['bg_color'] = $_POST['color'];
}

$bgColor = isset($_SESSION['bg_color']) ? $_SESSION['bg_color'] : '#ffffff';
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Изменение цвета фона</title>
    <style>
        body {
            background-color: <?php echo $bgColor; ?>;
            transition: background-color 0.5s;
        }
    </style>
</head>
<body>

<h1>Выберите цвет фона</h1>
<form method="post">
    <select name="color" onchange="this.form.submit()">
        <option value="#ffffff" <?php if ($bgColor == '#ffffff') echo 'selected'; ?>>Белый</option>
        <option value="#ff0000" <?php if ($bgColor == '#ff0000') echo 'selected'; ?>>Красный</option>
        <option value="#00ff00" <?php if ($bgColor == '#00ff00') echo 'selected'; ?>>Зеленый</option>
        <option value="#0000ff" <?php if ($bgColor == '#0000ff') echo 'selected'; ?>>Синий</option>
        <option value="#ffff00" <?php if ($bgColor == '#ffff00') echo 'selected'; ?>>Желтый</option>
    </select>
</form>

</body>
</html>
