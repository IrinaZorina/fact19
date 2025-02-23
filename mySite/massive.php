<?php require_once './inc/header.php' ?>
<?php
echo '<h2> Задание 1 <br></h2>';
$students = [
    "Иванов" => [
        "Математика" => "5",
        "Химия" => "5",
        "Физика" => "4",
        "Информатика" => "4"
    ],
    "Петров" => [
        "Математика" => "4",
        "Химия" => "4",
        "Физика" => "4",
        "Информатика" => "4"
    ],
    "Горячих" => [
        "Математика" => "5",
        "Химия" => "5",
        "Физика" => "5",
        "Информатика" => "5"
    ],
];
$sum_math = 0;
$sum_physical = 0;
$sum_chemistry = 0;
$sum_information = 0;
$count = 0;
foreach ($students as $student) {
    $sum_math += $student ["Математика"];
    $sum_physical += $student ["Физика"];
    $sum_chemistry += $student ["Химия"];
    $sum_information += $student ["Информатика"];
    $count++;
}
echo "Сумма оценок по Математике" . " : " . $sum_math . "<br>";
echo "Сумма оценок по Физике" . " : " . $sum_physical . "<br>";
echo "Сумма оценок по Химия" . " : " . $sum_chemistry . "<br>";
echo "Сумма оценок по Информатике" . " : " . $sum_information . "<br>";
$average_math = $sum_math / $count;
$average_physical = $sum_physical / $count;
$average_chemistry = $sum_chemistry / $count;
$average_information = $sum_information / $count;
echo "Средняя оценка по Математике" . " : " . $average_math . "<br>";
echo "Средняя оценка по Физике" . " : " . $average_physical . "<br>";
echo "Средняя оценка по Химия" . " : " . $average_chemistry . "<br>";
echo "Средняя оценка по Информатика" . " : " . $average_information . "<br>";
echo '<h2> Задание 2 <br></h2>';
$weather = [
    'Куба' => [25, 28, 29, 30, 31, 29, 30, 31, 26, 27, 29, 28],
    'Тринидад' => [28, 29, 31, 25, 31, 28, 25, 31, 26, 27, 25, 25],
    'Ямайка' => [30, 31, 32, 25, 26, 27, 31, 32, 33, 27, 28, 30],
    'Гаити' => [27, 28, 29, 32, 29, 29, 30, 25, 26, 28, 25, 26],
];

$max_temp = [];
for ($month = 0; $month < 11; $month++) {
    $weather_month = [];
    foreach ($weather as $island => $temps) {
        $weather_month[] = $temps[$month];
    }
    $max_temp[$month] = max($weather_month);
}
$months = ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь'];
echo "Максимальные температуры по месяцам:<br>";
foreach ($max_temp as $month => $temp) {
    echo "$months[$month]: $temp °C<br>";
}
echo '<h2> Задание 3 <br></h2>';

$arr = [
    [1, 2, 3, 4, 5, 6],
    [7, 8, 9, 10, 11, 12],
    [13, 14, 15, 16, 17, 18],
    [19, 20, 21, 22, 23, 24],
    [25, 26, 27, 28, 29, 30]
];
$max = 1;
for ($i = 1; $i < 6; $i += 2) {
    $MaxCol = $arr[0][$i];
    for ($j = 1; $j < 5; $j++) {
        if ($arr[$j][$i] > $MaxCol) {
            $MaxCol = $arr[$j][$i];
        }
    }
    $max *= $MaxCol;
}
echo "Произведение максимальных элементов четных столбцов: " . $max . "<br>";
?>
<?php require_once './inc/footer.php' ?>
