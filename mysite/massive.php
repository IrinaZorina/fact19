<?php include_once 'inc/head.php'; ?>
<div class="massive">
    <h2>Задание 1</h2>
    <?php
    $uch = [
        'Иванов' => [
            'Физика' => '3',
            'Математика' => '4',
            'Русский язык' => '5',
            'История' => '4'
        ],
        'Бочкарев' => [
            'Физика' => '3',
            'Математика' => '2',
            'Русский язык' => '4',
            'История' => '4'
        ],
        'Южаков' => [
            'Физика' => '5',
            'Математика' => '5',
            'Русский язык' => '5',
            'История' => '5'
        ],
    ];
    $sum_physical = 0;
    $sum_math = 0;
    $sum_russian = 0;
    $sum_history = 0;
    foreach ($uch as $key => $value) {
        foreach ($value as $k => $v) {
            if ($k == 'Физика') {
                $sum_physical += $v;
            } elseif ($k == 'Математика') {
                $sum_math += $v;
            } elseif ($k == 'Русский язык') {
                $sum_russian += $v;
            } elseif ($k == 'История') {
                $sum_history += $v;
            }
        }
    }

    $count_students = count($uch);
    echo 'Сумма оценок по Физике: ' . $sum_physical . "<br>";
    echo 'Сумма оценок по Математике: ' . $sum_math . "<br>";
    echo 'Сумма оценок по Руссий язык: ' . $sum_russian . "<br>";
    echo 'Сумма оценок по История: ' . $sum_history . "<br>";
    echo 'Физика = ' . ($sum_physical / $count_students) . '<br>';
    echo 'Математика = ' . ($sum_math / $count_students) . '<br>';
    echo 'Русский язык = ' . ($sum_russian / $count_students) . '<br>';
    echo 'История = ' . ($sum_history / $count_students) . '<br>';
    ?>
    <h2>Задание 2</h2>
            <?php
            $weather = [
                'Куба' => [24, 30, 31, 27, 34, 43, 23, 32, 25, 23, 33, 28],
                'Тринидад' => [33, 23, 23, 27, 31, 24, 26, 34, 24, 24, 31, 29],
                'Ямайка' => [31, 26, 36, 36, 28, 27, 31, 32, 33, 27, 28, 30],
                'Гаити' => [27, 28, 33, 32, 26, 22, 32, 24, 29, 28, 37, 24],
            ];

            $max_weather = [];

            for ($month = 0; $month < 12; $month++) {
                $weather_month = [];
                foreach ($weather as $island => $temps) {
                    $weather_month[] = $temps[$month];
                }
                $max_weather[$month] = max($weather_month); // Теперь используем $max_temperatures
            }

            $months = ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'];

            foreach ($max_weather as $month => $temp) {
                echo "$months[$month]: $temp<br>"; // Используем $months[$month], чтобы вывести правильное название месяца
            }

            ?>

    <h2>Задание 3</h2>
    <?php
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
</div>
<?php include_once 'inc/footer.php'; ?>
