<?php
// Количество гласных
$abc = 'аеёиоуыэюя';
$count = 0;

$htmlContent = file_get_contents('index.php');
$textContent = strip_tags($htmlContent);
$textContent = mb_strtolower($textContent);

// Подсчет гласных
for ($i = 0; $i < mb_strlen($textContent); $i++) {
    if (mb_strpos($abc, mb_substr($textContent, $i, 1)) !== false) {
        $count++;
    }
}

// Количество слов
$array = preg_split('/\s+/', trim($textContent));

// Установка часового пояса
date_default_timezone_set('Asia/Yekaterinburg');

// Текущая дата
$currentDateTime = new DateTime();
$currentTimestamp = $currentDateTime->getTimestamp();

// Дата рождения
$newYearDateTime = new DateTime('2006-10-01');
$newYearTimestamp = $newYearDateTime->getTimestamp();

// Интервал между датами
$timeDifference = $currentTimestamp - $newYearTimestamp;
$daysBetween = floor($timeDifference / (60 * 60 * 24));

?>
<footer>
    <menu>
        <nav>
            <a href="index.php" class="linkHeader">Главная</a>
            <a href="tableM.php" class="linkHeader">Ячейка таблицы</a>
            <a href="cycles.php" class="linkHeader">Циклы</a>
            <a href="taskFunction.php" class="linkHeader">Функции</a>
            <a href="fact.php" class="linkHeader">Факт</a>
            <a href="bitrix.php" class="linkHeader">Битрикс</a>
        </nav>
        <nav>
            <a href="https://vk.com/id509418920" class="linkHeader"><img src="assets/img/vk.png"></a>
            <a href="https://web.telegram.org/k/" class="linkHeader"><img src="assets/img/tg.png"></a>
            <a href="" class="linkHeader">+7-996-102-47-38</a>
        </nav>
    </menu>
    <div class="string">
        <div class="itemString">
            <?php
            echo 'Количество гласных букв в сайте: ' . $count . '<br>';
            echo 'Количество слов в сайте: ' . count($array) . '<br>';
            ?>
        </div>
        <div class="itemString">
            <?php
            echo 'Текущая дата: ' . $currentDateTime->format('d.m.Y H:i:s') . '<br>';
            echo "Количество дней между " . $newYearDateTime->format('d.m.Y') . " и текущей датой: " . $daysBetween . " дня(ей).";
            ?>
        </div>
    </div>
</footer>
