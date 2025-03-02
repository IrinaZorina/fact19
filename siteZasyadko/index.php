<?php require_once 'include/header.php'; ?>       <!--header-->
<section class="about">
    <p class="about2">О себе</p>
    <div class="avatar">👨‍💻</div>
    <div class="one"><img src="assets/image/2.png" width="500px" height="500px"></div>
    <?php
    $text_about = "Здравствуйте! Меня зовут Засядько Максим, мне 26 лет.Хочу поменять профессию.<br> Работал во множестве
        сферах, мой интерес встал на этом так как часто увлекался пк и многим что связанно с ним.<br>
        Я работаю в сфере продаж. Я менеджер по продажам. Хочу научиться программировать и
        создавать что-то. Ещё мне нравится проводить время на корде и играть в Баскетбол";
    $arr = explode(" ", $text_about);
    $first = '<span style="color:red">' . $arr[0] . '</span>';
    $text_about = str_replace($arr[0], $first, $text_about);
    echo $text_about;
    echo '<br>';
    ?>

    <?php
    $text_lesson = "С 1 урока был под впечатлением , все понравилось! ";
    $arr_lesson = explode(" ", $text_lesson);
    $style_text = "";
    foreach ($arr_lesson as $index_word => $word) {
        if (($index_word + 1) % 2 === 0) {
            $style_text .= "<span style='color: #002aff;'>" . $word . " " . "</span>";
        } else {
            $style_text .= "<span style='color: #ff0000;'>" . $word . " " . "</span>";
        }
    }
    echo $style_text;
    echo '<br>';
    ?>

    <?php
    $birthday = DateTime::createFromFormat("d.m.Y", "04.06.1998");
    $now = new DateTime('now');
    $interval = $now->diff($birthday);
    $diff = $interval->days;
    echo "Я родился: " . $birthday->format("d.m.Y") . "<br>" .
        "Сегодня: " . $now->format("d.m.Y") . "<br>" .
        "Разница: " . $diff;
    ?>
</section>
<?php
$nameAttractions = '<h2>Достопримечательности Магнитогорска </h2>';
echo $nameAttractions;
?>
<div class="box1">
    <img src="assets/image/mgn1.png" width="500px">
    <img src="assets/image/mgn2.png" width="500px">
    <img src="assets/image/mgn3.png" width="500px">
    <img src="assets/image/mgn4.png" width="500px">
</div>
<h2 class="sight2">Достопримечательности Челябинской Области </h2>
<div class="box2">
    <div class="photo1">
        <img src="assets/image/chel.png" width="500px" height="450">
    </div>
    <div class="photo2">
        <img src="assets/image/chel2.png" width="500px" height="450" alt="«Метеоритное» озеро Сунгур">
    </div>
    <div class="photo3">
        <img src="assets/image/chel3.png" width="500px" alt="«Марсианские» терриконы Копейска">
    </div>
    <div class="photo4">
        <img src="assets/image/chel4.png" width="500px" height="375"
             alt="Андреевский каменный карьер - рукотворный памятник природы">
    </div>
</div>
<?php
$fullText = $nameAttractions . $text_about . $text_lesson;
$result = strip_tags($fullText);
$words = preg_split('/\s+/', trim($result));
$wordCount = count($words);
echo "Общее количество слов на странице index.php: " . $wordCount;
echo "<br>";
$count = preg_match_all('/[аеёиоуэюяАЕЁИОУЭЮЯ]/u', $fullText);
echo "Количество гласных букв: " . $count;
?>
<?php require_once 'include/footer.php'; ?>     <!--импортирование footer.-->
