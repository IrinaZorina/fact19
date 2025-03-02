<?php
date_default_timezone_set('Asia/Yekaterinburg'); // Устанавливаем часовой пояс Екатеринбурга
$hour = date('H'); // Получаем текущий час

// Определяем тему в зависимости от времени суток
if ($hour >= 8 && $hour < 20) {
  $theme = 'light-theme';
} else {
  $theme = 'dark-theme';
}
?>
<?php include __DIR__ . '/header.php'; ?>
<div class="container">
  <?php
  // Указываем дату рождения
  $birthDate = new DateTime('05.10.1991');

  // Получаем текущую дату
  $currentDate = new DateTime();

  // Вычисляем разницу между датами
  $interval = $currentDate->diff($birthDate);

  // Получаем количество дней
  $daysDifference = $interval->days;

  // Выводим информацию о датах
  echo "<div style='margin-bottom: 20px; text-align: center;'>";
  echo "Дата рождения: " . $birthDate->format('d.m.Y') . "<br>";
  echo "Текущая дата: " . $currentDate->format('d.m.Y') . "<br>";
  echo "Разница в днях: " . $daysDifference . " дня";
  echo "</div>";
  ?>
  <h1 class="title">Евгений Крупнов</h1>
  <div class="Name"></div>
  <div class="AboutMe">
    <h2>Обо мне</h2>
    <?php
    // текст блока обо  мне
    $aboutText = "Меня зовут Евгений. Мне 33 года, я люблю проводить свое свободное
      время,занимаясь спортом, путешествуя с семьей, также увлекаюсь чтением
      книг. Моя профессиональная деятельность с 20 лет связана с продажами,
      потому что мне нравится работать с людьми и в команде. В 25 лет поступил
      в институт экономики и управления г.Челябинска, специальность
      менеджмент организации Есть опыт ведения собственного бизнеса
      (интернет магазин), на сегодняшний день работаю на должности помошника
      управляющего в сети розничной торговли. Но в 2024 году решился получить
      новую профессию, на мой взгляд, более интересную,перспективную , и
      теперь я здесь.";
    $phrase = "Меня зовут Евгений";
    $coloredPhrase = '<span style="color: red;">' . $phrase . '</span>';
    $newText = str_replace($phrase, $coloredPhrase, $aboutText);
    echo $newText;
    ?>
  </div>
  <div class="Review">
    <h2>Отзыв о курсе</h2>
    <?php
    $reviewText = 'Как человек,который пришел на курс с полным остутствием опыта и знаний в
      этой сфере, хочу сказать, что информация подается понятно,вся теория
      сразу подкрепляется практикой, мне это очень нравится. Начал обучение с
      бесплатного курса, смог понять весь материал самостоятельно, что очень
      мне помогло на первом занятии основного курса. Думаю дойти до конца и
      получить необходимые навыки, которые будут цениться на рынке труда.';
    $words = explode(" ", $reviewText);
    $coloredWords = [];
    for ($i = 0; $i < count($words); $i++) {
      $color = ($i % 2 == 0) ? 'red' : 'blue'; // Четные (0, 2, 4...) — красный, нечетные (1, 3, 5...) — синий
      $coloredWords[] = '<span style="color: ' . $color . ';">' . htmlspecialchars($words[$i]) . '</span>';
    }

    // Собираем текст обратно с пробелами
    $newReviewText = implode(' ', $coloredWords);

    // Выводим новый текст
    echo $newReviewText

    ?>
  </div>
