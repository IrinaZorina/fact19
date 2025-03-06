<?php
require ('style/function.php');
$theme = thema();
?>
<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="php,html,css,bitrix">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/style.css">

</head>
<body class="<?php echo $theme; ?>">

<?php
ob_start();
require_once('pages/header.php');
?>
    <div class="container">
        <div class="one">
            <img src="images/Глазки-save.ico" alt="Image">
        </div>
        <div class="two" style="color: blue;">
            <?php
            $str = '<p>Меня зовут Борисин Вадим.</p>
            <p>Учусь на 3 курсе в колледже по
            специальности "Информационные системы и 
            программирование". В процессе обучения 
            изучил С#, C++, SQl, 
            разметку XAML, начинаю изучать Java Script.</p>';
            echo $str;
            ?>
        </div>
        <div class="three">
        <?php

            $str1 = "Первая лекция понравилась тем, что 
            информация преподается очень понятно, много практики.";
            class3( $str1 );
            ?>        
        </div>
    </div>

    <main>
        <p style="text-align: center; font-size: 20px;">Достопримечательности города УФА</p>
        <div class="container1">
            <div class="grid1"><img src="images/Глазки-save.ico" alt=""><p>первая картинка</p></div>
            <div class="grid1"><img src="images/Глазки-save.ico" alt=""><p>вторая картинка</p></div>
            <div class="grid1"><img src="images/Глазки-save.ico" alt=""><p>третья картинка</p></div>
            <div class="grid1"><img src="images/Глазки-save.ico" alt=""><p>четвертая картинка</p></div>
        </div>

        <p style="text-align: center; font-size: 20px;">Достопримечательности Республики Башкортостан</p>


<div class="container2">
    <div class="grid2" ><img src="images/Глазки-save.ico" alt=""><p>первая картинка</p></div>
    <div class="grid2" ><img src="images/Глазки-save.ico" alt=""><p>вторая картинка</p></div>
    <div class="grid2" ><img src="images/Глазки-save.ico" alt=""><p>третья картинка</p></div>
    <div class="grid2" ><img src="images/Глазки-save.ico" alt=""><p>четвертая картинка</p></div>

</div>

</main>

</body>
<?php
require_once('pages/footer.php');



$myFile = ob_get_clean();
echo $myFile;

kolvo($myFile);

    echo "<br> ";

    birth();
?>
</html>