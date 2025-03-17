<?php require_once 'templates/Header.php' ?>
<title>О себе и о курсе</title>
<style>
    .first-phrase {
        color: #FF5733;
        font-weight: bold;
    }

    .even-word {
        color: #33FF57;
    }

    .odd-word {
        color: #3357FF;
    }

    .date-form {
        margin-top: 20px;
        padding: 10px;
        background: #f0f0f0;
    }
</style>
<main>
    <div class="FIO">
        <h1> Дамир Садрисламов</h1>
    </div>
    <div class="photo-text-block">
        <img src="assets/image/photo_2024-12-23_16-01-43.jpg" alt="Фото">
        <div class="text">
            <h3>О себе</h3>
            <?php
            $aboutMe = "Привет! Меня зовут Дамир, работаю в компании ЦИТ \"Открытый Регион\" руководителем проектов.";
            $firstPhrase = substr($aboutMe, 0, strpos($aboutMe, "!") + 1);
            $restOfText = substr($aboutMe, strpos($aboutMe, "!") + 1);
            echo "<p><span class='first-phrase'>$firstPhrase</span>$restOfText</p>";
            ?>
        </div>
        <div class="text">
            <h3>О курсе</h3>
            <?php
            $aboutCourse = "Обучаюсь на курсах в академии \"ФАКТ\". Это моё первое домашнее задание. Учусь постепенно кодить, надеюсь курс будет мне понятен и я смогу в дальнейшем активно пользоваться полученными на этом курсе знаниями!";
            $words = explode(" ", $aboutCourse);
            foreach ($words as $index => $word) {
                $class = ($index % 2 == 0) ? "odd-word" : "even-word";
                echo "<span class='$class'>$word </span>";
            }
            ?>
        </div>
    </div>
    <h1>Чем богат Башкортостан</h1>
    <div class="priroda">
        <div class="item">
            <img src="assets/image/bashkort/Sheehan.jpg" alt="Фото 1">
            <p> Могучие шиханы</p>
        </div>
        <div class="item">
            <img src="assets/image/bashkort/bee.jpg" alt="Фото 1">
            <p> Самый лучший мёд</p>
        </div>
        <div class="item">
            <img src="assets/image/bashkort/river.jpg" alt="Фото 1">
            <p> Бесконечные реки</p>
        </div>
        <div class="item">
            <img src="assets/image/bashkort/kurai.jpg" alt="Фото 1">
            <p> Уникальная музыка</p>
        </div>
    </div>
    <h2>Достопримечательности города Уфы</h2>
    <div class="Ufa">
        <div class="item">
            <img src="assets/image/ufa/fontain.jpg" alt="Достопримечательность 1">
            <p>Фонтан \"Семь девушек\"</p>
        </div>
        <div class="item">
            <img src="assets/image/ufa/mechet.jpg" alt="Достопримечательность 2">
            <p>Мечеть Ляля-Тюльпан</p>
        </div>
        <div class="item">
            <img src="assets/image/ufa/monument.jpg" alt="Достопримечательность 3">
            <p>Монумент Дружбы</p>
        </div>
        <div class="item">
            <img src="assets/image/ufa/Salavat.jpg" alt="Достопримечательность 4">
            <p>Памятник Салавату Юлаеву</p>
        </div>
    </div>

    <?php
    function countVowels($text)
    {
        $vowels = ['а', 'е', 'ё', 'и', 'о', 'у', 'ы', 'э', 'ю', 'я'];
        $count = 0;
        $text = mb_strtolower($text);
        foreach (mb_str_split($text) as $char) {
            if (in_array($char, $vowels)) {
                $count++;
            }
        }
        return $count;
    }

    function countWords($text)
    {
        $text = strip_tags($text);
        $words = preg_split('/\s+/', $text);
        return count(array_filter($words, function ($word) {
            return !empty($word);
        }));
    }

    $textContent = $aboutMe . " " . $aboutCourse . " ";
    $textContent .= "Могучие шиханы Самый лучший мёд Бесконечные реки Уникальная музыка ";
    $textContent .= "Фонтан Семь девушек Мечеть Ляля-Тюльпан Монумент Дружбы Памятник Салавату Юлаеву";

    $vowelCount = countVowels($textContent);
    $wordCount = countWords($textContent);

    echo "<div class='date-form'>";
    echo "<p>Количество гласных букв на странице: $vowelCount</p>";
    echo "<p>Общее количество слов на странице: $wordCount</p>";

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $birthDate = $_POST['birthdate'];
        $currentDate = date('d.m.Y');

        $birthDateTime = DateTime::createFromFormat('d.m.Y', $birthDate);
        $currentDateTime = DateTime::createFromFormat('d.m.Y', $currentDate);

        $interval = $currentDateTime->diff($birthDateTime);
        $daysDifference = $interval->days;

        echo "<p>Текущая дата: $currentDate</p>";
        echo "<p>Количество дней между $birthDate и $currentDate: $daysDifference дней</p>";
    }

    echo "<form method='POST' action=''>
              <label for='birthdate'>Введите дату рождения (дд.мм.гггг):</label>
              <input type='text' id='birthdate' name='birthdate' required pattern='\d{2}\.\d{2}\.\d{4}'>
              <button type='submit'>Рассчитать</button>
          </form>";
    echo "</div>";
    ?>
</main>
<?php require_once 'templates/Footer.php' ?>