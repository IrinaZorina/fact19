<?php require_once './inc/functions.php';
    $hour = date("H");
/*$hour = 21;*/
    if ($hour >= 8 && $hour < 20) {
        $style = '/assets/css/Style.css'; // дневной стиль
    } else {
        $style = '/assets/css/nightStyle.css'; // ночной стиль
}
