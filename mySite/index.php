<?php
    session_unset();
    if(isset($_POST['color_page']))
    {
        setcookie("color_page",$_POST['color_page'],time()+3600*24*14);
    }
    $user_color_page='darkgray';
    if(isset($_COOKIE["color_page"]))
    {
        $user_color_page=$_COOKIE["color_page"];
    }
?>
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
        include_once "./pages/function_index.php";
        $str_color_page='';
        $hour=date('H');
       theme_page($hour);

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
    $str_about=rand_color($str_about);
    // окрашиваем слова в отзыве в разные цвета
    world_color($str_course);
   
    // считаем количество гласных на странице
  $str_other="Максим Филинков Достопримечательности города Саратова Набережная Космонавтов Саратовский мост Мемориал «Журавли» Проспект Кирова Достопримечательности Саратовской области Кумысная поляна Национальный парк «Хвалынский» Лютеранская кирха в селе Зоркино Водяная мельница в селе Лох";
    $str_text=strip_tags($str_about.$str_course);
    $str_text.=$str_other;
    $str_gl='Количество гласных на странице равно '.vowel_let($str_text);
    // считаем количество слов на странице
    $arr_text=explode(" ",$str_text);
    $num_words=count($arr_text);
    $str_words='Количество слов на странице '.num_worlds($str_text);
    // считаем время от рождения до текущей даты
    $date_now=date('d-m-Y');
    $str_date_now="Текущая дата ".$date_now;
    $str_born="Дата рождения 29-12-1985";
    $str_diff="Разность во времени ".born_now()." дней";

    ?>
     <span style="color: rgb(1,2,2)"></span>
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
        <div class="block_get_post">
        <h3 class="title">Выберите цвет фона</h3>
        </div>
        <form method="POST" id="form_index" action="index.php">
            <div class="block_get_post">
                <select name="color_page" id="" size="">
                    <option value="rgb(156, 135, 135)">Красный оттенок серого</option>
                    <option value="rgb(142, 148, 174)">Синий оттенок серого</option>
                    <option value="rgb(135, 144, 124)">Зеленый оттенок серого</option>
                </select>
            </div>
            <div class="block_get_post">
                <button type="submit" form="form_index">Выбрать цвет</button>
            </div>
        </form>
        <?php
         if(isset($_POST['color_page']))
         {
             $user_color_page=$_POST['color_page'];
         }
    echo '<style>
        html, body{
            background-color:'.$user_color_page.';
            }
    </style>';
    ?>
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

