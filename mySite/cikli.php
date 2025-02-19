<?php require_once './inc/header.php' ?>
<?php
echo '<h2>Задание 1 <br> Дана последовательность элементов от 1 до 30. Необходимо вывести на экран числа, кратные 2. Каждое число должно быть с новой строки. <br></h2>';
for ($i = 1; $i <= 30; $i++) {
    if ($i % 2 == 0) {
        echo $i . '<br>';
    }
}
echo '<h2>Задание 2 <br> Дана последовательность элементов от 1 до 50. Необходимо сделать курсивом каждый элемент, кратный 3. Числа, одновременно кратные 3 и 5, сделать жирным.<br></h2>';
for ($i = 1; $i <= 50; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "<strong>$i</strong><br>";
    } elseif ($i % 3 == 0) {
        echo "<em>$i</em><br>";
    } else {
        echo "$i<br>";
    }
}
echo '<h2>Задание 3 <br> Выведите столбец чисел от 5 до 13.<br></h2>';
for ($i = 5; $i <= 13; $i++) {
    echo $i . '<br>';
}
echo '<h2>Задание 4 <br> Дано число $num=1000. Делите его на 2 столько раз, пока результат деления не станет меньше 50. Какое число получится? Посчитайте количество итераций, необходимых для этого (итерация - это проход цикла). Решите задачу сначала через цикл while, а потом через цикл for.<br></h2>';
echo '<h2>цикл через While</h2><br>';
$num = 1000;
$iteration = 0;
while ($num >= 50) {
    $num /= 2;
    $iteration++;
}
echo "Результат деления : $num <br>";
echo "Количество итераций: $iteration <br>";
echo '<h2>Цикл через For</h2><br>';
$iteration = 0;
for ($num = 1000; $num >= 50; $iteration++) {
    $num /= 2;
}
echo "Результат деления : $num <br>";
echo "Количество итераций: $iteration <br>";

echo '<h2>Задание 5 <br> <br></h2>';
$i = 0;
$max = 10 - $i;
$numbers = range(0, $max);
echo implode(", ", $numbers);
?>
<?php require_once './inc/footer.php' ?>
