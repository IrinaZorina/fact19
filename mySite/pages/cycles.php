<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/style-cycles.css" type="text/css">
    <link rel="stylesheet" href="/assets/css/style.css" type="text/css">

    <title>Циклы</title>
</head>
<body>
    <?php
        include "header.php";
    ?>
    <h3 class="title">Задание №1</h3>
    <?php
    for($a=5;$a<14;++$a)
    {
        echo'<p class="text">'.$a.'</p>';
    }
    ?>
    <h3 class="title">Задание №2</h3>
    <div class="container">
        <div class="container__item">
            <p class="text text_align_center">Решение через WHILE</p>
            <?php
                $num=1000;
                $it=0;
                while($num>50)
                {
                   ++$it;
                   $num/=2;
                }
                echo'<p class="text"> Переменная num='.$num.' количество итераций '.$it.'</p>';
            ?>
        </div>
        <div class="container__item">
        <p class="text text_align_center">Решение через FOR</p>
        <?php
            $num=1000;
            $it=0;
            for(;$num>50;++$it)
            {
                $num/=2;
            }
            echo'<p class="text"> Переменная num='.$num.' количество итераций '.$it.'</p>';
        ?>
        </div>
    </div>
    <h3 class="title">Задание №3</h3>
        <?php
            for($i=0;$i<=10;++$i)
                {
                    echo "Переменная i=$i <br>";
                    $e=0;
                    for(;$e<=10-$i;++$e)
                        {
                            echo"$e ";
                        }
                    echo "<br>";
                }
            ?>
    <?php
        include "footer.php";
    ?>
   
</body>
</html>