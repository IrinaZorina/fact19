<?php include '../header.php'; ?>
<?php 

// Задача 1: Функция, которая сравнивает два числа и возвращает наибольшее.
function findMax($a, $b)
{
    if ($a > $b) {
        return $a;
    } else {
        return $b;
    }
}
echo "Задача 1: Наибольшее число: " . findMax(3, 7) . "<br>";
echo "Задача 1: Наибольшее число: " . findMax(10, 7) . "<br>";

// Задача 2: Функция, которая принимает длину двух катетов и возвращает гипотенузу.
function calculateHypotenuse($a, $b)
{
    $c = sqrt($a ** 2 + $b ** 2);
    return $c;
}
echo "Задача 2: Гипотенуза: " . calculateHypotenuse(4, 4) . "<br>";

// Задача 3: Функция, которая увеличивает число в 10 раз и выводит его, пока оно не станет больше 1 000 000.
function increaseByTenTimes($a)
{
    while ($a < 1000000) {
        $a *= 10;
        echo $a . "<br>";
        if ($a >= 1000000) {
            echo "Вы достигли предела" . "<br>";
            break;
        }
    }
}
echo "Задача 3: Результаты увеличения числа: <br>";
increaseByTenTimes(10);

// Задача 4 и 5: Функция, которая создает массив случайных чисел и возвращает его.
function generateRandomArray()
{
    $array = [];
    for ($i = 0; $i < 5; $i++) {
        $array[] = mt_rand(0, 9); // Заполняем массив случайными числами
    }
    return $array;
}

// Функция для нахождения среднего арифметического.
function calculateAverage($arr)
{
    $sum = array_sum($arr); // array_sum() — считает сумму всех элементов массива
    $count = count($arr);   // count() — считает количество элементов массива
    return $sum / $count;   // Считаем среднее арифметическое
}

$array = generateRandomArray();
echo "Задача 4 и 5: Массив случайных чисел: ";
print_r($array); // Смотрим, что получилось в массиве
echo "<br>";
echo "Среднее арифметическое: " . calculateAverage($array) . "<br>";

// Задача 6: Функция, которая возвращает количество слов в строке.
function countWordsInString($a)
{
    $words = explode(" ", $a);
    return count($words);
}
echo "Задача 6: Количество слов: " . countWordsInString("Привет, как дела?") . "<br>";

// Задача 7: Функция, которая рассчитывает последовательность чисел Фибоначчи.
function fibonacciSequence($n)
{
    if ($n <= 1) {
        return $n;
    }
    return fibonacciSequence($n - 1) + fibonacciSequence($n - 2);
}
echo "Задача 7: Число Фибоначчи: " . fibonacciSequence(6) . "<br>";

// Задача 8: Функция, которая возвращает массив, заполненный случайными числами.
function generateArrayWithRandomNumbers($a)
{
    for ($i = 0; $i <= 5; $i++) {
        $a[] = mt_rand(1, 9);
    }
    return $a;
}
echo "Задача 8: Массив случайных чисел: ";
var_dump(generateArrayWithRandomNumbers([])) . "<br>";

// Задача 9: Функция, которая определяет количество слов в строке.
function countWordsInSentence($count)
{
    $countWord = str_word_count($count);
    return $countWord;
}
echo "Задача 9: Количество слов: " . countWordsInSentence("HTML, CSS, PHP, BITRIX") . "<br>";

// Задача 10: Функция, которая выведет строку в обратном порядке.
function reverseString($c)
{
    return strrev($c);
}
echo "Задача 10: Строка в обратном порядке: " . reverseString('HTML, CSS, PHP, BITRIX') . "<br>";

// Задача 11: Функция, которая возвращает длину строки.
function stringLength($a)
{
    return strlen($a);
}
echo "Задача 11: Длина строки: " . stringLength('HTML, CSS, PHP, BITRIX') . "<br>";

// Задача 12: Функция, которая выводит каждую букву строки на новой строке.
function printEachLetter($c)
{
    for ($i = 0; $i < strlen($c); $i++) {
        echo $c[$i] . "<br>";
    }
}
echo "Задача 12: Каждая буква на новой строке: <br>";
printEachLetter("HTML, CSS, PHP, BITRIX");
