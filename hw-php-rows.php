<?php
$title = "строки";
include_once 'header.php';

// Обработка ввода даты рождения
$birthday = isset($_POST['birthday']) ? $_POST['birthday'] : '';
$currentDate = date('d.m.Y'); // Текущая дата
$daysDifference = '';

if ($birthday) {
    try {
        // Преобразуем даты в объекты DateTime
        $birthdayDate = DateTime::createFromFormat('d.m.Y', $birthday);
        $currentDateObj = DateTime::createFromFormat('d.m.Y', $currentDate);

        if ($birthdayDate && $currentDateObj) {
            // Вычисляем разницу между датами
            $interval = $currentDateObj->diff($birthdayDate);
            $daysDifference = $interval->days; // Количество дней
        } else {
            $daysDifference = "Ошибка: Неверный формат даты.";
        }
    } catch (Exception $e) {
        $daysDifference = "Ошибка: " . $e->getMessage();
    }
}

$phrase = "Добрый день! Хотел бы рассказать несколько слов о себе.";
$colphrase = "<span style='color: blue;'>$phrase</span>";

$feedback = "Обучение было структурированным, понятным и, что самое главное, максимально практическим. С самого начала мы погрузились в реальные задачи и это радует";

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

// Функция для подсчета гласных букв
function countVowels($text)
{
    // Удаляем HTML-теги, чтобы оставить только текст
    $textWithoutTags = strip_tags($text);
    // Ищем все гласные буквы (русские и английские)
    preg_match_all('/[аеёиоуыэюяaeiou]/iu', $textWithoutTags, $matches);
    // Возвращаем количество найденных гласных
    return count($matches[0]);
}

// Функция для подсчета слов
function countWords($text)
{
    // Удаляем HTML-теги, чтобы оставить только текст
    $textWithoutTags = strip_tags($text);
    // Подсчитываем количество слов
    return str_word_count($textWithoutTags, 0, 'АаБбВвГгДдЕеЁёЖжЗзИиЙйКкЛлМмНнОоПпРрСсТтУуФфХхЦцЧчШшЩщЪъЫыЬьЭэЮюЯя');
}

// Включаем буферизацию вывода для захвата содержимого страницы
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
            <img src="assets/image/me.PNG" width="100%" height="100%" alt="Я">
        </div>

        <div class="bio"><H1>Проичкин Александр</H1></div>
        <div class="persinfo">
            <?php echo $colphrase; ?>
            Я — Александр Проничкин, выпускник Московского авиационного института (МАИ) по специальности "Информатика и вычислительная техника".
            Я всегда стремлюсь к саморазвитию и активно слежу за новыми тенденциями в IT-сфере. Сегодня я продолжаю развиваться как специалист, готовый решать сложные задачи и вносить вклад в развитие технологий.
        </div>
        <div class="feedback">
            <?php echo $colfeedback; ?>
        </div>
    </div>
    <h1>Достопримечательности Москвы</h1>
    <div class="attract">
        <div class="kolom">
            <br>
            <img src="assets/image/kolom.png" alt="Музей-заповедник "Коломенское'"
            style="max-width: 90%; max-height: 80%">
            <p>Музей-заповедник "Коломенское"</p>
        </div>
        <div class="arbat">
            <br>
            <img src="assets/image/arbat.jpg" alt="Старый Арбат"
                 style="max-width: 90%; max-height: 80%; align-items: center">
            <p>Старый Арбат</p>
        </div>
        <div class="big">
            <br>
            <img src=" assets/image/big.jpg" alt="Большой театр"
                 style="width: 90%; max-height: 80%">
            <p>Большой театр</p>
        </div>
        <div class="tele">
            <br>
            <img src=" assets/image/tele.jpg" alt="Останкинская Телебашня"
                 style="max-width: 90%; max-height: 80%">
            <p>Останкинская Телебашня</p>
        </div>
    </div>
    <h1> Достопримечательности Московского региона</h1>
    <div class="attract1">
        <div class="lavra">
            <br>
            <img src=" assets/image/lavraa.jpg" alt="Троице-Сергиева Лавра"
                 style="max-width: 90%; max-height: 80%">
            <p>Троице-Сергиева Лавра</p>
        </div>
        <div class="park">
            <br>
            <img src=" assets/image/park.jpg" alt="Парк Патриот"
                 style="max-width: 90%; max-height: 80%">
            <p>Парк Патриот</p>
        </div>
        <div style="width: 100%; height: 30px"></div>
        <div class="marfino">
            <br>
            <img src="assets/image/marfino.jpg" alt="Усадьба Марфино"
                 style="max-width: 90%; max-height: 80%">
            <p>Усадьба Марфино</p>

        </div>
        <div class="ozero">
            <br>
            <img src="assets/image/ozero.jpg" alt="Озеро Сенеж"
                 style="max-width: 90%; max-height: 80%">
            <p>Озеро Сенеж</p>

        </div>

    </div>
</main>

<?php
// Получаем весь HTML-код страницы
$pageContent = ob_get_clean();

// Подсчитываем гласные буквы
$vowelCount = countVowels($pageContent);

// Подсчитываем количество слов
$wordCount = countWords($pageContent);

// Выводим содержимое страницы
echo $pageContent;

// Выводим количество гласных букв и слов
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