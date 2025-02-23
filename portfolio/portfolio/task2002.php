<?php require_once 'inc/header.php'?>
        <div class="homework">
            <h3>1. Дан массив с элементами 50, 45, 40, 35, 30. Найдите сумму элементов этого массива. Запишите ее в переменную $result.</h3>
            <div class="hw1">
                <?php
                $arr = [50, 45, 40, 35, 30];
                $result = 0;
                foreach ($arr as $value) {
                    $result += $value;
                }
                echo 'Ответ. '.$result;
                ?>
            </div>
            <h3>2. Дан массив, заполненный случайными числами. Необходимо вывести массив, заполненный случайными числами. После чего вывести данный массив в противоположном порядке.</h3>
            <div class="hw2">
                <p>Ответ. </p>
                <?php
                $num = mt_rand(6, 20);
                for ($i = 0; $i < $num; $i++) {
                    $arr1[] = mt_rand(0, 100);
                }
                echo 'Элементов в массиве: '.$num.'. <br>Прямой порядок элементов: <br>';
                foreach ($arr1 as $value) {
                    echo $value.'  ';
                }
                echo '<br>Обратный порядок: <br>';
                for ($i = $num-1; $i >= 0; $i--) {
                    echo $arr1[$i].'  ';
                }
                ?>
            </div>
            <h3>3. Создать массив, заполненный названиями картинок, например, 1.png. Необходимо случайным образом выбирать название картинки из массива и выводить ее на экран.</h3>
            <div class="hw3">
                <p>Ответ. </p>
                <?php
                $arr2 = ['1.png', '2.png', '3.png', '4.png', '5.png'];
                $i = mt_rand(1, 5);
                echo $i.'-я картинка из 5: <br><img src="assets/Images/'.$arr2[$i-1].'">';
                ?>
            </div>
            <h3>4. Дано N действительных случайных чисел в диапазоне от -100 до 100. Найти минимальное положительное число и максимальное отрицательное число.</h3>
            <div class="hw4">
                <p>Ответ. </p>
                <?php
                $N = mt_rand(6, 15);
                for ($i = 0; $i < $N; $i++) {
                    $arr3[$i] = mt_rand(-100, 100);
                }
                echo "N = $N. Элементы массива: <br>";
                foreach ($arr3 as $value) {
                    echo $value.'   ';
                }
                $min_p = 100;
                $max_o = -100;
                foreach ($arr3 as $value) {
                    if ($value < $min_p && $value > 0) {
                        $min_p = $value;
                    }
                    elseif ($value > $max_o && $value < 0) {
                        $max_o = $value;
                    }
                }
                echo "<br>Минимальное положительное число = $min_p. <br>Максимальное отрицательное число = $max_o";
                ?>
            </div>
            <h3>5. Для группы учащихся известны годовые оценки по следующим предметам: математика, физика, химия, информатика. Найти среднюю в группе оценку по каждому из предметов. Суммирование оценок по каждому предмету.</h3>
            <div class="hw5">
                <p>Ответ. </p>
                <?php
                $N = mt_rand(6, 15);
                for ($i = 0; $i < $N; $i++) {
                    $arr4['math'][] = mt_rand(1, 5);
                    $arr4['physics'][] = mt_rand(1, 5);
                    $arr4['chemistry'][] = mt_rand(1, 5);
                    $arr4['informatique'][] = mt_rand(1, 5);
                }
                $av = ['math' => 0, 'physics' => 0, 'chemistry' => 0, 'informatique' => 0];
                foreach ($arr4['math'] as $key => $value) {
                    $av['math'] += $value;
                }
                foreach ($arr4['physics'] as $key => $value) {
                    $av['physics'] += $value;
                }
                foreach ($arr4['chemistry'] as $key => $value) {
                    $av['chemistry'] += $value;
                }
                foreach ($arr4['informatique'] as $key => $value) {
                    $av['informatique'] += $value;
                }

                echo "Количество учащихся $N. <br><table>";
                foreach ($arr4 as $key => $value) {
                    echo '<tr><td>'.$key.'</td>';
                    foreach ($value as $item) {
                        echo "<td>$item</td>";
                    }
                    echo "</tr>";
                }
                echo "</table><br><br><br><table><tr><td></td><td>Математика</td><td>Физика</td><td>Химия</td><td>Информатика</td></tr> <tr><td>Сумма оценок по предметам</td><td>".$av['math']."</td><td>".$av['physics']."</td><td>".$av['chemistry']."</td><td>".$av['informatique']."</td></tr>";

                $av['math'] = $av['math'] / $N;
                $av['physics'] = $av['physics'] / $N;
                $av['chemistry'] = $av['chemistry'] / $N;
                $av['informatique'] = $av['informatique'] / $N;

                echo "<tr><td>Средние оценки по предметам</td><td>".$av['math']."</td><td>".$av['physics']."</td><td>".$av['chemistry']."</td><td>".$av['informatique']."</td></tr></table>";
                ?>
            </div>
            <h3>6. Известна среднемесячная температура воздуха на следующих островах Карибского моря: Куба, Тринидад, Ямайка, Гаити. Сформировать один новый массив, содержащий месяц и максимальную температуру для островов.</h3>
            <div class="hw6">
                <p>Ответ. </p>
                <?php
                for ($i = 1; $i <= 12; $i++) {
                    $arr5['Cuba'][$i] = mt_rand(20, 35);
                    $arr5['Trinidad'][$i] = mt_rand(20, 35);
                    $arr5['Jamaica'][$i] = mt_rand(20, 35);
                    $arr5['Haiti'][$i] = mt_rand(20, 35);
                }

                foreach ($arr5 as $key => $value) {
                    $av_temp[$key] = 0;
                    $month[$key] = 0;
                    foreach ($value as $item => $temp) {
                        //echo $key.' '.$temp.' '.$item.'<br>';
                        if ($av_temp[$key] < $temp) {
                            $av_temp[$key] = $temp;
                            $month[$key] = $item;
                        }
                    }
                }

                echo "Среднемесячная температура островов. <br><table>";
                foreach ($arr5 as $key => $value) {
                    echo '<tr><td>' . $key . '</td>';
                    foreach ($value as $item) {
                        echo "<td>$item</td>";
                    }
                    echo "</tr>";
                }
                echo "</table><br><br><br>Максимальная температура островов<table><tr><td> Остров </td><td> Куба </td><td> Тринидад </td><td> Ямайка </td><td> Гаити </td></tr> <tr><td> Температура </td>";
                foreach ($av_temp as $key => $value) {
                    echo "<td>".$value . "</td>";
                }
                echo "</tr><tr><td>Месяц</td>";
                foreach ($month as $key => $value) {
                    echo "<td>".$value . "</td>";
                }
                echo "</tr></table>";
                ?>
            </div>
            <h3>7. Дан двумерный массив из 5 строк и 6 столбцов. Определить для каждого четного столбца максимальный элемент. Найти произведение этих элементов.</h3>
            <div class="hw7">
                <p>Ответ. </p>
                <?php
                for ($i = 1; $i <= 5; $i++) {
                    for ($j = 1; $j <= 6; $j++) {
                        $arr6[$i][$j] = mt_rand(1, 100);
                    }
                }

                $odd = [];
                foreach ($arr6 as $row => $value) {
                    foreach ($value as $column => $cell) {
                        //echo $row.' '.$column.' '.$cell.'<br>';
                        if ($column % 2 == 0) {
                            $odd[$row][$column] = $cell;
                        }
                    }
                }


                for ($j = 2; $j <= 6; $j+=2) {
                    $max[$j] = $arr6[1][$j];
                    for ($i = 2; $i <= 5; $i++) {
                        if ($j % 2 == 0 && $arr6[$i][$j] > $max[$j]) {
                            $max[$j] = $arr6[$i][$j];
                        }
                    }
                }

                $prod = 1;
                foreach ($max as $value) {
                    $prod *= $value;
                }

                echo "Массив. <br><table><tr><td>\</td><td><i>1</i></td><td><i>2</i></td><td><i>3</i></td><td><i>4</i></td><td><i>5</i></td><td><i>6</i></td></tr>";
                foreach ($arr6 as $row => $value) {
                    echo '<tr><td><i>' . $row . '</i>&nbsp;&nbsp;&nbsp;</td>';
                    foreach ($value as $cell) {
                        echo "<td>$cell</td>";
                    }
                    echo "</tr>";
                }
                echo "</table><br><br>Элементы четных столбцов<table>";
                foreach ($odd as $row => $value) {
                    echo '<tr>';
                    foreach ($value as $item) {
                        echo "<td>$item&nbsp;&nbsp;</td>";
                    }
                    echo "</tr>";
                }
                echo "</table><br><br>Максимальные элементы четных столбцов: ";
                foreach ($max as $value) {
                    echo "$value,&nbsp;&nbsp; ";
                }
                echo "<br> <br>Произведение найденных элементов = $prod <br> <br>";
                ?>
            </div>

        </div>
<?php require_once 'inc/footer.php'?>