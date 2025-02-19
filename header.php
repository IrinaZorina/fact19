<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <?php
        if (8 > date("H") && date("H") >= 20) {
            echo "<link rel=\"stylesheet\" href=\"styles/dark.css\">";
        }
    ?>
</head>
<body>
    <header>
        <nav class="navigation">
            <ul class="navigation-list">
                <li class="navigation-list-item">
                    <a class="navigation-list-item-link" href="index.php">Главная</a>
                </li>
                <li class="navigation-list-item">
                    <a class="navigation-list-item-link" href="mendeleev.php">Ячейка Менделеева</a>
                </li>
                <li class="navigation-list-item">
                    <a class="navigation-list-item-link" href="cycles.php">Циклы</a>
                </li>
            </ul>
        </nav>
    </header>
    <main>
