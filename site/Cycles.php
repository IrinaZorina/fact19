<?php require_once 'inc/header.php' ?>
<style> 
body {
    color: white;
}
.container {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 10px;
}

.column {
    padding: 10px;
    border: 1px solid #ccc;
    border-color: black;
}
</style>
<br>
<h1> Задание со слайда №25</h1>
<h3> Задание 1. Выведите столбец чисел от 5 до 13.</h3>
<?php
for ($i = 5; $i <= 13; $i++) {
    echo $i . "<br>";
}
?>
<br>
<h3>Задание 2. Дано число $num=1000. Делите его на 2 столько раз, пока результат деления не станет меньше 50. Какое число получится? Посчитайте количество итераций, необходимых для этого (итерация - это проход цикла). Решите задачу сначала через цикл while, а потом через цикл for.</h3>
<?php
$num = 1000;
$iterations = 0;

while ($num >= 50) {
    $num /= 2;
    $iterations++;
}
echo "<div class='container'>";
echo "<div class='column'>";
echo "<h4>Через цикл while</h4>";
echo "Результат: $num<br>";
echo "Количество итераций: $iterations";
echo "</div>";

$num = 1000;
$iterations = 0;

for (; $num >= 50; $iterations++) {
    $num /= 2;
}
echo "<div class='column'>";
echo "<h4>Через цикл for</h4>";
echo "Результат: $num<br>";
echo "Количество итераций: $iterations";
echo "</div>";
echo "</div>";
?>
<br>
<?php
$i = mt_rand(1,10);

$result = [];
for ($j = 0; $j <= 10 - $i; $j++) {
    $result[] = $j;
}
echo "<h4> Задание 3. Необходимо создать переменную (i) и передавать в нее значение.</h4>";
echo implode(', ', $result);
?>

<?php require_once 'inc/footer.php' ?>