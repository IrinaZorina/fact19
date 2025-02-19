<?php include '../header.php'; ?>
<?php 
echo ' Слайд 25 задание 1. вывел столбец с числами от 5 до 13' ;
echo '<br>';
$i = 4;
while ($i++ <13) {
echo "$i <br>";
}
echo '<br>';
echo "Слайд 25 задание 3 : Вывести последовательность чисел от 0 до (10 - \$i)"; 
echo '<br>';
$i = 0 ;
$max = 10-$i ;
for ($i = 0; $i <=$max; $i++ ){
    echo $i;
    if ($i < $max) {
        echo ", ";
    }
}
echo '<br>';

?>
<?php include '../footer.php'; ?>
