<?php require_once 'inc/header.php' ?>
    <style>
        .first-phrase {
            color: #FF5733;
            font-weight: bold;
        }

        .even-word {
            color: #f80808;
        }

        .odd-word {
            color: #004dce;
        }

        .date-form {
            margin-top: 20px;
            padding: 10px;
            background: #f0f0f0;
        }
    </style>
    <main>
        <div class="glava"><h1> Алмаз Фахертдинов</h1></div>
        <div class="photo-text-block">
            <img src="assets/image/photo_2025-01-21_00-57-03.jpg" alt="Фото">
            <div class="text">
                <?php
                $aboutMe = "Привет! Меня зовут Алмаз, работаю в компании ЦИТ \"Открытый Регион\" руководителем проектов. Как
            проект-менеджер в IT, я координирую команды, планирую задачи и обеспечиваю успешную реализацию проектов";
                $firstPhrase = substr($aboutMe, 0, strpos($aboutMe, "!") + 1);
                $restOfText = substr($aboutMe, strpos($aboutMe, "!") + 1);
                echo "<p><span class='first-phrase'>$firstPhrase</span>$restOfText</p>";
                ?>
            </div>
            <div class="text">
                <?php
                $aboutCourse = "Я только что начал прохождение курсов программирования в академии \"Факт\". Волнение переполняет
            меня. Погружение в мир кода и алгоритмов обещает быть увлекательным. Преподаватели вдохновляют, а атмосфера
            поддержки к обучению. Я готов к новым вызовам и надеюсь, что эти курсы откроют передо мной новые горизонты.";
                $words = explode(" ", $aboutCourse);
                foreach ($words as $index => $word) {
                    $class = ($index % 2 == 0) ? "odd-word" : "even-word";
                    echo "<span class='$class'>$word </span>";
                }
                ?>
            </div>
        </div>
        <h1>Красоты Уфы</h1>
        <div class="ufa">
            <div class="item">
                <img src="assets/image/ufa/1.jpg" alt="Фото 1">
                <p> Проспект Октября</p>
            </div>
            <div class="item">
                <img src="assets/image/ufa/2.jpg" alt="Фото 1">
                <p> Набережная реки Белая</p>
            </div>
            <div class="item">
                <img src="assets/image/ufa/4.jpg" alt="Фото 1">
                <p> Микрорайон Сипайлово</p>
            </div>
            <div class="item">
                <img src="assets/image/ufa/5.jpg" alt="Фото 1">
                <p> Праздничный "Горсовет"</p>
            </div>
        </div>
        <h2>Достопримечательности Республики Башкортостан</h2>
        <div class="bashkir">
            <div class="item">
                <img src="assets/image/bshk/1.jpg" alt="Достопримечательность 1">
                <p>Природа Башкортостана</p>
            </div>
            <div class="item">
                <img src="assets/image/bshk/2.jpg" alt="Достопримечательность 2">
                <p>Природа Башкортостана</p>
            </div>
            <div class="item">
                <img src="assets/image/bshk/3.jpg" alt="Достопримечательность 3">
                <p>Природа Башкортостана</p>
            </div>
            <div class="item">
                <img src="assets/image/bshk/4.jpeg" alt="Достопримечательность 4">
                <p>Природа Башкортостана</p>
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
        $textContent .= "Проспект Октября Набережная реки Белая Микрорайон Сипайлово Праздничный Горсовет ";
        $textContent .= "Природа Башкортостана Природа Башкортостана Природа Башкортостана ";

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
<?php require_once 'inc/footer.php' ?>