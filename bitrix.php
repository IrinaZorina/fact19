<?php
session_start();
require_once 'login/config.php';

if (!isset($_SESSION['user'])) {
    header('Location: auth/login.php');
    exit;
}
setcookie('last_visited', 'bitrix.php', time() + 3600 * 24 * 30, '/');

include_once 'header.php';
?>
<body>
<main>
    <h1>Bitrix</h1>
    <p>ЛЯЛЯЛЯ</p>
    <p>Последняя посещенная страница:
        <?= isset($_COOKIE['last_visited']) ? htmlspecialchars($_COOKIE['last_visited']) : 'Нет данных' ?>
    </p>
</main>
</body>
</html>