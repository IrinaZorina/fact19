<?php
$str = "ПрИвет, мир";
$bykva = 'и';

$count = substr_count(mb_strtolower($str), mb_strtolower($bykva));

echo "Количество букв и  : $count";
?>