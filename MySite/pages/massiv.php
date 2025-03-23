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
    <link rel="stylesheet" href="../style/style.css">
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

ozenki($ucheba);

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
ost($temp);

$arr12;
$arr13 = newmass();
print_r($arr13);
echo "<br>";

secmass($arr13);
// $proiz = 1;
// for ($i = 0; $i < 6; $i++) {
//     $maxst = $arr12[0][$i];
//     for ($j = 0; $j < 5; $j++) {
//         if($maxst <= $arr12[$j][$i] && $i%2==1) {
//             $maxst = $arr12[$j][$i];
//         }
//     }
//     if($i%2==1){
//         echo" максимальный элемент в столбце". $i . " = ". $maxst . "<br>";;
//         $proiz*=$maxst;
//     }

// }
// echo " <br> произведение максимальных элементов каждого столбца равен " . $proiz;
require('footer.php');
?>
</body>
</html>