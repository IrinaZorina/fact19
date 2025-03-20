<?php
function themeSelect(): array
{
    if (date('H') >= 8 && date('H') < 20) {
        $cssfunct = '/assets/css/styleday.css';
        $logofunct = '/assets/image/logoday.png';
    } else {
        $cssfunct = '/assets/css/style.css';
        $logofunct = '/assets/image/logo.png';
    }
    return [$cssfunct, $logofunct];
}