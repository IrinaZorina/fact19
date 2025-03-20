<?php
$title = "строки";
include_once 'header.php';
$birthday = isset($_POST['birthday']) ? $_POST['birthday'] : '';
$currentDate = date('d.m.Y');
$daysDifference = '';

if ($birthday) {
    try {
        $birthdayDate = DateTime::createFromFormat('d.m.Y', $birthday);
        $currentDateObj = DateTime::createFromFormat('d.m.Y', $currentDate);

        if ($birthdayDate && $currentDateObj) {
            $interval = $currentDateObj->diff($birthdayDate);
            $daysDifference = $interval->days;
        } else {
            $daysDifference = "Ошибка: Неверный формат даты.";
        }
    } catch (Exception $e) {
        $daysDifference = "Ошибка: " . $e->getMessage();
    }
}

$phrase = "Добрый день! Хотел бы рассказать несколько слов о себе.";
$colphrase = "<span style='color: blue;'>$phrase</span>";

$feedback = "Хотел бы оставить небольшой отзыв по пройденному материалу, на текущий момент. Вводный курс я прошел и вопросов 
практически не возникало. Т.к. с HTMl я сталкивался еще в школе, основные проблемы это синтаксис и ошибки связанные с этим, но в целом
 все ясно. После просмотра записи встречи, тоже особых вопросов нет, кроме ощущения выполнения задания с помощью 'костылей'. В общем
 перед началом курса было страшней)";

$words = explode(" ", $feedback);
$col1 = "blue";
$col2 = "green";

foreach ($words as $arr => $word) {
    if ($arr % 2 == 0) {
        $words[$arr] = "<span style='color: $col1;'>$word</span>";
    } else {
        $words[$arr] = "<span style='color: $col2;'>$word</span>";
    }
}
$colfeedback = implode(" ", $words);
function countVowels($text)
{
    $textWithoutTags = strip_tags($text);
    preg_match_all('/[аеёиоуыэюя]/iu', $textWithoutTags, $matches);
    return count($matches[0]);
}

function countWords($text)
{
    $textWithoutTags = strip_tags($text);
    return str_word_count($textWithoutTags, 0, 'АаБбВвГгДдЕеЁёЖжЗзИиЙйКкЛлМмНнОоПпРрСсТтУуФфХхЦцЧчШшЩщЪъЫыЬьЭэЮюЯя');
}
ob_start();
?>
<body>
<main>
    <!-- Форма для ввода даты рождения -->
    <div style="text-align: center; margin-top: 20px;">
        <form method="POST" action="">
            <label for="birthday">Введите дату рождения (дд.мм.гггг):</label>
            <input type="text" id="birthday" name="birthday" placeholder="дд.мм.гггг" value="<?php echo htmlspecialchars($birthday); ?>">
            <button type="submit">Рассчитать</button>
        </form>
        <?php if ($birthday): ?>
            <p>Текущая дата: <?php echo $currentDate; ?></p>
            <p>Разница в днях: <?php echo $daysDifference; ?></p>
        <?php endif; ?>
    </div>

    <div class="biogrid">
        <div class="foto">
            <img src="assets/image/foto.jpeg" width="100%" height="100%" alt="Я">
        </div>

        <div class="bio"><H1>Константин Мосунов</H1></div>
        <div class="persinfo">
            <?php echo $colphrase; ?>
            Мне 30 лет и являюсь студентом академии "Факт". Также имею высшее образование по профилю
            "Производственный менеджмент". Долгое время владел и руководил небольшой компанией, занимающейся
            обслуживанием частной недвижимости.
            У меня 3-ое детей и счастливая семья!
        </div>
        <div class="feedback">
            <?php echo $colfeedback; ?>
        </div>
    </div>
    <h1>Достопримечательности Москвы</h1>
    <div class="attract">
        <div class="fontan">
            <br>
            <img src="assets/image/fontan.jpg" alt="Фонтан 'Дружбы народов'"
                 style="max-width: 90%; max-height: 80%">
            <p>Фонтан "Дружбы Народов" на ВДНХ</p>
        </div>
        <div class="sobor">
            <br>
            <img src="assets/image/sobor.jpg" alt="Собор Василия Блаженного"
                 style="max-width: 90%; max-height: 80%; align-items: center">
            <p>Собор Василия Блаженного</p>
        </div>
        <div class="tsar">
            <br>
            <img src=" assets/image/tsar2.jpg" alt="Царь-пушка"
                 style="width: 90%; max-height: 80%">
            <p> Царь-Пушка</p>
        </div>
        <div class="kremlin">
            <br>
            <img src=" assets/image/kremlin.jpg" alt="Московский Кремль"
                 style="max-width: 90%; max-height: 80%">
            <p>Московский Кремль</p>
        </div>
    </div>
    <h1> Достопримечательности Московского региона</h1>
    <div class="attract1">
        <div class="ierus">
            <br>
            <img src=" assets/image/ierus1.jpg" alt="Н-И монастырь"
                 style="max-width: 90%; max-height: 80%">
            <p> Ново-Иерусалимский монастырь</p>
        </div>
        <div class="prioksk">
            <br>
            <img src=" assets/image/prioksk1.jpg" alt="Приокский заповедник"
                 style="max-width: 90%; max-height: 80%">
            <p> Приокско-Террасный заповедник</p>
        </div>
        <div style="width: 100%; height: 30px"></div>
        <div class="zarajsk">
            <br>
            <img src="assets/image/zarajsk1.jpg" alt="Зарайский Кремль"
                 style="max-width: 90%; max-height: 80%">
            <p> Зарайский кремль</p>
        </div>
        <div class="borodino">
            <br>
            <img src="assets/image/borodino1.jpg" alt="Музей Бородино"
                 style="max-width: 90%; max-height: 80%">
            <p> Музей Бородино</p>
        </div>
    </div>
</main>

<?php
$pageContent = ob_get_clean();
$vowelCount = countVowels($pageContent);
$wordCount = countWords($pageContent);
echo $pageContent;
echo "<div style='text-align: center; margin-top: 20px;'>
        Количество гласных букв на странице: $vowelCount<br>
        Количество слов на странице: $wordCount
      </div>";
?>

</div>
<?php
include_once 'footer.php';
?>
</body>
</html>