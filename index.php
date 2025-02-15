<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <?php
        if (8 > date("H") && date("H") >= 20) {
            echo "<link rel=\"stylesheet\" href=\"styles/dark.css\">";
        }
    ?>
</head>
<body>
    <header>
        <nav class="navigation">
            <ul class="navigation-list">
                <li class="navigation-list-item">
                    <a class="navigation-list-item-link" href="mendeleev/mendeleev.html">Тема 1</a>
                </li>
                <li class="navigation-list-item">
                    <a class="navigation-list-item-link" href="">Тема 2</a>
                </li>
                <li class="navigation-list-item">
                    <a class="navigation-list-item-link" href="">Тема 3</a>
                </li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="hero">
            <img class="hero-image" src="images/photo.jpg" width="250" height="250">
            <div class="hero-container">
                <h1>Шишиморов Владислав</h1>
                <div class="hero-container-text">
                    <div class="about-container">
                        <h2 class="about">Обо мне</h2>
                        <p class="about-text">Родился в Магнитогорске. Закончил МГТУ им.Носова по специальности "Прикладная информатика". В данный момент работаю интернет-маркетологом в компании СантехУрал в Челябинске.
                        </p>
                    </div>
                    <div class="review-container">
                        <h2 class="review">Отзыв о 1 уроке</h2>
                        <p class="review-text">
                            Пока сказать сложно, но как будто не хватает структурности урока
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="pets">
            <h2>Мои домашние животные</h2>
            <div class="pets-container">
                <figure class="pet">
                    <img class="pet-image" src="images/dog1.jpg" alt="Фотография Дарона" width="250">
                    <figcaption><strong>Дарон</strong>, русско-европейская лайка во времена своей маленьковости</figcaption>
                </figure>
                <figure class="pet">
                    <img class="pet-image" src="images/dog2.jpg" alt="Фотография Люськи" width="250">
                    <figcaption><strong>Люська</strong> (или "Фига" по версии отца). Любит сбегать. Энергия = бесконечность</figcaption>
                </figure>
                <figure class="pet">
                    <img class="pet-image" src="images/cat1.jpg" alt="Фотография Финика" width="250">
                    <figcaption><strong>Финик</strong>. По прозвищу "Дачник". Приехал в деревню из города. Ленивый</figcaption>
                </figure>
                <figure class="pet">
                    <img class="pet-image" src="images/cat2.jpg" alt="Фотография Фроськи" width="250">
                    <figcaption><strong>Фрося</strong>. Периодически задирает Финика и притворяется мертвой, если не дать молока</figcaption>
                </figure>
            </div>
        </section>
        <section class="memes">
            <h2>Мемы про Web-разработку</h2>
            <div class="memes-container">
                <figure class="mem">
                    <img class="mem-image" src="images/mem1.jpg" alt="Мем про выбор языков для разработки сайта">
                    <figcaption>Вот это мы называем АДАПТИВНАЯ верстка</figcaption>
                </figure>
                <figure class="mem">
                    <img class="mem-image" src="images/mem2.jpg" alt="Мем про то как ждут разработчики когда их заменит ИИ">
                    <figcaption>👍— жду когда ИИ меня заменит</figcaption>
                </figure>
                <figure class="mem">
                    <img class="mem-image" src="images/mem3.jpg" alt="Мем про разработчиков, которые недовольны кодом предыдущего разработчика">
                    <figcaption>Под портами, кстати, имеются в виду LAN-порты</figcaption>
                </figure>
                <figure class="mem">
                    <img class="mem-image" src="images/mem5.jpg" alt="Мем про GitHub">
                    <figcaption>Подумайте над этим перед сном</figcaption>
                </figure>
            </div>
        </section>
    </main>
    </body>
</html>