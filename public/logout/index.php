<?php

require $_SERVER['DOCUMENT_ROOT'] . '/../src/init.php';

// Убиваем сессию
if (isset($_SESSION['login'])) {
    unset($_SESSION['login']);
}

header("location: /");
exit;