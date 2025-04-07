<?php
    include 'ins/header.php';
?>
    <div class="myContent">
        <img class="myFace" src="assets/img/myFace.jpg" alt="Фото Дины">
        <h1 class="myName">Дина Шамситдинова</h1>
        <div class="text1">
            Всем привет, меня зовут Дина. В данный момент я учусь в колледже на веб-разработке.
            Я очень люблю готовить, ходить в спортзал и смотреть сериалы.
        </div>
        <div class="text2">
        <?php
        $text = 'На данный курс записалась, так как есть материалы которые не входят в программу
                обучения в колледже и начать работать по специальности.<b> Большие надежды на курс!</b>';
        $words = explode(' ', $text);
        $coloredText = '';
        foreach ($words as $index => $word) {
            $class = ($index % 2 == 0) ? 'noch' : 'ch';
            $coloredText .= '<span class="' . $class . '">' . $word . '</span> ';
        }
        echo $coloredText;
        ?>

        </div>
    </div>
    <h2>Достопримечательности Баймака</h2>
    <div class="sightsСity">
        <div class="itemSightsСity">
            <img src="assets/img/square.jpg">
            <p>Центральная площадь<br> «Ветер перемен»</p>
        </div>
        <div class="itemSightsСity">
            <img src="assets/img/memorial.jpg">
            <p>Мемориал Великой Отечественной войны</p>
        </div>
        <div class="itemSightsСity">
            <img src="assets/img/mountain.jpg">
            <p>Чёрная шлаковая гора</p>
        </div>
        <div class="itemSightsСity">
            <img src="assets/img/mosque.jpg">
            <p>Баймакская соборная<br> мечеть</p>
        </div>
    </div>

    <h2>Достопримечательности Башкортостана</h2>
    <div class="sightsRepublic">
        <div class="itemSightsRepublic">
            <img src="assets/img/montain2.jpg">
            <p>Гора Иремель</p>
        </div>
        <div class="itemSightsRepublic">
            <img src="assets/img/mosque2.jpg">
            <p>Мечеть «Ляля-Тюльпан» в Уфе.</p>
        </div>
    </div>
    <div class="sightsRepublic">
        <div class="itemSightsRepublic">
            <img src="assets/img/monument.jpg">
            <p>Памятник Салавату Юлаеву в Уфе.</p>
        </div>
        <div class="itemSightsRepublic">
            <img src="assets/img/waterfall.jpg">
            <p>Водопад Гадельша</p>
        </div>
    </div>
</body>
<?php
include 'ins/footer.php';
?>
</html>