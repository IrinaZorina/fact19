<?php
date_default_timezone_set ( 'Asia/yekaterinburg');
$time = date(format: 'H');

if ($time >= 12 &&  $time < 20) {
    $css = "style.css";
}
else {
    $css = "style2.css";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo $css ?>">
    <title>дз1Валеева</title>
</head>



<body>
    <header>
        <div class="Logo">Logo</div><hr>
        <div class="initials">
            <h2>Валеев Резеда</h2>
        </div>
    </header>
    <div class="container">
        
        <div class="p">
            <img src="img/myphoto.jpg">
        </div>
        <div class="me">
            <p class="aboutme">Меня зовут Валееав Резеда, и мне 
                в этом году исполнится 20 лет. Я учусь на 
                веб-программиста в колледже. 
                Кроме учебы я люблю рисовать в свободное время 
                и смотреть сериалы и мультфильмы.
                Так же мне нравится активный вид отдыха, часто 
                хожу гулять, иногда посещаю секции по волейболу 
                или баскетболу.
            </p>
        </div>
        <div class="factcours">
            <p class="fact">Я сейчас прохожу этот курс благодаря 
                рекомендациям подруги, и мне очень понравилась 
                затея пройти курс, так как хочу развивать свои 
                навыки в кодинге и верстке сайтов.
                Отличная возможность научиться чему то новому!
            </p>
        </div>
    </div>
    <div class="adaptation">
    <p><div class="krasnoyarsk">Достопримечательности города Красноярска</div></p>
    <div class="towns">
        <div class="town">
            <div><img src="./img/достопримечательность1.jpg"></div>
            <div>Символ Красноярска -<br>часовня Парскевы<br>Пятницы!</div>
        </div>
        <div class="town">
            <div><img src="./img/достопримечательность2.jpg"></div>
        <div>Коммунальный мост через<br>Енисей></div>
        </div>
        <div class="town">
            <div><img src="./img/достопримечательность3.jpg"></div>
            <div>Церковь Преображения<br>Господня</div>
        </div>
        <div class="town">
            <div><img src="./img/достопримечательность4.jpg"></div>
            <div>Надпись "Енисейская<br> Сибирь" на склоне под<br> жилым комплексом <br>"Орбита"</div>
        </div>
    </div>


    <p><div class="krasnoyarsk">Достопримечательности Красноярского Края</div></p>
    <div clsas="krai">
<div class="Mne">
        <div class="img1">
            <div><img src="./img/ges.jpg"></div>
            <div>Саяно-Шушенская ГЭС</div>
        </div>

        <div class="img2">
            <div><img src="./img/log.jpg"></div>
            <div>Фан-парк "Бобровый лог"</div>
        </div>
</div>
<div class="MneNado">
        <div class="img3">
            <div><img src="./img/peshera.jpg"></div>
            <div>Пещера "Большая Орешная" </div>
        </div>

        <div class="img4">
            <div><img src="./img/stolb.jpg"></div>
            <div>Национальный парк "Красноярские столбы"</div>
        </div>
    </div>
</div>
</div>
</body>
</html>