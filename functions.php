<?php
require_once 'login/config.php';

function themeSelect() {
    if (strpos($_SERVER['REQUEST_URI'], '/login/profile.php') !== false) {
        if (isset($_SESSION['user'])) {
            $theme = getUserTheme($_SESSION['user']);
            return $theme == 'day'
                ? ['/assets/css/styleday.css', '/assets/image/logoday.png']
                : ['/assets/css/style.css', '/assets/image/logo.png'];
        }
    }
    $hour = date('H');
    if ($hour >= 8 && $hour < 20) {
        return ['/assets/css/styleday.css', '/assets/image/logoday.png'];
    } else {
        return ['/assets/css/style.css', '/assets/image/logo.png'];
    }
}