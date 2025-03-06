<?php

function thema(){
date_default_timezone_set('Asia/Yekaterinburg'); 
$hour = date('H'); 

if ($hour >= 8 && $hour < 20) {
    $theme = 'light-theme';
} else {
    $theme = 'dark-theme';
}
return $theme;
}


function class3($str1){
    $color1 = 'red';
            $color2 = 'blue';
            $res ='';
            $arr = explode(" ", $str1);
            for ($i = 0; $i < count($arr); $i++) {
                $word = $arr[$i];
                if ($i%2== 0) {
                    $res .= '<span style="color: ' . $color1 . ';">' . htmlspecialchars($word) . ' </span>';
            }
            else{
                $res .= '<span style="color: ' . $color2 . ';">' . htmlspecialchars($word) . ' </span>';
            }
        }
        echo $res;
}

function kolvo($myFile){
    $dom = new DOMDocument();
    @$dom->loadHTML($myFile);
    $text = $dom->textContent;
    
    // Подсчёт количества слов
    preg_match_all('/\b\p{L}+\b/u', $text, $matches);
    $wordCount = count($matches[0]);
    
    // Подсчёт количества гласных
    preg_match_all('/[aeiouаеёиоуыэюя]/ui', $text, $vowelMatches);
    $vowelCount = count($vowelMatches[0]);
    
    // Вывод результата
    echo "<br>";
    echo "Количество гласных букв на странице: $vowelCount <br> Количество слов на странице: $wordCount";
}

function birth(){
    
    $birthday = DateTime::createFromFormat("d.m.Y","07.10.2006");
    $currentdate = new DateTime();
    $interval = $currentdate ->diff($birthday);
    $razniza = $interval->days;
    echo $razniza . " дней";
}


function fib($count){
    $fib =[];

    $sequence = [];
    
    if ($count >= 1) {
        $fib[] = 0; // Первое число Фибоначчи
    }
    if ($count >= 2) {
        $fib[] = 1; // Второе число Фибоначчи
    }

    // Генерация последующих чисел
    for ($i = 2; $i < $count; $i++) {
        $next = $fib[$i - 1] + $fib[$i - 2];
        $fib[] = $next;
    }

    return $fib;
}

function mas ($array, $countel, $minvalue, $maxvalue){
    for($i= 0; $i< $countel; $i++){
        $array[$i] = rand($minvalue,$maxvalue);
        }
return $array;
}
function str1( $string ){
    preg_match_all("/\p{L}+/u", $string,
    $matches );
return count($matches[0]);
}

function reverse1 ($str){
    $mas = str_split($str);
    $str1 = "";
    for ($i= count($mas)-1; $i>=0; $i--){
        $str1.=$mas[$i];
    }
    return $str1;
}

function countel( $str ){
    $count = mb_strlen($str);
    return $count;
}

function PoStroc($str){
    preg_match_all('/[a-zA-Z]/', $str, $arr);
foreach($arr[0] as $v){
    echo $v . "<br>";
}
}
function ozenki($ucheba){
    
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

}

function ost($temp){
    
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
}

function newmass(){

    $arr12 =[];
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 6; $j++) {
$arr12[$i][$j] = rand(0,10);
    }
}
return $arr12;

}
function secmass($arr12){
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

}

function cikl1 ($a){
    while($a <= 13){
        echo"$a <br>";
        $a++;
    }
}

function cikl2($num){
    $count = 0;
while($num >=50){
$count++;
$num/=2;
}
echo "$count";
}

function cikl3($i){
    $max=$i;
$ch = 0;
echo "$i";
echo "<br>";
for($i1= $i; $ch <= 10-$max; $ch++){
echo" $ch ";
}
}
?>