<?php require $_SERVER['DOCUMENT_ROOT'] . '/src/templates/_header.php'; ?>
<main class="main">
    <div class="section">
        <h1 class="title content__title">Слайд №16</h1>
        <div class="task">
            <h2 class="task__title">5. Для группы учащихся известны годовые оценки по следующим предметам: математика,
                физика, химия, информатика. Найти среднюю в группе оценку по каждому из предметов. Суммирование оценок
                по каждому предмету.
            </h2>
            <div class="task__answer">
                <?php
                $arr = [
                    'математика' => ['Смирнов' => 4, 'Петров' => 5, 'Иванов' => 3, 'Нестеров' => 4],
                    'физика' => ['Смирнов' => 3, 'Петров' => 3, 'Иванов' => 4, 'Нестеров' => 4],
                    'химия' => ['Смирнов' => 5, 'Петров' => 4, 'Иванов' => 3, 'Нестеров' => 3],
                    'информатика' => ['Смирнов' => 5, 'Петров' => 4, 'Иванов' => 3, 'Нестеров' => 5]
                ];

                echo "<h3>Оценки студентов:</h3>";
                echo "<table border='1'>";
                echo "<tr><th>Предмет</th><th>Смирнов</th><th>Петров</th><th>Иванов</th><th>Нестеров</th></tr>";

                foreach ($arr as $subject => $students) {
                    echo "<tr>";
                    echo "<td><b>$subject</b></td>";
                    foreach ($students as $grade) {
                        echo "<td>$grade</td>";
                    }
                    echo "</tr>";
                }

                echo "</table>";

                $averageMath = 0;
                $averagePhys = 0;
                $averageChem = 0;
                $averageIT = 0;

                foreach ($arr as $key => $value) {
                    foreach ($value as $k => $v) {
                        if ($key == 'математика') {
                            $averageMath += $v;
                        } elseif ($key == 'физика') {
                            $averagePhys += $v;
                        } elseif ($key == 'химия') {
                            $averageChem += $v;
                        } else {
                            $averageIT += $v;
                        }
                    }

                }
                echo 'Математика = ' . $averageMath / count($arr['математика']) . '<br>';
                echo 'Физика = ' . $averagePhys / count($arr['математика']) . '<br>';
                echo 'Химия = ' . $averageChem / count($arr['математика']) . '<br>';
                echo 'Информатика = ' . $averageIT / count($arr['математика']) . '<br>';
                ?>
            </div>
        </div>
        <div class="task">
            <h2 class="task__title">6. Известна среднемесячная температура воздуха на следующих островах Карибского
                моря: Куба, Тринидад, Ямайка, Гаити. Сформировать один новый массив, содержащий месяц и максимальную
                температуру для островов.
            </h2>
            <div class="task__answer">
                <?php

                $temperatures = [
                    "Январь" => ["Куба" => 25, "Тринидад" => 28, "Ямайка" => 26, "Гаити" => 24],
                    "Апрель" => ["Куба" => 28, "Тринидад" => 31, "Ямайка" => 29, "Гаити" => 27],
                    "Июль" => ["Куба" => 31, "Тринидад" => 34, "Ямайка" => 32, "Гаити" => 30],
                    "Октябрь" => ["Куба" => 29, "Тринидад" => 32, "Ямайка" => 30, "Гаити" => 28],
                ];

                echo "<h3>Среднемесячная температура:</h3>";
                echo "<table border='1'>";
                echo "<tr><th>Месяц</th><th>Куба</th><th>Тринидад</th><th>Ямайка</th><th>Гаити</th></tr>";

                foreach ($temperatures as $key => $value) {
                    echo "<tr>";
                    echo "<td><b>$key</b></td>";
                    foreach ($value as $v) {
                        echo "<td>$v</td>";
                    }
                    echo "</tr>";
                }

                echo "</table>";

                $maxTemperatures = [];

                foreach ($temperatures as $month => $islands) {
                    $maxTemp = 0;
                    $maxIsland = '';

                    foreach ($islands as $island => $temp) {
                        if ($temp > $maxTemp) {
                            $maxTemp = $temp;
                            $maxIsland = $island;
                        }
                    }

                    $maxTemperatures[$month] = [
                        "Остров" => $maxIsland,
                        "Температура" => $maxTemp
                    ];
                }

                echo "Максимальные температуры по месяцам: <br>";

                foreach ($maxTemperatures as $month => $data) {
                    echo "$month: {$data['Температура']} (остров {$data['Остров']}) <br>";
                }
                ?>
            </div>
        </div>
        <div class="task">
            <h2 class="task__title">7. Дан двумерный массив из 5 строк и 6 столбцов. Определить для каждого четного
                столбца максимальный элемент. Найти произведение этих элементов.
            </h2>
            <div class="task__answer">
                <?php

                $arr = [];
                for ($i = 0; $i < 5; $i++) {
                    for ($j = 0; $j < 6; $j++) {
                        $arr[$i][$j] = mt_rand(1, 100);
                    }
                }

                $product = 1;
                $maxArr = [];

                for ($col = 1; $col < 6; $col += 2) {
                    $max = $arr[0][$col];
                    for ($row = 1; $row < 5; $row++) {
                        if ($arr[$row][$col] > $max) {
                            $max = $arr[$row][$col];
                        }
                    }

                    $maxArr[] = $max;
                    $product *= $max;
                }

                echo "<h3>Массив:</h3>";
                echo "<table border='1'>";


                for ($i = 0; $i < 5; $i++) {
                    echo "<tr>";
                    for ($j = 0; $j < 6; $j++) {
                        echo "<td>{$arr[$i][$j]}</td>";
                    }
                    echo "</tr>";
                }
                echo "</table>";

                echo "<br>Максимальные элементы:<br>";
                foreach ($maxArr as $index => $max) {
                    echo "Столбец " . (2 * ($index + 1)) . ": $max<br>";
                }

                echo "<br>Произведение максимальных элементов: $product<br>";
                ?>
            </div>
        </div>
        <div class="task">
            <h2 class="task__title">8. Создать двумерный массив произвольной длины, содержащий строковые значения.
                Необходимо вывести все элементы массива, начинающиеся на А.
            </h2>
            <div class="task__answer">
                <?php

                $arr = [
                    ["Яблоко", "Банан", "Груша"],
                    ["Апельсин", "Абрикос", "Арбуз"],
                    ["Ананас", "Киви", "Манго"],
                    ["Дыня", "Маракуйя", "Персик"]
                ];

                echo "<h3>Массив:</h3>";
                echo "<table border='1'>";
                for ($i = 0; $i < count($arr); $i++) {
                    echo "<tr>";
                    for ($j = 0; $j < count($arr[$i]); $j++) {
                        echo "<td>{$arr[$i][$j]}</td>";
                    }
                }
                echo "</table>";


                foreach ($arr as $row) {
                    foreach ($row as $item) {
//                      if ($item[0] == 'А') {   Не работает :(
                        if (str_starts_with($item, 'А')) {
                            echo "{$item}<br>";
                        }
                    }
                }
                ?>
            </div>
        </div>
        <div class="task">
            <h2 class="task__title">9. Создать двумерный массив, состоящий из чисел. Необходимо вывести общее количество
                элементов массива и количество элементов массива для каждого измерения.
            </h2>
            <div class="task__answer">
                <?php

                $rowCount = mt_rand(2, 8);
                $colCount = mt_rand(2, 8);
                $arr = [];

                for ($i = 0; $i < $rowCount; $i++) {
                    for ($j = 0; $j < $colCount; $j++) {
                        $arr[$i][$j] = rand(1, 100);
                    }
                }

                echo "<h3>Массив:</h3>";
                echo "<table border='1'>";
                for ($i = 0; $i < count($arr); $i++) {
                    echo "<tr>";
                    for ($j = 0; $j < count($arr[$i]); $j++) {
                        echo "<td>{$arr[$i][$j]}</td>";
                    }
                }
                echo "</table>";

                $totalElements = 0;
                $maxColumns = 0;

                foreach ($arr as $row) {
                    $totalElements += count($row);
                    if (count($row) > $maxColumns) {
                        $maxColumns = count($row);
                    }
                }

                $rows = count($arr);

                echo "Общее количество элементов: $totalElements<br>";
                echo "Количество строк: $rows<br>";
                echo "Максимальное количество столбцов: $maxColumns<br>";
                ?>
            </div>
        </div>
    </div>
</main>
<?php require $_SERVER['DOCUMENT_ROOT'] . '/src/templates/_footer.php'; ?>
</div>
<script src="assets/js/hamburger-menu.js"></script>
</body>
</html>