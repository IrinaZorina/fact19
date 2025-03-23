<?php
require_once 'functions.php';
$hour = date("H");
//$hour = 23;
if ($hour >= 8 && $hour < 20) {
    $style = '/assets/css/styleSite.css'; // дневной стиль
} else {
    $style = '/assets/css/nightStyle.css'; // ночной стиль
}
