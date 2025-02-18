<?php
    date_default_timezone_set("Europe/Moscow");
    $time = date(format: 'H');

    if ($time >= 12 && $time < 20) {
        $css = "styles/work1.css";
    } else {
        $css = "styles/work1dark.css";
    }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php print $css; ?>">
	<title>задание1</title>
</head>
<body>
	<h1>Обучение Факт Группа 19</h1>
		<div class="header">
			<div class="theme1"><a href="html/barrii.html">тема1</a></div>
			<div class="theme2">тема2</div>
			<div>тема3</div>
		</div>
		<div class="grid1">
			<div class="div1"></div>
			<div class="div2">Дьяконов Дмитрий Сергевич</div>
			<div class="div3">Образование Средне-специальное
				Электромонтер по ремонту электрооборудования.
				В данный момент работаю Инженером сервисного
				обслуживания интернет провайдера.
				Пытаюсь развиваться в различных
				направлениях таких как: СКУД, виденаблюдения, ВОЛС.</div>
			<div class="div4">Учиться, учится и учится.</div>
		</div>
	<h2 class="text1">Достопримечательности Краснодара</h1>
		<div class="flex">
			<figure>
				<div class="image1"></div>
				<figcaption class="text2">Триумфальная арка</figcaption>
			</figure>
			<figure>
				<div class="image2"></div>
				<figcaption class="text2">Парк Галицкого</figcaption>
			</figure>
			<figure>
				<div class="image3"></div>
				<figcaption class="text2">Чистякова роща</figcaption>
			</figure>
			<figure>
				<div class="image4"></div>
				<figcaption class="text2">Казаки пишут письмо Султану</figcaption>
			</figure>
		</div>
	<h3 class="text1">Достопримечательности Краснодарского края</h2>
		<div class="grid">
			<figure>
				<div class="image5"></div>
				<figcaption class="text3">Абрау Дюрсо</figcaption>
			</figure>
			<figure>
				<div class="image6"></div>
				<figcaption class="text3">Черное море</figcaption>
			</figure>
			<figure>
				<div class="image7"></div>
				<figcaption class="text3">Олимпийский парк</figcaption>
			</figure>
			<figure>
				<div class="image8"></div>
				<figcaption class="text3">Роза хутор</figcaption>
			</figure>
		</div>
</body>
</html>
