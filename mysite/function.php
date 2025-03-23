<?php include_once 'inc/head.php'; ?>
    <div class="function">
        <h2>Задание 1 <br>
            Создать функцию, которая сравнивает два числа и возвращает наибольшее.</h2>
        <?php
        function num($a, $b)
        {
            if ($a > $b) {
                return $a;
            } else {
                return $b;
            }
        }

        $a = rand(1, 10);
        $b = rand(1, 10);
        $Average = num($a, $b);
        echo 'Первое число: ' . $a . "<br>";
        echo 'Второе число: ' . $b . "<br>";
        echo 'Большее число: ' . $Average;
        ?>
        <h2>Задание 2 <br>
            Создать функцию, которая принимает длину двух катетов и возвращает значение гипотенузы прямоугольного
            треугольника.</h2>
        <?php
        function calc($a, $b)
        {
            $c = sqrt($a * $a + $b * $b);
            return $c;
        }

        $cat1 = 4;
        $cat2 = 5;
        $hypo = calc($cat1, $cat2);
        echo 'Первый катета: ' . $cat1 . "<br>";
        echo 'Второй катета: ' . $cat2 . "<br>";
        echo "Длина гипотенузы:" . " " . $hypo;
        ?>

        <h2>Задание 3 <br>
            Создать функцию, которая принимает одно число (10). В функции создать цикл, который будет увеличивать число
            в 10 раз и выводить его на экран. Когда число будет больше 1 000 000, на экране должно появляться сообщение,
            что вы достигли предела.</h2>
        <?php
        function num1($a)
        {
            while ($a < 1000000) {
                echo $a . '<br>';
                $a *= 10;
            }
            echo 'Достиг предела:' . $a;
        }

        num1(10);

        ?>
        <h2>Задание 4 <br>
            Создать функцию, в которой объявляется массив и случайными элементами.</h2>
        <?php
        function randomArr($length = 10)
        {
            $array = [];
            for ($i = 0; $i < $length; $i++) {
                $array[] = rand(0, 9);
                echo $array[$i] . '<br>';
            }
            return $array;
        }

        echo "Массив с случайными числами: " . "<br>";
        randomArr();
        ?>
        <h2>Задание 5 <br>
            Создать функцию, которая принимает массив и возвращает среднеарифметическое значение массива.</h2>
        <?php
        function AvArray(array $array)
        {

            return array_sum($array) / count($array);
        }

        $array[] = rand(0, 9);
        echo "Среднеарифметическое значение массива: ";
        echo AvArray($array);

        ?>
        <h2>Задание 6 <br>
            Создать функцию, которая принимает строку. Вернуть количество слов в строке.</h2>
        <?php
        function wordcount($str)
        {
            $arr = explode(" ", $str);
            return count($arr);
        }

        echo "Слов в строке: ";
        echo wordcount('Создать функцию, которая принимает строку. Вернуть количество слов в строке.');
        ?>
        <h2>Задание 7 <br>
            Создайте функцию, которая принимает одномерный массив и возвращает массив, заполненный случайными числами.
        </h2>
        <?php
        function arr($size, $min = 0, $max = 0)
        {
            $randArray = [];
            for ($i = 0; $i < $size; $i++) {
                $randArray[] = rand($min, $max);
                echo $randArray[$i] . "<br>";
            }
            return $randArray;
        }

        $result = arr(10, 1, 50);
        ?>
        <h2>Задание 8 <br>
            Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая определит количество слов строке.</h2>
        <?php
        function txtwordcount($str)
        {
            return str_word_count($str);
        }

        $text = 'HTML, CSS, PHP, BITRIX';
        echo 'Строка: ' . $text . "<br>" . 'Слов в строке: ' . txtwordcount($text);
        ?>
        <h2>Задание 9 <br>
            Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая выведет в обратном порядке буквы («XIRTIB
            ,PHP … »).</h2>
        <?php
        function revStr($str = "HTML, CSS, PHP, BITRIX")
        {
            return strrev($str);
        }

        echo revStr();
        ?>
        <h2>Задание 10 <br>
            Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая выводит на экран длину строки.</h2>
        <?php
        function lenghtStr($str)
        {
            return strlen($str);
        }

        echo 'Длина строки: ' . lenghtStr('HTML, CSS, PHP, BITRIX');
        ?>
        <h2>Задание 11 <br>
            Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая выводит каждую букву на новую строку</h2>
        <?php
        function newStr($str)
        {
            $word = str_split($str);
            foreach ($word as $words) {
                echo $words . "<br>";
            }
        }

        echo newStr('HTML, CSS, PHP, BITRIX');
        ?>

    </div>
<?php include_once 'inc/footer.php'; ?>