<?php require $_SERVER['DOCUMENT_ROOT'] . '/../src/templates/_header.php'; ?>
<main class="main">
    <section class="bio section">
        <aside class="aside">
            <div class="aside__photo"><img src="assets/img/Photo.jpg" alt="photo" width="220px"></div>
        </aside>
        <div class="content">
            <h1 class="content__title content__title_hidden">Страничка о себе</h1>
            <h2 class="content__title"><?= $name ?></h2>
            <div class="content-container">
                <p class="paragraph content__about">Работаю моушн-дизайнером, делаю анимацию. Очень нравится изучать
                    разработку, писать скрипты. Люблю прогулки, настольные игры, слушать музыку, играть в
                    компьютерные
                    игры.</p>
                <p class="paragraph content_opinion">Первое занятие очень понравилось, объяснили много сложного
                    доступным
                    языком.</p>
            </div>
        </div>
    </section>
    <section class="city section">
        <div class="city__attractions">
            <h3 class="attractions__title city__title">Достопримечательности города Оренбурга</h3>
            <ul class="attractions__list city__list">
                <li class="attractions__item city__item">
                    <img src="https://avatars.dzeninfra.ru/get-zen_doc/271828/pub_6597ad273c349263cdfc8e45_6597ae50a4afb845b1b977f0/scale_2400"
                         alt="Пешеходный мост Европа-Азия">
                    <p>Пешеходный мост Европа-Азия</p>
                </li>
                <li class="attractions__item city__item">
                    <img src="https://nashural.ru/assets/uploads/DSC04395-e1571218652996.jpg"
                         alt="Елизаветинские ворота">
                    <p>Елизаветинские ворота</p>
                </li>
                <li class="attractions__item city__item">
                    <img src="https://nashural.ru/assets/uploads/DSC04129-e1571218661880.jpg"
                         alt="Парк победы">
                    <p>Парк победы</p>
                </li>
                <li class="attractions__item city__item">
                    <img src="https://nashural.ru/assets/uploads/DSC03960-e1571218717823.jpg"
                         alt="Караван-сарай">
                    <p>Караван-сарай</p>
                </li>
            </ul>
        </div>
        <div class="city__museums">
            <h3 class="museums__title city__title">Музеи города Оренбурга</h3>
            <ul class="museums__list city__list">
                <li class="museums__item city__item">
                    <img src="https://nashural.ru/assets/uploads/DSC04415-e1571218643611.jpg"
                         alt="Музей истории Оренбурга">
                    <p>Музей истории Оренбурга</p>
                </li>
                <li class="museums__item city__item">
                    <img src="https://nashural.ru/assets/uploads/DSC04185-e1571218697353.jpg"
                         alt="Дом-музей Гагариных">
                    <p>Дом-музей Гагариных</p>
                </li>
                <li class="museums__item city__item">
                    <img src="https://nashural.ru/assets/uploads/DSC03989-e1571218729958.jpg"
                         alt="Музей изобразительного искусства">
                    <p>Музей изобразительного искусства</p>
                </li>
                <li class="museums__item city__item">
                    <img src="https://nashural.ru/assets/uploads/DSC04216-e1571218740508.jpg"
                         alt="Оренбургский губернаторский музей">
                    <p>Оренбургский губернаторский музей</p>
                </li>
            </ul>
        </div>
    </section>
</main>
<?php require $_SERVER['DOCUMENT_ROOT'] . '/../src/templates/_footer.php'; ?>
</div>
<script src="assets/js/hamburger-menu.js"></script>
</body>
</html>