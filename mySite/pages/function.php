<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/style.css" type="text/css">
    <link rel="stylesheet" href="/assets/css/style-cycles.css" type="text/css">
    <title>Функции</title>
</head>
<body>
<?php
include "header.php";
?>
<h3 class="title">Задание №1 слайд 15</h3>
<?php
//задание 1
function compare($a, $b)
{
    if($a>$b)
    {
        return $a;
    }
    else 
    {
        return $b;   
    }
  
}
$num1=1256;
$num2=508;
echo'<p class="text text_pd_left"> Функция получает два числа выводит наибольшее. Пример: число 1='.$num1.' число 2='.$num2.'. Результат работы функции '.compare($num1,$num2).'. </p>';
?>
<h3 class="title">Задание №2 слайд 15</h3>
<?php
// задание 2
function triangle($k1,$k2)
{
 return sqrt(pow($k1,2)+pow($k2,2));
}
$kt1=23;
$kt2=35;
echo'<p class="text text_pd_left">Функция получает длину двух катетов и возвращает длину гипотенузы. Пример: катет 1='.$kt1.' катет 2='.$kt2.'. Гипотенуза равна '.triangle($kt1,$kt2).'. </p>';
?>
<h3 class="title">Задание №3 слайд 15</h3>
<?php
function ten_num($num)
{
    while(true)
    {
        $num*=10;
        if($num>1000000)
        {
            echo '<p class="text text_pd_left">Вы достигли предела.</p>';
            break;
        }
        echo'<p class="text text_pd_left"> '.$num.' </p>';
    }
}
$num_f=10;
echo'<p class="text text_pd_left"> Результат работы функции число '.$num_f.'   </p>';
ten_num($num_f);
?>
<h3 class="title">Задание №4 слайд 16</h3>
<?php
function rand_arr($rand_num)
{
    if($rand_num>0)
    {
        $arr=[];
        for($i=0;$i<mt_rand(0,$rand_num);++$i)
        {
            $arr[]=mt_rand(0,$rand_num);
        }
        return $arr;
    }
   
    else
    {
        return false;
    }
}
echo'<p class="text text_pd_left"> Функция возвращает массив случайных чисел</p>';
$arr_r=rand_arr(25);
print_r($arr_r);
?>
<h3 class="title">Задание №5 слайд 16</h3>
<?php
function avg_arr($arr)
{
    $res=0;
    for($i=0;$i<count($arr);++$i)
    {
        $res+=$arr[$i];
    }
    return $res/count($arr);
}
echo'<p class="text text_pd_left"> Функция принимает массив и вовращает среднеарифметическое массива. Пример: массив выведен в задании №4 слайд 16. Среднеарифметическое='.avg_arr($arr_r).' </p>';
?>
<h3 class="title">Задание №6 слайд 16</h3>
<?php
function num_worlds($str)
{
    $arr_str=explode(" ",$str);
    return count($arr_str);
}
$str_ex='<<В конце ноября, в оттепель, часов в девять утра, поезд Петербургско-Варшавской железной дороги на всех парах подходил к Петербургу. Было так сыро и туманно, что насилу рассвело; в десяти шагах, вправо и влево от дороги, трудно было разглядеть хоть что-нибудь из окон вагона.>>';
echo '<p class="text text_pd_left"> Функция вовращает количество слов в строке. Пример: Cтрока '.$str_ex.' Количество слов '.num_worlds($str_ex).'.</p>';
?>
<h3 class="title">Задание №6 слайд 16</h3>
<?php
function fib($a)
{
    $i=1;
    $arr_fib=[];
    $arr_fib[0]=$i;
    $arr_fib[1]=$i;
    $e=0;
  while($i<$a-1)
  {
    $arr_fib[$i+1]=$arr_fib[$e]+$arr_fib[$i];
    ++$i;
    ++$e;
  }
  return implode(" ",$arr_fib);
    
}
$num_fib=12;
echo'<p class="text text_pd_left"> Функция расчитывает последовательность чисел Фибоначчи. Пример: расчет до '.$num_fib.' числа Фибоначчи '.fib($num_fib).'  </p>';
?>
<h3 class="title">Задание №1 слайд 17</h3>
<?php
function ret_rand($arr)
{   
    for($i=0;$i<count($arr);++$i)
    {
        $arr[$i]=mt_rand(mt_rand(-1000,0),mt_rand(0,1000));
    }
    return $arr;
}
$arr_lenght=mt_rand(0,100);
$arr_rand_exm=[];
for($i=0;$i<$arr_lenght;++$i)
{
    $arr_rand_exm[$i]=0;
}
echo'<p class="text text_pd_left"> Функция принимает массив и заполняет его случайными числами. Пример: размер массива '.count($arr_rand_exm).'. Числа в массиве:  </p>';
$arr_rand_exm=ret_rand($arr_rand_exm);
print_r($arr_rand_exm);
?>
<h3 class="title">Задание №2 слайд 17</h3>
<p class="text text_pd_left"> Функция которая считает количество слов написанна выше</p>
<h3 class="title">Задание №3 слайд 17</h3>
<?php
$str_example="HTML, CSS, PHP, BITRIX";
function rev_str($str)
{
    $rev_str="";
    $arr_str=str_split($str);
    for($i=count($arr_str)-1;$i>=0;--$i)
    {
        $rev_str.=$arr_str[$i];
    }
    return $rev_str;
}
echo'<p class="text text_pd_left"> Функция возвращает переданную строку в обратном порядке. Пример: Строка '.$str_example.', перевернутый вариант '.rev_str($str_example).'  </p>';
?>
<h3 class="title">Задание №4 слайд 17</h3>
<?php
function display_len_str($str)
{
    echo '<p class="text text_pd_left"> Длинна строки равна '.strlen($str).'</p>';
}
echo'<p class="text text_pd_left"> Функция выводит длинну строки. Пример: Строка '.$str_example.'</p>';
display_len_str($str_example);
?>
<h3 class="title">Задание №5 слайд 17</h3>
<?php
function display_world($str)
{
    $str=str_replace(" ","",$str);
    $str=str_replace(",","",$str);
    for($i=0;$i<strlen($str);++$i)
    {
            echo $str[$i].'<br>';    
    }
}
echo'<p class="text text_pd_left">Функция выводит каждую букву на новую строку. Пример: Строка '.$str_example.' </p>';
display_world($str_example);
?>

<?php
// echo'<p class="text text_pd_left">  </p>';
include "footer.php";
?>
</body>
</html>
