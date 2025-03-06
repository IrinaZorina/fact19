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
    <link rel="stylesheet" href="style/style.css">
</head>
<body class="<?php echo $theme; ?>">

<?php
require('header.php');
echo "задание 1 <br>";
$a=5;
cikl1($a);

echo "<br>";
echo "задание 2 <br>";
$num=1000;
cikl2($num);

echo "<br>";
echo "задание 3 <br>";
$i=mt_rand(0,10);
cikl3($i);
require('footer.php');
?>
</body>
</html>
