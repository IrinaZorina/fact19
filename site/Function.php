<?php require_once 'inc/header.php' ?>
<style>
    body {
        color: white;
    }
</style>
<br>
<h1> Задание со слайда №17</h1>
<h3> Задание 1. Функция, которая принимает одномерный массив и возвращает массив,
    заполненный случайными числами.</h3><br>
<?php
function fillArrayWithRandomNumbers($array)
{
    foreach ($array as &$value) {
        $value = rand(1, 100);
    }
    return $array;
}

$inputArray = [0, 0, 0, 0];
$resultArray = fillArrayWithRandomNumbers($inputArray);
print_r($resultArray);
?>
<br>
<h3> Задание 2. Функция, которая определяет количество слов в строке.</h3><br>
<?php
function countWords($string)
{
    $words = explode(', ', $string);
    return count($words);
}

$string = "HTML, CSS, PHP, BITRIX";
echo countWords($string);
?>
<br>
<h3> Задание 3. Функция, которая выводит строку в обратном порядке.</h3><br>
<?php
function reverseString($string)
{
    return strrev($string);
}

$string = "HTML, CSS, PHP, BITRIX";
echo reverseString($string);
?>
<br>
<h3> Задание 4. Функция, которая выводит длину строки.</h3><br>
<?php
function printStringLength($string)
{
    echo strlen($string);
}
$string = "HTML, CSS, PHP, BITRIX";
printStringLength($string);
?>
<br>
<h3> Задание 5. Функция, которая выводит каждую букву строки на новую строку.</h3><br>
<?php
function printEachLetterOnNewLine($string)
{
    for ($i = 0; $i < strlen($string); $i++) {
        echo $string[$i] . "\n";
    }
}
$string = "HTML, CSS, PHP, BITRIX";
printEachLetterOnNewLine($string);
?>
<?php require_once 'inc/footer.php' ?>