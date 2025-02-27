<?php

declare(strict_types=1);

include_once $_SERVER['DOCUMENT_ROOT'] . '/../src/functions.php';

if (date('H') >= 8 && date('H') < 20) {
    $cssFile = 'assets/styles/color/light.css';
    $logoFile = 'assets/img/factAcademy-logo_light.svg';
} else {
    $cssFile = 'assets/styles/color/dark.css';
    $logoFile = 'assets/img/factAcademy-logo_dark.svg';
}
