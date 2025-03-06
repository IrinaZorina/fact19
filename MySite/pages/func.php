<?php
require ('../style/function.php');
$theme = thema();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="<?php echo $theme; ?>">
    
<?php
require_once('header.php');
echo " задание 16.7 <br>";
$rec = fib(10);
echo implode(", ", $rec) . "<br>";
echo "<br>";

echo " задание 17.1 <br>";
$odnmas =[];
$odnmas = mas($odnmas,5, 1,10);
print_r($odnmas);
echo "<br>";

echo " задание 17.2 <br>";
$str = "HTML, CSS, PHP, BITRIX";
$rez = str1($str);
echo "<br>" . $str . " количество слов " . $rez . "<br>";
echo "<br>";

echo " задание 17.3 <br>";
$rez = reverse1($str);
echo "<br>" . $rez . "<br>";
echo "<br>";

echo " задание 17.4 <br>";
$rez = countel($str);
echo "количество символов в строке равно $rez <br>";
echo "<br>";

echo " задание 17.5 <br>";
PoStroc($str);
require('footer.php');
?>

</body>
</html>
