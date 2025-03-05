<?php require_once 'inc/header.php' ?>
<div class="container-function">
    <div class="function">
        <?php
        echo "<h2>Задание 1 .<br> Создать функцию, которая сравнивает два числа и возвращает наибольшее. </h2>";
        echo "<br>";
        function number($a, $b)
        {
            if ($a > $b) {
                return $a;
            } else {
                return $b;
            }
        }

        $a = 10;
        $b = 20;
        $maxnumber = number($a, $b);
        echo "Число 1:". " " . "$a" ."<br>";
        echo "Число 2:". " " . "$b" ."<br>";
        echo "Наибольшее число :" . " " . $maxnumber;
        echo "<br>";
        echo "<h2>Задание 2 .<br> Создать функцию, которая принимает длину двух катетов и возвращает значение гипотенузы прямоугольного треугольника. </h2>";
        echo "<br>";
        function calc($a, $b)
        {
            $c = sqrt($a * $a + $b * $b);
            return $c;
        }

        $catet1 = 4;
        $catet2 = 5;
        $hypo = calc($catet1, $catet2);
        echo "Катет 1:". " ". "$catet1 " ."<br>";
        echo "Катет 2:". " ". "$catet2 "  ."<br>";
        echo "Длина гипотенузы:" . " " . $hypo;
        echo "<h2>Задание 3 .<br> Создать функцию, которая принимает одно число (10). В функции создать цикл, который будет увеличивать число в 10 раз и выводить его на экран. </h2>";
        echo "<br>";
        function num($a)
        {
            while ($a < 1000000) {
                echo $a . '<br>';
                $a *= 10;
            }
            echo 'Достиг предела:' . $a;
        }

        num(10);
        echo "<h2>Задание 4 .<br> Создать функцию, в которой объявляется массив и случайными элементами. </h2>";
        echo "<br>";
        function Arr($length = 10)
        {
            $array = [];
            for ($i = 0; $i < $length; $i++) {
                $array[] = rand(0, 9);
                echo $array[$i] . "<br>";
            }
            return $array;
        }

        Arr(10);
        echo "<h2>Задание 5 .<br> Создать функцию, которая принимает массив и возвращает среднеарифметическое значение массива. </h2>";
        echo "<br>";
        function average($arr)
        {
            if (count($arr)==0) {
                return 0;
            }
            $sum = array_sum($arr);
            return $sum/count($arr);
        }
        $numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
        echo "Массив:" . "<br>";
        foreach ($numbers as $number) {
            echo $number . "<br>";
        }
        echo "<br>";
        echo "Cреднеарифметическое значение массива: ". " " . average($numbers);
        echo "<h2>Задание 6 .<br> Создать функцию, которая принимает строку. Вернуть количество слов в строке. </h2>";
        echo "<br>";
        function wordcount($str)
        {
            $arr = explode( " ", $str);
            return count($arr);
        }
        echo "Я учусь в Факт Академии" . "<br>";
        echo "Количество слов: " . " " . wordcount( 'Я учусь в Факт Академии');
        echo "<h2>Задание 7 .<br> Создайте функцию, которая принимает одномерный массив и возвращает массив, заполненный случайными числами.  </h2>";
        echo "<br>";
        function arr2($size , $min = 0 , $max = 0)
        {
            $randArray = [];
            for ($i = 0; $i < $size; $i++) {
                $randArray[] = rand($min, $max);
                echo $randArray[$i] . "<br>";
            }
            return $randArray;
        }
        echo "Массив:" . "<br>";
        $result = arr2(10 , 1 , 50);
        echo "<h2>Задание 8 .<br> Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая определит количество слов строке.  </h2>";
        echo "<br>";
        function textWordCount($str)
        {
            return str_word_count($str);
        }
        $text = 'HTML, CSS, PHP, BITRIX';
        echo $text . "<br>";
        echo "Количество слов :" . " ". textWordCount($text);
        echo "<h2>Задание 9 .<br> Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая выведет в обратном порядке буквы («XIRTIB ,PHP … »).  </h2>";
        echo "<br>";
        function reverseWords($str ="HTML, CSS, PHP, BITRIX")
        {
            return strrev($str);
        }
        echo reverseWords();
        echo "<h2>Задание 10 .<br> Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая выводит на экран длину строки.  </h2>";
        echo "<br>";
        function stringLength($str)
        {
            return strlen($str);
        }
        $text = 'HTML, CSS, PHP, BITRIX';
        echo $text . "<br>";
        echo "Длинна строки : " . " " . stringLength('HTML, CSS, PHP, BITRIX');
        echo "<h2>Задание 11 .<br> Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая выводит каждую букву на новую строку  </h2>";
        echo "<br>";
        function newWord($str)
        {
            $words1 = str_split($str);
            foreach ($words1 as $word) {
                echo $word . "<br>";
            }
        }
        echo newWord('HTML, CSS, PHP, BITRIX');
        ?>
    </div>
</div>
<?php require_once 'inc/footer.php' ?>