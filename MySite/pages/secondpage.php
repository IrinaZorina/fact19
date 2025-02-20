<?php
date_default_timezone_set('Asia/Yekaterinburg'); 
$hour = date('H'); 

if ($hour >= 8 && $hour < 20) {
    $theme = 'light-theme';
} else {
    $theme = 'dark-theme';
}

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
$a=5;
while($a <= 13){
    echo"$a <br>";
    $a++;
}

echo "<br>";
$num=1000;
$count = 0;
while($num >=50){
$count++;
$num/=2;
}
echo "$count";
echo "<br>";
$i=mt_rand(0,10);
$max=$i;
$ch = 0;
echo "$i";
echo "<br>";
for($i1= $i; $ch <= 10-$max; $ch++){
echo" $ch ";
}
require('footer.php');
?>
</body>
</html>
