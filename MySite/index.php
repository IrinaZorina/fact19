<?php
date_default_timezone_set('Asia/Yekaterinburg'); 
$hour = date('H'); 


if ($hour >= 8 && $hour < 20) {
    $theme = 'light-theme';
} else {
    $theme = 'dark-theme';
}
ob_start();
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
            ?>        </div>
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
$dom = new DOMDocument();
@$dom->loadHTML($myFile);
$text = $dom->textContent;
$arr3 = preg_split('//u',$text);
$count1 =0;
preg_match_all('/\p{L}+/u',$text, $arr4);
$wordCount =count($arr4[0]);
$glas = "eEyYuUiIoOaAуУеЕэЭоОаАыяЯиИюЮёЁ";
for ($i = 0; $i < count($arr3); $i++) {
    if(mb_strpos($glas,$arr3[$i],0,'UTF-8')!==false){
        $count1++;
    }
}
    echo "<br>";
    echo "количество гласных букв на странице равно $count1 <br> количество слов на странице $wordCount";

    echo "<br> ";

    $birthday = DateTime::createFromFormat("d.m.Y","07.10.2006");
    $currentdate = new DateTime();
    $interval = $currentdate ->diff($birthday);
    $razniza = $interval->days;
    echo $razniza . " дней";
?>
</html>