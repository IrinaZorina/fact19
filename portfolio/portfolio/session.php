<?php require_once 'inc/header.php'?>
        <div class="homework">
            <p style="text-align: center">Слайд 16</p>
            <h3>6. Создать функцию, которая принимает строку. Вернуть количество слов в строке.</h3>
            <div class="hw1">
                <?php
                function outArray($str) {
                    $arr = explode(" ", $str);
                    echo  '<br>Слов в предложении: '.count($arr);

                };

                echo $str= 'Создать функцию, которая принимает строку. Вернуть количество слов в строке.';
                outArray($str);
                ?>
            </div>
            <h3>7. *Написать функцию, которая рассчитывает последовательность чисел Фибоначчи.</h3>
            <div class="hw2">
                <?php
                function fib($n) {
                    return round((((1 + sqrt(5)) / 2) ** $n - ((1 - sqrt(5)) / 2) ** $n) / sqrt(5));
                }

                $n = mt_rand(3,10);
                echo $n.' число последовательности: '.fib(intval($n));
                ?>
            </div>
            <p style="text-align: center"><br>Слайд 17</p>
            <h3>1. Создайте функцию, которая принимает одномерный массив и возвращает массив, заполненный случайными числами.</h3>
            <div class="hw3">
                <?php
                function rand_array($n, $arr) {
                    echo 'Новый массив: <br>';
                    for($i = 0; $i < $n; $i++) {
                        echo $arr2[] = mt_rand(1,100).' ';
                    }
                }

                $n = mt_rand(5, 10);
                echo 'Массив из '.$n.' элементов<br>';
                for ($i = 0; $i < $n; $i++) {
                    echo $arr2[] = mt_rand(1,100).' ';
                }
                echo '<br>';
                rand_array($n, $arr2);
                ?>
            </div>
            <h3>2. Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая определит количество слов строке.</h3>
            <div class="hw4">
                <?php
                function countArray($str) {
                    $arr = explode(" ", $str);
                    echo  '<br>Слов в предложении: '.count($arr);

                };

                echo $str= 'HTML, CSS, PHP, BITRIX';
                countArray($str);
                ?>
            </div>
            <h3>3. Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая выведет в обратном порядке буквы («XIRTIB ,PHP … »).</h3>
            <div class="hw5">
                <?php
                function reversArray($str) {
                    $arr3 = str_split($str);
                    $num = count($arr3);
                    $newSTR = '';
                    for($i = $num-1; $i >= 0; $i--) {
                        $newSTR = $newSTR.$arr3[$i];
                    }
                    return  $newSTR;

                };

                echo $str= 'HTML, CSS, PHP, BITRIX';
                echo '<br>Новая строка: <br>'.reversArray($str);
                ?>
            </div>
            <h3>4. Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая выводит на экран длину строки.</h3>
            <div class="hw6">
                <?php
                function lengthArray($str) {
                    $arr3 = str_split($str);
                    return  count($arr3);
                }

                echo $str= 'HTML, CSS, PHP, BITRIX';
                echo '<br>Длина строки: '.lengthArray($str);
                ?>
            </div>
            <h3>5. Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая выводит каждую букву на новую строку.</h3>
            <div class="hw7">
                <?php
                function brArray($str) {
                    echo '<br>Вывод строки: <br>';
                    $arr3 = str_split($str);
                    $num = count($arr3);
                    for($i = 0; $i < $num; $i++) {
                        echo '<br>'.$arr3[$i];
                    }
                };

                echo $str= 'HTML, CSS, PHP, BITRIX';
                brArray($str);
                ?>
            </div>

        </div>
<?php require_once 'inc/footer.php'?>