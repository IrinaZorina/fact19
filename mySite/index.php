
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Spectral:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <title>Мой сайт</title>
    <?php
        $hour=date('H');
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
        $str_about="Приветствую вас на своем сайте! Этот сайт создан для изучения веб-разработки на курсе ФАКТ Академии.
                        Я работаю в техподдержке крупной IT компании, и хочу повысить свои компетенции, чтобы попробовать себя в разработке.
                        В свободное время люблю заниматься спортом, слушать аудио книги и изучать что-то новое!";
        $str_course='Я выбрал курс от Факт Академии, потому что тут не только изучается веб-разработка, но так же и "1C-Битрикс".
                        Так же большим преимуществом для меня является подготовка к экзамену для получения сертификата от "1C-Битрикс".
                        Надеюсь, что на этом курсе я освою все необходимые навыки и знания и успешно сдам экзамен.';
    ?>
</head>

<?php
    // текст первой фразы окрашиваем в произвольный цвет
    $end_str=mb_strpos($str_about,"!");
    $str_about_clr=mb_substr($str_about,0,mb_strpos($str_about,"!")+1);
    $str_about=str_replace($str_about_clr,'',$str_about);
    $str_about_clr= '<span style="color: rgb('.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).')">'.$str_about_clr.'</span>';
    $str_about=$str_about_clr.$str_about;
    // окрашиваем слова в отзыве в разные цвета
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
   
    // считаем количество гласных на странице
    $str_text=strip_tags($str_about.$str_course);
    $arr_char=["а", "е", "ё", "и", "о", "у", "ы", "э", "ю", "я","А","Е","Ё","И","О","У","Ы","Э","Ю","Я"];
    $num_char=0;
    for($i=0;$i<count($arr_char);++$i)
    {
        $num_char+=substr_count($str_text,$arr_char[$i]);
    }
    $str_gl='Количество гласных на странице равно '.$num_char;
    // считаем количество слов на странице
    $arr_text=explode(" ",$str_text);
    $num_words=count($arr_text);
    $str_words='Количество слов на странице '.$num_words;
    // считаем время от рождения до текущей даты
    $date_now=date('d-m-Y');
    $str_date_now="Текущая дата ".$date_now;
    $str_born="Дата рождения 29-12-1985";
    $d_now= new DateTime(date('Y-m-d'));
    $d_born= new DateTime("1985-12-29");
    $d_diff=date_diff($d_now,$d_born);
    $str_diff="Разность во времени ".$d_diff->format('%a')." дней";

    ?>
     <span style="color: rgb(1,2 ,2)"></span>
<body>
   <?php
        include "pages/header.php";
   ?>
    <main class="main">
        <section class="main__about">
            <div class="main__container-img">
                <img src="./assets/image/man.jpg" class="main__img" alt="sun">
            </div>
            <div class="main__container-text">
                <h2 class="title-h2">Максим Филинков</h2>
                <div class="main__text-list">
                    <p class="main__text-item">
                    <?php echo $str_about;
                    ?>
                    </p>
                    <p class="main__text-item">
                    <?php echo $str_course;
                    ?>
                    </p>
                </div>
            </div>
        </section>
        <section class="main__place-city">
            <h3 class="place-title">Достопримечательности города Саратова</h3>
            <div class="main__place-city-list">
                <div class="place-item place-item_theme_city">
                    <div class="place-item__container-img">
                        <img class="place-item__img" src="./assets/image/city_gagarin.jpg" alt="Гагарин">
                    </div>
                    <p class="place-item__text">Набережная Космонавтов</p>
                </div>
                <div class="place-item place-item_theme_city">
                    <div class="place-item__container-img">
                        <img class="place-item__img" src="./assets/image/city_bridge.jpg" alt="мост">
                    </div>
                    <p class="place-item__text">Саратовский мост</p>
                </div>
                <div class="place-item place-item_theme_city">
                    <div class="place-item__container-img">
                        <img class="place-item__img" src="./assets/image/city_memory.jpg" alt="Мемориал «Журавли»">
                    </div>
                    <p class="place-item__text">Мемориал «Журавли»</p>
                </div>
                <div class="place-item place-item_theme_city">
                    <div class="place-item__container-img">
                        <img class="place-item__img" src="./assets/image/city_avenue.jpg" alt="Проспект Кирова">
                    </div>
                    <p class="place-item__text">Проспект Кирова</p>
                </div>
            </div>
        </section>
        <section class="main__place-region">
            <h3 class="place-title">Достопримечательности Саратовской области</h3>
            <div class="main__place-region-grid">
                <div class="place-item place-item_theme_region">
                    <div class="place-item__container-img">
                        <img class="place-item__img-region" src="./assets/image/region_glade.jpg" alt="Кумысная поляна">
                    </div>
                    <p class="place-item__text">Кумысная поляна</p>
                </div>
                <div class="place-item place-item_theme_region">
                    <div class="place-item__container-img">
                        <img class="place-item__img-region" src="./assets/image/region_national-park.jpg" alt="Национальный парк">
                    </div>
                    <p class="place-item__text">Национальный парк «Хвалынский»</p>
                </div>
                <div class="place-item place-item_theme_region">
                    <div class="place-item__container-img">
                        <img class="place-item__img-region" src="./assets/image/region_lutheran-church.jpg" alt="Лютеранская кирха">
                    </div>
                    <p class="place-item__text">Лютеранская кирха в селе Зоркино</p>
                </div>
                <div class="place-item place-item_theme_region">
                    <div class="place-item__container-img">
                        <img class="place-item__img-region" src="./assets/image/region_water-mill.jpg" alt="Водяная мельница">
                    </div>
                    <p class="place-item__text">Водяная мельница в селе Лох</p>
                </div>
            </div>
        </section>
        <p class="text_answer"> 
            <?php
                    echo $str_gl.". ".$str_words.'. '.$str_born.'. '.$str_date_now.'. '.$str_diff.'.';
            ?> 
        </p>
       
    </main>
    <?php
            include "pages/footer.php";
        ?> 
    
</body>
</html>

