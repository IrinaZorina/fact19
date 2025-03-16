<?php
// функция меняет тему в зависимости от времени 
function theme_page($hour)
{
    if($hour>=8 && $hour<20)
    {
        echo '<link rel="stylesheet" href="./assets/css/style.css">';

    }
    else
    {
        echo '<link rel="stylesheet" href="./assets/css/style.css">
        <style>
            html, body{
                background-color:black;
                color: aliceblue;
            }
            .header__line{
                background-color:whitesmoke;
            }
                .place-item{
                background-color:coral;
                color:powderblue;
            }
                .footer{
                background-image: linear-gradient(black, gray);
            }
        </style>';
    }
}
// функция окрашивает первое предложение в произвольный цвет
function rand_color($str_about)
{
    $end_str=mb_strpos($str_about,"!");
    $str_about_clr=mb_substr($str_about,0,mb_strpos($str_about,"!")+1);
    $str_about=str_replace($str_about_clr,'',$str_about);
    $str_about_clr= '<span style="color: rgb('.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).')">'.$str_about_clr.'</span>';
    return $str_about_clr.$str_about;
}
// функция окрашиваем слова в разные цвета
function world_color(&$str_course)
{
    $arr_str_course=explode(" ",$str_course);
    $str_course="";
    $str_clr1='<span style="color:black">';
    $str_clr2='<span style="color:darkcyan">';
    for($i=0;$i<count($arr_str_course);++$i)
    {   
        if($i%2==0)
        {
            $str_course.=$str_clr1.$arr_str_course[$i].'</span> ';
        }
        else
        {
            $str_course.=$str_clr2.$arr_str_course[$i].'</span> ';
        }

    }
}
// функция считае количество гласных букв
function vowel_let($str_text)
{
    $arr_char=["а", "е", "ё", "и", "о", "у", "ы", "э", "ю", "я","А","Е","Ё","И","О","У","Ы","Э","Ю","Я"];
    $num_char=0;
    for($i=0;$i<count($arr_char);++$i)
    {
        $num_char+=substr_count($str_text,$arr_char[$i]);
    }
    return $num_char;
}
// считает количество слов
function num_worlds($str)
{
    $arr_str=explode(" ",$str);
    return count($arr_str);
}
function born_now()
{
    $d_now= new DateTime(date('Y-m-d'));
    $d_born= new DateTime("1985-12-29");
    $d_diff=date_diff($d_now,$d_born);
    return $d_diff->format('%a');
}
?>