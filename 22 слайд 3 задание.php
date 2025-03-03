<?php
$input = "Закирова Регина Артуровна";

$parts = explode(' ', $input);

if (count($parts) === 3) {
    $familiya = $parts[0];
    $imya = $parts[1];
    $output = $imya . ' ' . $familiya;
} else {
    $output = "Некорректный формат строки";
}
echo $output;
?>