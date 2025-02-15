document.querySelector('.menu__mobile-button').addEventListener('click', function () {
	const menuMobile = document.querySelector('.menu__list-mobile');
	const menuIcon = document.querySelector('.menu-icon');
	const closeIcon = document.querySelector('.close-icon');

	menuMobile.classList.toggle('active');
	if (menuMobile.classList.contains('active')) {
		menuIcon.style.display = 'none';
		closeIcon.style.display = 'block';
	} else {
		menuIcon.style.display = 'block';
		closeIcon.style.display = 'none';
	}
});