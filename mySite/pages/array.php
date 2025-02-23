<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/style-cycles.css" type="text/css">
    <link rel="stylesheet" href="/assets/css/style.css" type="text/css">

    <title>Массивы</title>
</head>
<body>
    <?php
        include "header.php";
    ?>
 <h3 class="title">Задание №1</h3>
 <p class="text text_align_center">В массив со студентами можно добавить любое количество предметов, для примера добавлен еще один предмет Биология</p>
    <?php
   $student=[
            "Максим" =>["Математика" =>3,
                        "Физика"=>3,
                        "Химия"=>4,
                        "Информатика"=>3,
                    "Биология"=>4],
            "Александр" =>["Математика" =>4,
                        "Физика"=>4,
                        "Химия"=>3,
                        "Информатика"=>5,
                    "Биология"=>4],
            "Татьяна" =>["Математика" =>5,
                        "Физика"=>4,
                        "Химия"=>5,
                        "Информатика"=>5,
                    "Биология"=>4],
            "Светлана" =>["Математика" =>4,
                        "Физика"=>3,
                        "Химия"=>3,
                        "Информатика"=>4,
                        "Биология"=>4]
   ];
   $arr_result=[];
    $it=0; $arr_score=[];
    function add_score(&$arr_s,$key_s,$score_s)
    {
        $key_add=true;
        // Добавляем новые значение в массив если их там еще нет
        
        foreach($arr_s as $key=>$score)
            {
                if($key==$key_s)
                {
                    $key_add=false;
                }
            }
        if($key_add)
            {
                $arr_s[$key_s]=$score_s;
            }
            // если новое значение в массив не добавили, тогда добавляем оценку к массиву
        if(!$key_add)
            { $it=0;
                foreach($arr_s as $key1=>$score1)
                {
                    ++$it;
                    if($key1==$key_s)
                    { 
                        $arr_s[$key1]+=$score_s;
                        break;
                    }
                    
                }
                
            }
    }
        foreach($student as $name => $subject)
    {
        ++$it;
        echo $name.':<br>';
        foreach($subject as $key=>$score)
        {
            add_score($arr_score,$key,$score);
            echo $key.' - '.$score.'<br>';
        }
    }
    foreach($arr_score as $key1=>$score1)
    {
        $str_sum="Сумма оценок по предмету ";
        $arr_result[$str_sum.$key1]=$score1;
        $str_mid="Средняя оценка по группе ";
        $arr_result[$str_mid.$key1]=$score1/$it;
    }
    foreach($arr_result as $key1=>$score1)
    {
        echo "$key1 : $score1 <br>";
    }
    ?>
     <h3 class="title">Задание №2</h3>
     <?php
     $avr_temp=[
        "Куба"=>[
            "январь"=>25.3,
            "февраль"=>26.4,
            "март"=>27.5,
            "апрель"=>29.2,
            "май"=>30.5,
            "июнь"=>31.6,
            "июль"=>31.2,
            "август"=>31.7,
            "сентябрь"=>30.2,
            "октябрь"=>29,
            "ноябрь"=>27.4,
            "декабрь"=>26
        ],
        "Тринидад"=>[
            "январь"=>25.2,
            "февраль"=>28.7,
            "март"=>27.3,
            "апрель"=>28.8,
            "май"=>29.5,
            "июнь"=>30.7,
            "июль"=>31.9,
            "август"=>31.3,
            "сентябрь"=>30.6,
            "октябрь"=>29,
            "ноябрь"=>27.2,
            "декабрь"=>27.5
        ],
        "Ямайка"=>[
            "январь"=>24,
            "февраль"=>24.6,
            "март"=>25.2,
            "апрель"=>25.1,
            "май"=>26.6,
            "июнь"=>27.3,
            "июль"=>27,
            "август"=>27.7,
            "сентябрь"=>26.8,
            "октябрь"=>26.4,
            "ноябрь"=>25.6,
            "декабрь"=>25.7
        ],
        "Гаити"=>[
            "январь"=>23.3,
            "февраль"=>24.6,
            "март"=>24.2,
            "апрель"=>25,
            "май"=>26.6,
            "июнь"=>27.2,
            "июль"=>27.8,
            "август"=>27.2,
            "сентябрь"=>27.5,
            "октябрь"=>26.7,
            "ноябрь"=>25.4,
            "декабрь"=>24.2
        ]
        ];
        $name_island;
        $result_arr=[];
        $arr_max_temp=[];
        $moth_max_temp="";
        $max_temp=0;
        foreach($avr_temp as $island=>$arr_temp)
        {
            $max_temp=0;
            $name_island=$island;
            foreach($arr_temp as $month=>$temp)
            {
                if($max_temp<$temp)
                {
                    $max_temp=$temp;
                    $moth_max_temp=$month;
                }
            }
            $arr_max_temp[$moth_max_temp]=$max_temp;
            $result_arr[$name_island]=$arr_max_temp;
            unset($arr_max_temp);
        }
        foreach($result_arr as $island=>$arr_temp)
        {
            echo 'Максимальная температура на острове '.$island.'<br>';
            foreach($arr_temp as $month=>$temp)
            {
                echo $month.' '.$temp. '<br>';
            }
        }
     ?>
      <h3 class="title">Задание №3</h3>
      <?php
      $arr_2d=[];
      $arr_tmp=[];
      for($i=0;$i<5;++$i)
      {
        for($e=0;$e<6;++$e)
        {
            $arr_tmp[]=mt_rand(0,1000);
        }
        $arr_2d[]=$arr_tmp;
        unset($arr_tmp);
      }
      echo 'Массив случайных чисел <br>';
      foreach($arr_2d as $arr)
      {
        foreach($arr as $num)
        {
            echo $num.'_';
        }
        echo '<br>';
      }
      $arr_2d_rev=[];
      // функция нужна чтобы возвращать строки для перевернутого массива
      function rev_row ($num_col,$arr)
      {
        $arr_result=[];
        for($i=0;$i<count($arr);++$i)
        {
          
     
          for($e=0;$e<count($arr[$i]);++$e)
          {
            if($e==$num_col)
            {
                $arr_result[]=$arr[$i][$e];
            }
          }
            
        }
        return $arr_result;
      }
      for($i=0;$i<6;++$i)
      {
        $arr_2d_rev[]=rev_row($i,$arr_2d);
      }
      $sum_max=0;
      for($i=0;$i<count($arr_2d_rev);++$i)
      {
        $num_col=$i+1;
        if($num_col%2==0)
      {
    
        echo 'столбец №'.$num_col.'<br>';
        $sum_row=0;
        for($e=0;$e<count($arr_2d_rev[$i]);++$e)
        {
            if($e==0)
            {
                $max_num=$arr_2d_rev[$i][$e];
            }
            if($arr_2d_rev[$i][$e]>$max_num && $e!=0)
            {
                $max_num=$arr_2d_rev[$i][$e];
            }
            $sum_row+=$arr_2d_rev[$i][$e];
        }
        echo 'Максимальный элемент в столбце='.$max_num.'. Сумма всех элементов в столбце='.$sum_row.'<br>';
        $sum_max+=$max_num;
      }
      echo 'Сумма всех максимальных элементов в столбцах='.$sum_max.'<br>';
        
      }
    
      ?>
    <?php
        include "footer.php";
    ?>
   
</body>
</html>