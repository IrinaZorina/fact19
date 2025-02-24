<?php
$title = 'Домашка Массивы';
include_once('header.php');
?>
    <div style="display: flex;  justify-content: space-between; flex-direction: row; height: 600px; width: 100%">
        <div style="width: 40%; text-align: center">
            <h1>Задание 6</h1>
            <?php
            $islands = [
                "Куба" => ["Январь" => 25, "Февраль" => 26, "Март" => 27, "Апрель" => 28],
                "Тринидад" => ["Январь" => 28, "Февраль" => 29, "Март" => 30, "Апрель" => 31],
                "Ямайка" => ["Январь" => 26, "Февраль" => 27, "Март" => 28, "Апрель" => 29],
                "Гаити" => ["Январь" => 27, "Февраль" => 28, "Март" => 29, "Апрель" => 30],
            ];
            $maxtemparr = [];
            foreach ($islands as $isl => $temp) {
                $maxtemp = null;
                $month = '';
                foreach ($temp as $cmonth => $ctemp) {
                    if ($maxtemp === null || $ctemp > $maxtemp) {
                        $maxtemp = $ctemp;
                        $month = $cmonth;
                    }
                }

                $maxtemparr [$isl] = [
                    'Месяц' => $month,
                    'Максимальная температура' => $maxtemp
                ];
            }
            echo "<pre>";
            print_r($maxtemparr);
            echo "</pre>";
            ?>
        </div>
        <div style="width: 40%; text-align: center">
            <h1>Задание 7</h1>
            <?php
            $matrix = [
                [5, 7, 2, 8, 6, 1],
                [9, 4, 6, 2, 7, 9],
                [1, 5, 8, 4, 8, 9],
                [2, 2, 4, 7, 1, 4],
                [4, 8, 4, 9, 2, 6]
            ];
            echo "Матрица :<br>";
            foreach ($matrix as $str) {
                foreach ($str as $val) {
                    echo $val . " ";
                }
                echo "<br>";
            }
            $maxEl = [];
            $prod = 1;
            for ($col = 0; $col < 6; $col++) {
                if (($col + 1) % 2 == 0) {
                    $max = null;
                    for ($str = 0; $str < 5; $str++) {
                        $curVal = $matrix[$str][$col];
                        if ($max === null || $curVal > $max) {
                            $max = $curVal;
                        }
                    }
                    $maxEl[$col + 1] = $max;
                    $prod *= $max;
                }
            }
            echo "<br>Максимальные элементы для каждого четного столбца:<br>";
            foreach ($maxEl as $col => $max) {
                echo "Столбец $col: $max<br>";
            }
            echo "<br>Произведение максимальных элементов четных столбцов: $prod";
            ?>
        </div>
        <div style="width: 40%; text-align: center">
            <h1>Задание 8</h1>
            <?php
            $frukti = [
                ["Апельсин", "Банан", "Ананас"],
                ["Яблоко", "Абрикос", "Груша"],
                ["Айва", "Киви", "Манго"]
            ];
            foreach ($frukti as $arr1) {
                foreach ($arr1 as $afr) {
                    if (mb_substr($afr, 0, 1) === 'А') {
                        echo "Начинаются на А: " . $afr . "<br>";
                    }
                }
            }
            ?>
        </div>
    </div>
    <div style="width: 40%; text-align: center">
        <h1>Задание 9</h1>
        <?php
        $arr = [
            [1, 2, 3, 4],
            [5, 6],
            [7, 8, 9, 1, 2]
        ];
        $el = 0;
        foreach ($arr as $arr2) {
            $el += count($arr2);
        }
        echo "Общее количество элементов массива: " . $el . '<br>';
        foreach ($arr as $str => $arr2) {
            echo "Количество элементов в строке " . ($str + 1) . ": " . count($arr2) . '<br>';
        }
        ?>
    </div>
<?php
include_once('footer.php');
