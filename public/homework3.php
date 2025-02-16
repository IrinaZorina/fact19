<?php

declare(strict_types = 1);

if (date('H')>=8 && date('H')<20)
{
	$cssFile = 'assets/styles/color/light.css';
	$logoFile = 'assets/img/factAcademy-logo_light.svg';
}
else
{
	$cssFile = 'assets/styles/color/dark.css';
	$logoFile = 'assets/img/factAcademy-logo_dark.svg';
}
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
			content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link
			href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
			rel="stylesheet">
	<link rel="stylesheet" href="<?=$cssFile?>">
	<link rel="stylesheet" href="assets/styles/global.css">
	<link rel="stylesheet" href="assets/styles/header.css">
	<link rel="stylesheet" href="assets/styles/homework3.css">
	<link rel="stylesheet" href="assets/styles/footer.css">
	<title>Блинов Владислав ДЗ-3</title>
</head>
<body>
<div class="root">
	<header class="header">
		<?php require '../src/templates/header.php'; ?>
	</header>
	<main class="main">
		<div class="mendeleev-container">
			<div class="mendeleev-element pink">
				<div class="mendeleev-element__symbol"><a
							href="https://ru.wikipedia.org/wiki/%D0%9B%D0%B8%D1%82%D0%B8%D0%B9"
							target="blank" title="Ссылка на Википедию">Li</a></div>
				<div class="mendeleev__numbers">
					<div class="mendeleev-element__atomic-number">3</div>
					<div class="mendeleev-element__weight">6,939</div>
				</div>
				<div class="mendeleev-element__name">Литий</div>
			</div>
			<div class="mendeleev-element pink">
				<div class="mendeleev-element__symbol"><a
							href="https://ru.wikipedia.org/wiki/%D0%91%D0%B5%D1%80%D0%B8%D0%BB%D0%BB%D0%B8%D0%B9"
							target="blank" title="Ссылка на Википедию">Be</a></div>
				<div class="mendeleev__numbers">
					<div class="mendeleev-element__atomic-number">4</div>
					<div class="mendeleev-element__weight">9,0122</div>
				</div>
				<div class="mendeleev-element__name">Бериллий</div>
			</div>
			<div class="mendeleev-element yellow">
				<div class="mendeleev-element__symbol"><a
							href="https://ru.wikipedia.org/wiki/%D0%91%D0%BE%D1%80_(%D1%8D%D0%BB%D0%B5%D0%BC%D0%B5%D0%BD%D1%82)"
							target="blank" title="Ссылка на Википедию">B</a></div>
				<div class="mendeleev__numbers">
					<div class="mendeleev-element__atomic-number">5</div>
					<div class="mendeleev-element__weight">10,811</div>
				</div>
				<div class="mendeleev-element__name">Бор</div>
			</div>
			<div class="mendeleev-element yellow">
				<div class="mendeleev-element__symbol"><a
							href="https://ru.wikipedia.org/wiki/%D0%A3%D0%B3%D0%BB%D0%B5%D1%80%D0%BE%D0%B4"
							target="blank" title="Ссылка на Википедию">C</a></div>
				<div class="mendeleev__numbers">
					<div class="mendeleev-element__atomic-number">6</div>
					<div class="mendeleev-element__weight">12,01115</div>
				</div>
				<div class="mendeleev-element__name">Углерод</div>
			</div>
			<div class="mendeleev-element pink">
				<div class="mendeleev-element__symbol"><a
							href="https://ru.wikipedia.org/wiki/%D0%9D%D0%B0%D1%82%D1%80%D0%B8%D0%B9"
							target="blank" title="Ссылка на Википедию">Na</a></div>
				<div class="mendeleev__numbers">
					<div class="mendeleev-element__atomic-number">11</div>
					<div class="mendeleev-element__weight">22,9896</div>
				</div>
				<div class="mendeleev-element__name">Натрий</div>
			</div>
			<div class="mendeleev-element pink">
				<div class="mendeleev-element__symbol"><a
							href="https://ru.wikipedia.org/wiki/%D0%9C%D0%B0%D0%B3%D0%BD%D0%B8%D0%B9"
							target="blank" title="Ссылка на Википедию">Mg</a></div>
				<div class="mendeleev__numbers">
					<div class="mendeleev-element__atomic-number">12</div>
					<div class="mendeleev-element__weight">24,312</div>
				</div>
				<div class="mendeleev-element__name">Магний</div>
			</div>
			<div class="mendeleev-element yellow">
				<div class="mendeleev-element__symbol"><a
							href="https://ru.wikipedia.org/wiki/%D0%90%D0%BB%D1%8E%D0%BC%D0%B8%D0%BD%D0%B8%D0%B9"
							target="blank" title="Ссылка на Википедию">Al</a></div>
				<div class="mendeleev__numbers">
					<div class="mendeleev-element__atomic-number">13</div>
					<div class="mendeleev-element__weight">26,9815</div>
				</div>
				<div class="mendeleev-element__name">Алюминий</div>
			</div>
			<div class="mendeleev-element yellow">
				<div class="mendeleev-element__symbol"><a
							href="https://ru.wikipedia.org/wiki/%D0%9A%D1%80%D0%B5%D0%BC%D0%BD%D0%B8%D0%B9"
							target="blank" title="Ссылка на Википедию">B</a></div>
				<div class="mendeleev__numbers">
					<div class="mendeleev-element__atomic-number">14</div>
					<div class="mendeleev-element__weight">28,086</div>
				</div>
				<div class="mendeleev-element__name">Кремний</div>
			</div>
			<div class=" mendeleev-element pink">
				<div class="mendeleev-element__symbol"><a
							href="https://ru.wikipedia.org/wiki/%D0%9A%D0%B0%D0%BB%D0%B8%D0%B9"
							target="blank" title="Ссылка на Википедию">K</a></div>
				<div class="mendeleev__numbers">
					<div class="mendeleev-element__atomic-number">19</div>
					<div class="mendeleev-element__weight">39,102</div>
				</div>
				<div class="mendeleev-element__name">Калий</div>
			</div>
			<div class="mendeleev-element pink">
				<div class="mendeleev-element__symbol"><a
							href="https://ru.wikipedia.org/wiki/%D0%9A%D0%B0%D0%BB%D1%8C%D1%86%D0%B8%D0%B9"
							target="blank" title="Ссылка на Википедию">Ca</a></div>
				<div class="mendeleev__numbers">
					<div class="mendeleev-element__atomic-number">20</div>
					<div class="mendeleev-element__weight">40,08</div>
				</div>
				<div class="mendeleev-element__name">Кальций</div>
			</div>
			<div class="mendeleev-element blue">
				<div class="mendeleev-element__symbol"><a
							href="https://ru.wikipedia.org/wiki/%D0%A1%D0%BA%D0%B0%D0%BD%D0%B4%D0%B8%D0%B9"
							target="blank" title="Ссылка на Википедию">Sc</a></div>
				<div class="mendeleev__numbers">
					<div class="mendeleev-element__atomic-number">21</div>
					<div class="mendeleev-element__weight">22,956</div>
				</div>
				<div class="mendeleev-element__name">Скандий</div>
			</div>
			<div class="mendeleev-element blue">
				<div class="mendeleev-element__symbol"><a
							href="https://ru.wikipedia.org/wiki/%D0%A2%D0%B8%D1%82%D0%B0%D0%BD_(%D1%8D%D0%BB%D0%B5%D0%BC%D0%B5%D0%BD%D1%82)"
							target="blank" title="Ссылка на Википедию">B</a></div>
				<div class="mendeleev__numbers">
					<div class="mendeleev-element__atomic-number">22</div>
					<div class="mendeleev-element__weight">47,90</div>
				</div>
				<div class="mendeleev-element__name">Титан</div>
			</div>
			<div class=" mendeleev-element blue">
				<div class="mendeleev-element__symbol"><a
							href="https://ru.wikipedia.org/wiki/%D0%9C%D0%B5%D0%B4%D1%8C"
							target="blank" title="Ссылка на Википедию">Cu</a></div>
				<div class="mendeleev__numbers">
					<div class="mendeleev-element__atomic-number">29</div>
					<div class="mendeleev-element__weight">63,546</div>
				</div>
				<div class="mendeleev-element__name">Медь</div>
			</div>
			<div class="mendeleev-element blue">
				<div class="mendeleev-element__symbol"><a
							href="https://ru.wikipedia.org/wiki/%D0%A6%D0%B8%D0%BD%D0%BA"
							target="blank" title="Ссылка на Википедию">Zn</a></div>
				<div class="mendeleev__numbers">
					<div class="mendeleev-element__atomic-number">30</div>
					<div class="mendeleev-element__weight">65,37</div>
				</div>
				<div class="mendeleev-element__name">Цинк</div>
			</div>
			<div class="mendeleev-element yellow">
				<div class="mendeleev-element__symbol"><a
							href="https://ru.wikipedia.org/wiki/%D0%93%D0%B0%D0%BB%D0%BB%D0%B8%D0%B9"
							target="blank" title="Ссылка на Википедию">Ga</a></div>
				<div class="mendeleev__numbers">
					<div class="mendeleev-element__atomic-number">31</div>
					<div class="mendeleev-element__weight">69,72</div>
				</div>
				<div class="mendeleev-element__name">Галлий</div>
			</div>
			<div class="mendeleev-element yellow">
				<div class="mendeleev-element__symbol"><a
							href="https://ru.wikipedia.org/wiki/%D0%93%D0%B5%D1%80%D0%BC%D0%B0%D0%BD%D0%B8%D0%B9"
							target="blank" title="Ссылка на Википедию">Ge</a></div>
				<div class="mendeleev__numbers">
					<div class="mendeleev-element__atomic-number">32</div>
					<div class="mendeleev-element__weight">72,59</div>
				</div>
				<div class="mendeleev-element__name">Германий</div>
			</div>
		</div>
	</main>
	<footer class="footer">
		<?php require '../src/templates/footer.php'; ?>
	</footer>
</div>
<script src="assets/js/hamburger-menu.js"></script>
</body>
</html>