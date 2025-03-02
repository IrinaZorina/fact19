<?php require_once 'templates/Header.php' ?>
<style>
    body {
        color: white;
    }
</style>
<br>
<h1> Задание со слайда №16</h1>
<h3> Задание 5. Для группы учащихся известны годовые оценки по следующим предметам: 
    математика, физика, химия, информатика. Найти среднюю в группе оценку по каждому из предметов. 
    Суммирование оценок по каждому предмету.</h3>
<?php
$grades = [
    ["math" => 4, "physics" => 5, "chemistry" => 3, "informatics" => 5],
    ["math" => 3, "physics" => 4, "chemistry" => 4, "informatics" => 4],
    ["math" => 5, "physics" => 5, "chemistry" => 5, "informatics" => 5],
];

$sum_math = 0;
$sum_physics = 0;
$sum_chemistry = 0;
$sum_informatics = 0;

$num_students = count($grades);

foreach ($grades as $student) {
    $sum_math += $student["math"];
    $sum_physics += $student["physics"];
    $sum_chemistry += $student["chemistry"];
    $sum_informatics += $student["informatics"];
}

$avg_math = $sum_math / $num_students;
$avg_physics = $sum_physics / $num_students;
$avg_chemistry = $sum_chemistry / $num_students;
$avg_informatics = $sum_informatics / $num_students;

echo "Средняя оценка по математике: " . $avg_math . "\n";
echo "Средняя оценка по физике: " . $avg_physics . "\n";
echo "Средняя оценка по химии: " . $avg_chemistry . "\n";
echo "Средняя оценка по информатике: " . $avg_informatics . "\n";

echo "Сумма оценок по математике: " . $sum_math . "\n";
echo "Сумма оценок по физике: " . $sum_physics . "\n";
echo "Сумма оценок по химии: " . $sum_chemistry . "\n";
echo "Сумма оценок по информатике: " . $sum_informatics . "\n";
?>
<br>
<h3> Задание 6. Известна среднемесячная температура воздуха на следующих островах Карибского моря: Куба, Тринидад, Ямайка, Гаити. 
    Сформировать один новый массив, содержащий месяц и максимальную температуру для островов.</h3>
<?php
$temperatures = [
    "Cuba" => [25, 26, 27, 28, 29, 30, 31, 31, 30, 29, 28, 27],
    "Trinidad" => [26, 27, 28, 29, 30, 31, 32, 32, 31, 30, 29, 28],
    "Jamaica" => [24, 25, 26, 27, 28, 29, 30, 30, 29, 28, 27, 26],
    "Haiti" => [23, 24, 25, 26, 27, 28, 29, 29, 28, 27, 26, 25],
];

$max_temperatures = [];
for ($month = 0; $month < 12; $month++) {
    $max_temp = -INF;
    foreach ($temperatures as $island => $temps) {
        if ($temps[$month] > $max_temp) {
            $max_temp = $temps[$month];
        }
    }
    $max_temperatures[$month + 1] = $max_temp;
}
print_r($max_temperatures);
?>
<br>
<h3> Задание 7. Дан двумерный массив из 5 строк и 6 столбцов.
     Определить для каждого четного столбца максимальный элемент.
     Найти произведение этих элементов.</h3>
     <?php
$array = [
    [1, 2, 3, 4, 5, 6],
    [7, 8, 9, 10, 11, 12],
    [13, 14, 15, 16, 17, 18],
    [19, 20, 21, 22, 23, 24],
    [25, 26, 27, 28, 29, 30],
];
$max_even_columns = [];
$product = 1;
for ($col = 1; $col < 6; $col += 2) {
    $max = $array[0][$col];
    for ($row = 1; $row < 5; $row++) {
        if ($array[$row][$col] > $max) {
            $max = $array[$row][$col];
        }
    }
    $max_even_columns[] = $max;
    $product *= $max;
}
echo "Максимальные элементы в четных столбцах: " . implode(", ", $max_even_columns) . "\n";
echo "Произведение этих элементов: " . $product . "\n";
?>
<?php require_once 'templates/Footer.php' ?>