</div>
<div class="Crimea-container">
  <h1 class="titlecrimea">Достопримечательности Крыма</h1>
  <div class="Crimea">
    <div class="Crimea-box">
      <div class="Crimea-item fiolent"></div>
      <div class="Crimea-caption">
        Один из самых популярных мысов Крыма — мыс Фиолент
      </div>
    </div>

    <div class="Crimea-box">
      <div class="Crimea-item hersones"></div>
      <div class="Crimea-caption">Древнегреческий город Херсонес</div>
    </div>

    <div class="Crimea-box">
      <div class="Crimea-item ipetri"></div>
      <div class="Crimea-caption">
        Самое посещаемое место в Ялте — гора Ай-Петри
      </div>
    </div>

    <div class="Crimea-box">
      <div class="Crimea-item sapun"></div>
      <div class="Crimea-caption">
        Сапун-гора — ключевая оборонительная позиция к г. Севастополь во
        время ВОВ
      </div>
    </div>
  </div>
</div>

<div class="city-container">
  <h1 class="titlecity">Города Крыма</h1>
  <div class="city-box">
    <div class="city-item sevastopol"></div>
    <div class="city-caption">Севастополь</div>
  </div>
  <div class="city-box">
    <div class="city-item simferopol"></div>
    <div class="city-caption">Симферополь</div>
  </div>
  <div class="city-box">
    <div class="city-item yalta"></div>
    <div class="city-caption">Ялта</div>
  </div>
  <div class="city-box">
    <div class="city-item balaklava"></div>
    <div class="city-caption">Балаклава</div>
  </div>
</div>
<?php
// Функция для подсчёта гласных 
function countVowels($text)
{
  $text = strip_tags($text); // Удаляем HTML-теги
  $text = strtolower($text); // Приводим к нижнему регистру для упрощения

  // Оставляем только буквы и пробелы (русские и английские)
  $allowed = 'аеёиоуыэюяАЕЁИОУЫЭЮЯaeiouAEIOU ';
  $cleanText = '';
  for ($i = 0; $i < mb_strlen($text, 'UTF-8'); $i++) {
    $char = mb_substr($text, $i, 1, 'UTF-8');
    if (strpos($allowed, $char) !== false) {
      $cleanText .= $char;
    }
  }
  $text = $cleanText;

  // Гласные (русские и английские)
  $vowels = ['а', 'е', 'ё', 'и', 'о', 'у', 'ы', 'э', 'ю', 'я', 'a', 'e', 'i', 'o', 'u'];
  $count = 0;

  // Проходим по чистому тексту и считаем гласные
  for ($i = 0; $i < mb_strlen($text, 'UTF-8'); $i++) {
    $char = mb_substr($text, $i, 1, 'UTF-8');
    if (in_array($char, $vowels)) {
      $count++;
    }
  }

  return $count;
}

// Собираем текст только из блоков "Обо мне" и "Отзыв о курсе"
$pageText = '';
$pageText .= $newAboutText ?? ''; // Текст "Обо мне"
$pageText .= $newReviewText ?? ''; // Текст "Отзыв о курсе"

// Подсчитываем гласные
$vowelCount = countVowels($pageText);

// Выводим результат в конце страницы
echo "<div style='margin-top: 20px; text-align: center;'>";
echo "Количество гласных букв в блоках 'Обо мне' и 'Отзыв о курсе': " . $vowelCount;
echo "</div>";
?>
<?php
// Функция для подсчёта слов 
function countWords($text)
{
  $text = strip_tags($text); // Удаляем HTML-теги
  $words = explode(" ", $text); // Разбиваем текст на слова по пробелам
  $wordCount = 0;

  // Считаем только непустые слова
  foreach ($words as $word) {
    if (!empty(trim($word))) {
      $wordCount++;
    }
  }

  return $wordCount;
}

// Собираем текст только из блоков "Обо мне" и "Отзыв о курсе"
$pageText = '';
$pageText .= $newAboutText ?? ''; // Текст "Обо мне"
$pageText .= $newReviewText ?? ''; // Текст "Отзыв о курсе"

// Подсчитываем общее количество слов
$wordCount = countWords($pageText);

// Выводим результат в конце страницы
echo "<div style='margin-top: 20px; text-align: center;'>";
echo "Общее количество слов в блоках 'Обо мне' и 'Отзыв о курсе': " . $wordCount;
echo "</div>";
?>
<?php include __DIR__ . '/footer.php'; ?>