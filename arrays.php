<?php
require_once "header.php";

echo "<style>";
include "styles/arrays.css";
echo "</style>";


echo "<blockquote><b>Подсказка:</b><br>В большинстве заданий размеры массивов задаются рандомно (в т.ч. таблиц, которые просто визуально оформляют массивы для удобства), а значения во всех. Поэтому результат будет меняться при обновлении страницы</blockquote>";

echo "<h2>Задание 5</h2>";

$students = [
    'math' => [],
    'phys' => [],
    'chem' => [], 
    'info' => []
];



$score_count = mt_rand(2, 15);
        //заполнение массива рандомными значениями
        foreach ($students as $subj => $values)
            for ($i = 0; $i < $score_count; $i++)
                array_push($students[$subj], mt_rand(2,5));
?>

<table>
    <thead>
        <?php
        for ($i = -1; $i < $score_count; $i++){
            if ($i == -1) {
                echo "<td></td>";
                continue;
            }
            echo "<th>" . $i+1 . "</th>";
        }
        ?>
        <th>Sum</th>
        <th>Average</th>
    </thead>
    <tbody>
        <?php
            //подсчет и вывод
            foreach ($students as $subj => $values) {
                echo "<tr>";
                echo "<td><b>$subj<b></td>";
                $sum = 0;
                $average = 0;
                foreach ($values as $value) {
                    $sum += $value;
                    echo "<td>" . $value . "</td>";
                }
                
                $average = round($sum / count($values), 2);
                echo "<td><b>$sum</b></td>";
                echo "<td><b>$average</b></td>";
                echo "</tr>";
                //echo "$subj: sum = $sum, average = $average <br>";
            }
        ?>
    </tbody>
</table>

<?php

echo "<h2>Задание 6</h2>";

$islands_averageTemp = [
    'Cuba' => [],
    'Trinidad' => [],
    'Jamaica' => [], 
    'Haiti' => []
];

//Заполнение массива
foreach ($islands_averageTemp as $island_key => $islands)
    for ($i = 0; $i < 12; $i++)
        array_push($islands_averageTemp[$island_key], mt_rand(15,35));


$islands_maxTemp = [
    'Jan' => 0,
    'Feb' => 0,
    'Mar' => 0, 
    'Apr' => 0,
    'May' => 0,
    'Jun' => 0,
    'Jul' => 0,
    'Aug' => 0,
    'Sep' => 0,
    'Okt' => 0,
    'Nov' => 0,
    'Dec' => 0
];

$count = 0;
foreach ($islands_maxTemp as $month => $value) {
    $max = 0;
    foreach ($islands_averageTemp as $island_key => $islands) {
        if ($islands_averageTemp[$island_key][$count] > $max) $max = $islands_averageTemp[$island_key][$count];
    }
    $islands_maxTemp[$month] = $max;
    $count++;
}

?>

<table>
    <thead>
        <th>Month</th>
        <?php
            foreach ($islands_averageTemp as $island_key => $islands) {
                echo "<th>$island_key</th>";
            }
        ?>
        <th>Max temp</th>
    </thead>
    <?php
        $count = 0;
        foreach ($islands_maxTemp as $month => $value) {
            echo "<tr>";
            echo "<td>$month</td>";
            foreach ($islands_averageTemp as $island_key => $values)
                echo "<td>$values[$count]</td>";
            echo "<td>$value</td>";
            echo "</tr>";
            $count++;
        }
    ?>
</table>


<?php
echo "<h2>Задание 7</h2>";

$matrix = [];
$matrix_row = 5;
$matrix_column = 6;

?>

<table>
    <thead>
        <th></th>
        <?php
            for ($i = 0; $i < $matrix_column; $i++) {
                echo "<th>" . $i + 1 . "</th>";
            }
        ?>
    </thead>
    <tbody>
    <?php
        //заполнение матрицы
        for ($i = 0; $i < $matrix_row; $i++) {
            echo "<tr><td><b>" . $i+1 . "</b></td>";
            for ($j = 0; $j < $matrix_column; $j++) {
                $matrix[$i][$j] = mt_rand(0, 9);
                echo "<td>" . $matrix[$i][$j] . "</td>";
            }
            echo "</tr>";
        }
        ?>
    </tbody>
</table>



<?php
$result = 1;
for ($i = 0; $i < count($matrix); $i++) {
    $max = 0;
    if ($i % 2 == 0) continue; //Пропускаем нечетные строки 
    for ($j = 0; $j < count($matrix[0]) / count($matrix) ; $j++) {
        if ($max < $matrix[$i][$j]) $max = $matrix[$i][$j];
    }
    echo "[" . $i + 1 . "]: max = $max<br>";
    $result *= $max;
}

echo "Result = $result";


echo "<h2>Задание 8</h2>";

$strings = [];

$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

//заполнение массива строками
$rows = mt_rand(3, 10);    // количество строк
$columns = mt_rand(3, 10); // количество столбцов
?>

<table>
    <thead>
        <th></th>
        <?php
            for ($i = 0; $i < $columns; $i++)
                echo "<th>" . $i + 1 . "</th>";
        ?>
    </thead>
    <tbody>
    <?php
        for ($i = 0; $i < $rows; $i++) {
            echo "<tr>";
            echo "<td><b>" . $i + 1 . "</b></td>";
            for ($j = 0; $j < $columns; $j++) {
                $str = "";
                for ($k = 0; $k < 10; $k++) {
                    $str .= $characters[mt_rand(0, strlen($characters) - 1)];
                }
                $strings[$i][$j] = $str;
                echo "<td>" . $strings[$i][$j] . "</td>";
            }
            echo "</tr>";
        }
    ?>
    </tbody>
</table>

<?php
$count = 0; //счетчик найденных строк
echo "<br>";

//поиск строк начинающихся с символа "A"
echo "<b>Результат:</b> ";
foreach ($strings as $row) {
    foreach ($row as $string) {
        if ($string[0] == "A") {
            echo "<br> $string";
            $count++;
        }
    }
}

if ($count == 0) echo "Строк нет";


echo "<h2>Задание 9</h2>";

$arr9 = [];
$arr9_maxSize = 10;
$arr9_minSize = 2;
/*
$rows = mt_rand($arr9_minSize, $arr9_maxSize);
$columns = mt_rand($arr9_minSize,$arr9_maxSize);
*/
?>

<table>
    <thead>
        <td></td>
        <?php
        for ($i = 0; $i < $arr9_maxSize; $i++){
            echo "<th>" . $i + 1 . "</th>";
        }
        ?>
    </thead>
    <tbody>
        <?php        

        //заполнение массива и вывод
        for ($i = 0; $i < mt_rand($arr9_minSize, $arr9_maxSize); $i++) {
            echo "<tr> <td><b>" . $i + 1 . "</b></td>";
            for ($j = 0; $j < mt_rand($arr9_minSize, $arr9_maxSize); $j++) {
                $arr9[$i][$j] = mt_rand(0, 9);
                echo "<td>" . $arr9[$i][$j] . "</td>";
            }
            echo "</tr>";
        }
        ?>
    </tbody>
</table>

<?php

echo "Общее количество элементов массива ( через функцию count() ): " . count($arr9, 1) . "<br>";
$count = 0;
foreach ($arr9 as $row => $values) {
    echo "Количество элементов в строке <b>". $row + 1 . "</b>: " . count($values) . "<br>";
    foreach ($values as $value)
        $count++;
}

echo "Общее количество элементов массива: " . $count . "<br>";

require_once "footer.php";
?>