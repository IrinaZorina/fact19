<?php require_once 'include/header.php' ?>
    <main>
        <div class="main">
            <div class="photo">
                <img src="assets/image/2.png" width="500">
            </div>
            <div class="container">
                <div class="about">
                    <?php
                 echo about("Здравстуйте , меня зовут Засядько Максим. Живу в городе Магнитогорск , сейчас хочу  получить новые знания. В свободное время занимаюсь баскетболом.") ;
                    echo "<br>";
                    diffTime('04.06.1998' , "" , "");
                    ?>

                </div>
                <div class="name">
                    <h1>Засядько Максим</h1>
                </div>
                <div class="lesson">
                    <?php
                    echo lesson("С 1 урока остались приятные впечатления,был доволен!");
                    ?>
                </div>
            </div>
        </div>
        <?php
        $html10 = '
        <div class="mgn-text">
            <h1> Достопримечательности города Магнитогорск </h1>
        </div>
        <div class="mgn-container">
            <div class="mgn-photo1">
                <div class="tyl">
                    <p>Тыл-фронту</p>
                </div>
                <img src="assets/image/mgn1.png" alt="Тыл-фронту" width="350" height="250">
            </div>
            <div class="mgn-photo2">
                <div class="monument">
                    <p>Памятник</p>
                </div>
                <img src="assets/image/mgn2.png" alt="Памятник" width="350" height="250">
            </div>
            <div class="mgn-photo3">
                <div class="watch">
                    <p>Солнечные часы</p>
                </div>
                <img src="assets/image/mgn3.png" alt="watch" width="350" height="250">
            </div>
            <div class="mgn-photo4">
                <div class="mountain">
                    <p>Памятник 40-летию рудника горы Магнитной</p>
                </div>
                <img src="assets/image/mgn4.png" alt="mountain" width="350" height="250">
            </div>
        </div>
        <div class="oblast-text">
            <h1>Достопримечательности Челябинской области</h1>
        </div>
        <div class="oblast-container">
            <div class="oblast-photo1">
                <img src="assets/image/taganay.png" alt="taganay" width="920" height="550">
                <p>Парк Таганай</p>
            </div>
            <div class="oblast-photo2">
                <img src="assets/image/turgoyak.jpg" alt="turgoyak" width="920" height="550">
                <p>Озеро Тургояк<p>
            </div>
            <div class="oblast-photo3">
                <img src="assets/image/Sugomak.jpg"alt="sukomak" width="920" height="550">
                <p>Сугомакская пещера</p>
            </div>
            
            <div class="oblast-photo4">
                <img src="assets/image/arkaym.jpg" alt="arkaym" width="920" height="550">
                <p>Аркаим</p>
            </div>
        </div>';
        echo $html10;
        ?>
        <div class="container-info">
            <div class="strings">
                <?php
               echo WordsCount('index.php');
                echo "<br>";
                echo "Количество гласных букв на странице :";
                echo letterCount('index.php');
                ?>
            </div>
        </div>

    </main>
<?php require_once 'include/footer.php' ?>