<?php

declare(strict_types=1);

session_start();

include_once $_SERVER['DOCUMENT_ROOT'] . '/../src/functions.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/../src/Classes/User.php';

[$cssFile, $logoFile] = getTheme();
$backgroundColor = getBackgroundColor();

$lastPage = $_SESSION['last_page'] ?? 'пусто';

if (isset($_SESSION['show_message']) && $lastPage != 'пусто') {
    echo '<script>alert("Последняя страница: ' . $lastPage . '");</script>';
    unset($_SESSION['show_message']);
}

