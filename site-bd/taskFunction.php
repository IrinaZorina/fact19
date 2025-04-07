<?php

include 'function.php';
include 'ins/header.php';
?>
<div class="box2">
    <?php
// 16 Слайд
echo "<h3>Задание 1</h3>";
function z4($a)
{
    $arr = [];
    for ($i = 0; $i < $a; $i++) {
        $arr[$i] = mt_rand(1, 10);
    }
    foreach ($arr as $num) {
        echo $num . "\n";
    }
    return $arr;
}
z4(5);

echo "<h3>Задание 2</h3>";

$arr = z4(10);

function z5($arr) {
    $sum = 0;
    for ($i = 0; $i < count($arr); $i++) {
        $sum += $arr[$i];
    }
    return $sum/ count($arr);
}
echo '<br>' . z5($arr);

echo "<h3>Задание 3</h3>";

function z6($a)
{
    return count(explode(' ', $a));
}
$result4  = z6('Ура, весна пришла!');
echo $result4;

echo "<h3>Задание 4</h3>";

function z7($f){
    $a = 0;
    $b = 1;
    for ($i = 0; $i <= $f; $i++) {
        if ($i < $f) {
            echo $a . " ";
        } else {
            echo $a;
        }
        $c = $a + $b;
        $a = $b;
        $b = $c;
    }
    echo "<br> предел = $f";
}
echo "Последовательность чисел Фибоначчи: ";
z7(10);

// Слайд 17

echo "<h3>Задание 1</h3>";
$arr = [3, 7, 8, 8, 1, 2, 6];
function z1($arr){
    for($i = 0; $i < count($arr); $i++){
        $arr[$i] = mt_rand(1,10);
    }
    foreach ($arr as $num) {
        echo $num . "\n";
    }
}
z1($arr);

echo "<h3>Задание 2</h3>";
$text = 'HTML, CSS, PHP, BITRIX';

function z2($text){
    $arr = explode(' ', $text);
    return count($arr );
};
echo z2($text);

echo "<h3>Задание 3</h3>";

function z3($text){
    $arr = str_split($text, 1);
    for($i = count($arr) - 1; $i >= 0; $i--){
        echo " $arr[$i] ";
    }
};
echo z3($text);

echo "<h3>Задание 4</h3>";

function z42($text){
    $arr = str_split($text, 1);
    for($i = 0; $i < count($arr); $i++){
    }
    return $i;
};
echo z42($text);

echo "<h3>Задание 5</h3>";

function z52($text){
    $arr = str_split($text, 1);
    for($i = 0; $i < count($arr); $i++){
        echo " $arr[$i] <br>";
    }
};
echo z52($text);

?>
</div>
<?php
include 'ins/footer.php';

?>
