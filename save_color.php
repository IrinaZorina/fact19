<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['color'])) {
    $color = htmlspecialchars($_POST['color']);
    setcookie('last_background_color', $color, time() + 3600 * 24 * 30, '/'); // Храним 30 дней
}
?>