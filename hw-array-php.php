<?php
$title = 'Домашка Массивы';
include_once('header.php');
?>
    <div style="display: flex;  justify-content: space-between; flex-direction: row; height: 600px; width: 100%">
        <div style="width: 40%; text-align: center">
            <h1>Задание 6</h1>
            <?php
            $islands = [
                "Куба" => ["Январь" => 45, "Февраль" => 26, "Март" => 27, "Апрель" => 38],
                "Тринидад" => ["Январь" => 31, "Февраль" => 25, "Март" => 26, "Апрель" => 21],
                "Ямайка" => ["Январь" => 21, "Февраль" => 22, "Март" => 23, "Апрель" => 29],
                "Гаити" => ["Январь" => 24, "Февраль" => 25, "Март" => 33, "Апрель" => 30],
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
                [3, 9, 1, 7, 4, 2],
                [8, 5, 6, 3, 9, 8],
                [2, 6, 7, 5, 7, 8],
                [1, 1, 3, 6, 2, 3],
                [5, 7, 5, 8, 1, 5]
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
            $goroda = [
                ["Амстердам", "Берлин", "Афины"],
                ["Якутск", "Астана", "Гамбург"],
                ["Аделаида", "Киев", "Москва"]
            ];

            foreach ($goroda as $arr1) {
                foreach ($arr1 as $gorod) {
                    if (mb_substr($gorod, 0, 1) === 'А') {
                        echo "Начинаются на А: " . $gorod . "<br>";
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
