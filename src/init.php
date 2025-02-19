<?php

$name = 'Блинов Владислав';

if (date('H') >= 8 && date('H') < 20) {
    $cssFile = 'assets/styles/color/light.css';
    $logoFile = 'assets/img/factAcademy-logo_light.svg';
} else {
    $cssFile = 'assets/styles/color/dark.css';
    $logoFile = 'assets/img/factAcademy-logo_dark.svg';
}
