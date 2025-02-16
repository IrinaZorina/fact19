<?php
date_default_timezone_set('Asia/Yekaterinburg');
$hour = date('H');
if ($hour >= 8 && $hour < 20) {
    $theme = 'light-theme';
} else {
    $theme = 'dark-theme';
}
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viwport"
          content="width=devise-width, user-scalable=no, intial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Title</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<header>
    <div class="conteiner">
        <div class="ssylka1">Тема1</div>
        <div class="ssylka2">Тема2</div>
    </div>
</header>
<main>

    <section>
        <div class="section">
            <div class="photo"><img class="myphoto" src="assets/image/myphoto.jpg"></div>
            <div class="info">
                <div class="section1"><p class="name">Танцырев Никита Романович</p></div>
                <div class="info2">
                    <div class="section2"><p class="bio">Я живу в городе Златоусте. По профессии я учитель математики и работаю в школе ☺️. Мне нравится то, чем я занимаюсь. Во- первых я люблю свой предмет, во-вторых мне нравится делиться своими знаниями с учениками, смотреть как они каждый день постигают что-то новое. В данный момент я осваиваю удаленную профессию Web разработка. С удовольствием погружаюсь в мир интернета и новых знаний. Люблю учиться. Хочу узнавать многогранный мир и творить. Дружу со спортом - всем сердцем обожаю хоккей 🥅 🏒 Давайте дружить ☺</p></div>
                    <div class="section3"><p class="bio">Мне всё нравится. На каждом занятии узнаю много нового. Объясняют всё очень подробно и интересно</p></div>
                </div>
            </div>
        </div>
    </section>
</main>
<footer>
    <p class="name">Достопримечательности города Златоуста</p>
    <div class="information">
        <div class="dostoprim1"><p class="nazvanie">Скульптура "Крылатый конь"</p><img class="mesta" src="assets/image/kon.jpg"></div>
        <div class="dostoprim2"><p class="nazvanie">Гора "Таганай"</p><img class="mesta" src="assets/image/taganay.jpg"></div>
        <div class="dostoprim3"><p class="nazvanie">Памятник П.П.Аносову</p><img class="mesta" src="assets/image/anosov.jpg"></div>
        <div class="dostoprim4"><p class="nazvanie">Златоустовский Театр</p><img class="mesta" src="assets/image/omnibus.jpg"></div>
    </div>
    <p class="name">Достопримечательности Челябинсокй области</p>
    <div class="information2">
        <div class="dostoprim5"><p class="nazvanie">Музей каслинского литья</p><img class="chelyb" src="assets/image/Muzej.jpg"></div>
        <div class="dostoprim6"><p class="nazvanie">Каолиновый карьер</p><img class="chelyb" src="assets/image/karer.jpg"></div>
    </div>
    <div class="information2">
        <div class="dostoprim7"><p class="nazvanie">Озеро Тургояк</p><img class="chelyb" src="assets/image/Turgoyak.jpg"></div>
        <div class="dostoprim8"><p class="nazvanie">Национальный парк "Зюраткуль"</p><img class="chelyb" src="assets/image/Zyuratkul.jpg"></div>
    </div>


</footer>
</body>
</html>
