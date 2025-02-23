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
$ucheba = [
    ["predmet" => "математика", "student" => "Петр", "rating" => 5],
    ["predmet" => "математика", "student" => "Иван", "rating" => 4],
    ["predmet" => "математика", "student" => "Вася", "rating" => 3],
    ["predmet" => "математика", "student" => "Дмитрий", "rating" => 2],
    ["predmet" => "физика", "student" => "Дмитрий", "rating" => 4],
    ["predmet" => "физика", "student" => "Вася", "rating" => 5],
    ["predmet" => "физика", "student" => "Максим", "rating" => 3],
    ["predmet" => "физика", "student" => "Анна", "rating" => 5],
    ["predmet" => "химия", "student" => "Дмитрий", "rating" => 4],
    ["predmet" => "химия", "student" => "Вася", "rating" => 4],
    ["predmet" => "химия", "student" => "Иван", "rating" => 4],
    ["predmet" => "химия", "student" => "Анастасия", "rating" => 5],
    ["predmet" => "информатика", "student" => "Дмитрий", "rating" => 5],
    ["predmet" => "информатика", "student" => "Вася", "rating" => 5],
    ["predmet" => "информатика", "student" => "Иван", "rating" => 5],
];
$sumM = 0;
$sumF = 0;
$sumI = 0;
$sumH = 0;
$countM = 0;
$countF = 0;
$countI = 0;
$countH = 0;

foreach( $ucheba as $key) {
    switch( $key['predmet'] ) {
        case 'математика':
            $sumM += $key['rating'];
            $countM++;
            break;
        case 'физика':
            $sumF += $key['rating'];
            $countF++;
            break;
        case 'информатика':
            $sumI += $key['rating'];
            $countI++;
            break;
        case 'химия':
            $sumH += $key['rating'];
            $countH++;
            break;
}
}
$SredM = $sumM/$countM; 
$SredF = $sumF/$countF; 
$SredI = $sumI/$countI; 
$SredH = $sumH/$countH; 

echo "Средняя оценка по математике: " . $SredM . "<br>";
echo "Средняя оценка по физике: " . $SredF . "<br>";
echo "Средняя оценка по информатике: " . $SredI . "<br>";
echo "Средняя оценка по химии: " . $SredH . "<br>";


$temp = [
    "Куба" => [
        "Январь" => 28,
        "Февраль" => 29,
        "Март" => 30,
        "Апрель" => 31,
    ],
    "Тринидад" => [
        "Январь" => 29,
        "Февраль" => 30,
        "Март" => 31,
        "Апрель" => 32,
    ],
    "Ямайка" => [
        "Январь" => 27,
        "Февраль" => 28,
        "Март" => 30,
        "Апрель" => 28,
    ],
    "Гаити" => [
        "Январь" => 29,
        "Февраль" => 27,
        "Март" => 28,
        "Апрель" => 25,
    ],
];

$temp2 = [];
foreach ($temp as $island => $months) {
    $maxTemp = null;
    $maxMonth = null;
    foreach ($months as $month => $t) {
        if ($maxTemp == null || $t > $maxTemp ){
            $maxTemp = $t;
            $maxMonth = $month;
        }
    }
    $temp2[$island] =[
        "месяц"=> $maxMonth,
        "температура"=> $maxTemp,
    ];
}

foreach ($temp2 as $island => $data) {
    echo "Остров: " . $island .
    ", Месяц с максимальной температурой: " 
    . $data["месяц"] . ", Температура: " 
    . $data["температура"] . "<br>";
}

echo "<br>";
echo "<br>";

$arr12;

for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 6; $j++) {
$arr12[$i][$j] = rand(0,10);
    }
}
print_r($arr12);

echo "<br>";


$proiz = 1;
for ($i = 0; $i < 6; $i++) {
    $maxst = $arr12[0][$i];
    for ($j = 0; $j < 5; $j++) {
        if($maxst <= $arr12[$j][$i] && $i%2==1) {
            $maxst = $arr12[$j][$i];
        }
    }
    if($i%2==1){
        echo" максимальный элемент в столбце". $i . " = ". $maxst . "<br>";;
        $proiz*=$maxst;
    }

}
echo " <br> произведение максимальных элементов каждого столбца равен " . $proiz;
require('footer.php');
?>
</body>
</html>