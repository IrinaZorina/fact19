<?php

// Количество гласных
//$abc = 'аеёиоуыэюя';
//$count = 0;
//
//$htmlContent = file_get_contents('task3.php');
//$textContent = strip_tags($htmlContent);
//$textContent = mb_strtolower($textContent);

textContent();
//
//// Подсчет гласных
//for ($i = 0; $i < mb_strlen($textContent); $i++) {
//    if (mb_strpos($abc, mb_substr($textContent, $i, 1)) !== false) {
//        $count++;
//    }
//}
//
//// Количество слов
//$array = preg_split('/\s+/', trim($textContent));
//
//// Текущая дата
//date_default_timezone_set('Asia/Yekaterinburg');
//$currentDateTime = new DateTime();
//$currentTimestamp = $currentDateTime->getTimestamp();
//
//// Дата рождения
//$newYearDateTime = new DateTime('2006-10-01');
//$newYearTimestamp = $newYearDateTime->getTimestamp();
//
//// Интервал между датами
//$timeDifference = $currentTimestamp - $newYearTimestamp;
//$daysBetween = floor($timeDifference / (60 * 60 * 24));

?>
<footer>
    <menu>
        <nav>
            <a href="tableM.php" class="linkHeader">Тема 1</a>
            <a href="cycles.php" class="linkHeader">Тема 2</a>
            <a href="" class="linkHeader">Тема 3</a>
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
            echo 'Количество гласных букв в сайте: ' . siteA() . '<br>';
            echo 'Количество слов в сайте: ' . textWord() . '<br>';
            ?>
        </div>
        <div class="itemString">
            <?php
            echo 'Текущая дата: ' . textDate() . '<br>';
            echo "Количество дней между датами: " . newYear() . " дней.";
            ?>
        </div>
    </div>
</footer>
