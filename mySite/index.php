
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
            </style>';
        }
    ?>
</head>

<body>
    <header class="header"> 
       <nav class="nav">
            <div class="nav__logo">
            <?php
                $hour=date('H');
                if($hour>=8 && $hour<20)
                {
                    echo '
                        <img src="./assets/image/free-png.ru-451.png" class="nav_logo-img" alt="sun">
                    ';
            
                }
                else
                {
                    echo '<img src="./assets/image/free-png.ru-173.png" class="nav_logo-img" alt="moon">';
                }
        ?>      
            </div>
            <div class="nav__item">
                <a href="./med.html" class="nav__link">Тема 1</a>
            </div>
            <div class="nav__item">
                <a href="#" class="nav__link">Тема 2</a>
            </div>
            <div class="nav__item">
                <a href="#" class="nav__link">Тема 3</a>
            </div>
       </nav>
       <div class="header__line">
       </div>
      
    </header> 
    <main class="main">
        <section class="main__about">
            <div class="main__container-img">
                <img src="./assets/image/man.jpg" class="main__img" alt="sun">
            </div>
            <div class="main__container-text">
                <h2 class="title-h2">Максим Филинков</h2>
                <div class="main__text-list">
                    <p class="main__text-item">
                        Приветствую вас на своем сайте! Этот сайт создан для изучения веб-разработки на курсе ФАКТ Академии.
                        Я работаю в техподдержке крупной IT компании, и хочу повысить свои компетенции, чтобы попробовать себя в разработке.
                        В свободное время люблю заниматься спортом, слушать аудио книги и изучать что-то новое!
                    </p>
                    <p class="main__text-item">
                        Я выбрал курс от Факт Академии, потому что тут не только изучается веб-разработка, но так же и "1C-Битрикс".
                        Так же большим преимуществом для меня является подготовка к экзамену для получения сертификата от "1C-Битрикс".
                        Надеюсь, что на этом курсе я освою все необходимые навыки и знания и успешно сдам экзамен.
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
       
    </main>
</body>
</html>

