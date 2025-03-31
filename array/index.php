<?php
echo "<h1>Задание 1</h1>";
$arr1 = [50, 45, 40, 35, 30];
$result = 0;
foreach ($arr1 as $value) {
    $result += $value;
}
echo $result;

echo "<h1>Задание 2</h1>";
$m = mt_rand(3,10);
$arr2 = [];
for($i = 0; $i < $m; $i++){
    $arr2[$i] = mt_rand(1,10);
    echo "$arr2[$i], ";
}
echo "<br>";
for($i = $m - 1; $i >= 0; $i--){
    echo " $arr2[$i], ";
}

echo "<h1>Задание 3</h1>";
$arr3 = ['1.jpg', '2.jpg', '4.jpg'];
$imgRand = mt_rand(0, 2);
$img = $arr3[$imgRand];
echo "<img src='{$img}' alt='енот'/>";

echo "<h1>Задание 4</h1>";
$n = 20;

$numbers = [];
for ($i = 0; $i < $n; $i++) {
    $numbers[] = mt_rand(-100, 100);
}

$minPositive = null;
$maxNegative = null;

foreach ($numbers as $number) {
    if ($number > 0) {
        if ($minPositive === null || $number < $minPositive) {
            $minPositive = $number;
        }
    } elseif ($number < 0) {
        if ($maxNegative === null || $number > $maxNegative) {
            $maxNegative = $number;
        }
    }
}
echo "Массив: ";
foreach ($numbers as $number) {
    echo $number . " ";
}
echo '<br>';
echo "Минимальное положительное: " . $minPositive . "<br>";
echo "Максимальное отрицательное: " . $maxNegative . "<br>";

echo "<h1>Задание 5</h1>";

$arr5 = [
    [
        'name' => 'Вася',
        'evaluations' => [
            'Математика' => 4,
            'Физика' => 4,
            'Информатика' => 4,
            'Химия' => 3,
        ],
    ],
    [
        'name' => 'Петя',
        'evaluations' => [
            'Математика' => 3,
            'Физика' => 4,
            'Информатика' => 5,
            'Химия' => 5,
        ],
    ],
];

foreach ($arr5 as $student) {
    echo "Имя: " . $student['name'] . "<br>";
    foreach ($student['evaluations'] as $subject => $grade) {
        echo $subject . ": " . $grade . "<br>";
    }
    echo "<br>";
}

echo "<h1>Задание 6</h1>";


$temperatures = [
    'Куба' => [
        'Январь' => 25, 'Февраль' => 26, 'Март' => 27,
        'Апрель' => 28, 'Май' => 29, 'Июнь' => 30,
        'Июль' => 31, 'Август' => 32, 'Сентябрь' => 31,
        'Октябрь' => 30, 'Ноябрь' => 28, 'Декабрь' => 27
    ],
    'Тринидад' => [
        'Январь' => 26, 'Февраль' => 27, 'Март' => 28,
        'Апрель' => 29, 'Май' => 30, 'Июнь' => 31,
        'Июль' => 32, 'Август' => 32, 'Сентябрь' => 31,
        'Октябрь' => 30, 'Ноябрь' => 29, 'Декабрь' => 28
    ],
    'Ямайка' => [
        'Январь' => 24, 'Февраль' => 25, 'Март' => 26,
        'Апрель' => 27, 'Май' => 28, 'Июнь' => 29,
        'Июль' => 30, 'Август' => 31, 'Сентябрь' => 30,
        'Октябрь' => 29, 'Ноябрь' => 28, 'Декабрь' => 27
    ],
    'Гаити' => [
        'Январь' => 23, 'Февраль' => 24, 'Март' => 25,
        'Апрель' => 26, 'Май' => 27, 'Июнь' => 28,
        'Июль' => 29, 'Август' => 30, 'Сентябрь' => 29,
        'Октябрь' => 28, 'Ноябрь' => 27, 'Декабрь' => 26
    ]
];

$maxTemperatures = [
    'Январь' => 0, 'Февраль' => 0, 'Март' => 0,
    'Апрель' => 0, 'Май' => 0, 'Июнь' => 0,
    'Июль' => 0, 'Август' => 0, 'Сентябрь' => 0,
    'Октябрь' => 0, 'Ноябрь' => 0, 'Декабрь' => 0
];
foreach ($temperatures as $value => $months) {
    foreach ($months as $month => $temperature) {
        if ( $temperature > $maxTemperatures[$month]) {
            $maxTemperatures[$month] = $temperature;
        }
    }
}

echo "<table border='1'>";
echo "<tr align=center><th>Месяц</th><th>Куба</th><th>Тринидад</th><th>Ямайка</th><th>Гаити</th><th>Максимальная<br> температура</th></tr>";

foreach ($maxTemperatures as $month => $maxTemp) {
    echo "<tr align=center>";
    echo "<td align=center>$month</td>";
    foreach ($temperatures as $a) {
        echo "<td align=center>{$a[$month]}</td>";
    }
    echo "<td align=center>$maxTemp</td>";
    echo "</tr>";
}

echo "</table>";


echo "<h1> Задание 7 </h1>";

$array2 = [
    [1, 2, 3, 4, 5, 6],
    [7, 8, 9, 10, 11, 12],
    [13, 14, 15, 16, 17, 18],
    [19, 20, 21, 22, 23, 24],
    [25, 26, 27, 28, 29, 30]
];

$minSum = 9999;
$minColumnIndex = -1;

for ($c = 0; $c < 6; $c++) {
    $currentSum = 0;


    for ($r = 0; $r < 5; $r++) {
        $currentSum += $array2[$r][$c];
        $sum = $array2[$r][$c];
    }

    if ($currentSum < $minSum) {
        $minSum = $currentSum;
        $minColumnIndex = $c;
    }
}

echo "<table border='1'>";
echo "<tr><th>Строка/<br>столбец</th><th width=50px align=center>1</th><th width=50px align=center>2</th><th width=50px align=center>3</th><th width=50px align=center>4</th><th width=50px align=center>5</th><th width=50px align=center>6</th><th width=50px align=center>Сумма строки</th></tr>";

foreach ($array2 as $rr => $r) {
    echo "<tr>";
    echo "<td align=center>" . ($rr + 1) . "</td>";
    $rSum = 0;
    foreach ($r as $s) {
        echo "<td align=center>$s</td>";
        $rSum += $s;
    }
    echo "<td align=center>$rSum</td>";
    echo "</tr>";
}

echo "</table>";

echo "Столбец с минимальной суммой элементов: " . ($minColumnIndex + 1) . "<br>";
echo "Минимальная сумма: $minSum<br>";

echo "<h1> Задание 8 </h1>";

$arr = [
    ['Андрей', 'Борис', 'Анна'],
    ['Светлана', 'Алексей', 'Ирина'],
    ['Максим', 'Анастасия', 'Дмитрий'],
];

foreach ($arr as $subArray) {
    foreach ($subArray as $name) {
        if (strpos($name, 'А') === 0 || strpos($name, 'а') === 0) {
            echo $name . "<br>";
        }
    }
}

echo "<h1> Задание 9 </h1>";

$array = [
    [1, 2, 3],
    [4, 5, 6, 7],
    [8, 9]
];

$totalElements = 0;

foreach ($array as $subArray) {
    $count = count($subArray);
    echo "Количество элементов в подмассиве: $count<br>";
    $totalElements += $count;
}

echo "Общее количество элементов в массиве: $totalElements";


?>