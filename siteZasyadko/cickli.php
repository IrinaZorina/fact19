<?php require_once 'include/header.php'; ?>
<?php
echo '<h2>Задание 1<br></h2>';
for ($i = 5; $i <= 13; $i++) {   //Цикл for $i (назначение переменной) далее условие
    echo $i . '<br>';
}
echo '<h2>Задание 2<br></h2>';
echo '<h3>Цикл через While<br></h3>';
$sum = 1000;
$iteration = 0;
while ($sum >= 50) {
    $sum /= 2;
    $iteration++;
}
echo "Результат деления: $sum<br>";
echo "Количество итераций: $iteration<br>";
echo '<h3>Цикл через For<br></h3>';
$iteration = 0;
for ($sum = 1000; $sum >= 50; $iteration++) {
    $sum /= 2;
}
echo "Результат деления: $sum<br>";
echo "Количество итераций: $iteration<br>";
echo '<h2>Задание 3<br></h2>';
$i = 0;
$maxValue = 10 - $i;
$numbers = range(0, $maxValue);
echo implode(',', $numbers);
?>
<?php require_once 'include/footer.php'; ?>
