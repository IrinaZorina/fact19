<?php require_once "header.php"; 

$about_text = "Родился в Магнитогорске. Закончил МГТУ им.Носова по специальности \"Прикладная информатика\". В данный момент работаю интернет-маркетологом в компании СантехУрал в Челябинске.";
$review_text = "Нравится большое количество практики";

// -- Задание 1 --
FirstToRed($about_text); // Окрашивание первого слова в тексте "обо мне" в красный цвет
WordColor($review_text); //Окрашивание каждого второго слова 

// -- Задание 2 + 3 --
$url = "index.php";
echo "Количество слов на странице: " . WordPageCount($url) . "<br>";
echo "Количество гласных букв на странице " . VowelsPageCount($url) . "<br>";

// -- Задание 4 --
echo "День рождения 10.03.1999 <br>";
echo "Дней прошло: " . DaysGone("1999-03-10");

?>
    <main>
        <section class="hero">
            <img class="hero-image" src="images/photo.jpg" width="250" height="250">
            <div class="hero-container">
                <h1>Шишиморов Владислав</h1>
                <div class="hero-container-text">
                    <div class="about-container">
                        <h2 class="about">Обо мне</h2>
                        <p class="about-text"><?= $about_text ?></p>
                    </div>
                    <div class="review-container">
                        <h2 class="review">Отзыв об уроках</h2>
                        <p class="review-text">
                            <?= $review_text ?>
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

    <?php include_once "footer.php"; ?>