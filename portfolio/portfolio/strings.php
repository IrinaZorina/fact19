<?php require_once 'inc/header.php';

//Слова отзыва
function words($feedback){
    $words = explode(" ", $feedback);

    foreach ($words as $arr => $word) {
        if ($arr % 2 == 0) {
            $words[$arr] = "<span style='color: darkgreen'>$word</span>";
        } else {
            $words[$arr] = "<span style='color: saddlebrown;'>$word</span>";
        }
    }
    return implode(" ", $words);
}


// Текст страницы
$content = file_get_contents('index.php');

// Гласные буквы
function vowel($str)
{
    $textWithoutTags = strip_tags($str);
    preg_match_all('/[аеёиоуыэюя]/iu', $textWithoutTags, $matches);
    return count($matches[0]);
}


// Количество слов
function word_count($str)
{
    $textWithoutTags = strip_tags($str);
    return str_word_count($textWithoutTags, 0, 'АаБбВвГгДдЕеЁёЖжЗзИиЙйКкЛлМмНнОоПпРрСсТтУуФфХхЦцЧчШшЩщЪъЫыЬьЭэЮюЯя');
}


$birthday = "1995-09-05";

function birth($day)
{
    return date("d.m.Y", strtotime($day));
}


$today = time();

function day_diff($date1, $date2)
{
    $b_day = strtotime($date2);
    return floor(($date1 - $b_day) / (60 * 60 * 24));
}


?>
    <div class="resume">
        <div class="img">

        </div>
        <div class="main">
            <div class="name">
                <h1>Сарбаева Галия</h1>
            </div>
            <div class="about">
                <p><b>Коротко о себе:</b></p>
                <p><span style="color: blueviolet">Мне 29 лет.</span> В 2019 году закончила УГАТУ, факультет информатики и роботехники. За время работы получила опыт администрирования Битрикс. Получила сертификаты по курсам "Бизнес-процессы", "Администратор. Базовый", "Администратор сервиса Битрикс24 (коробочная версия)". </p>
                <p>Живу в городе Уфа. Люблю путешествовать. Работа удаленно позволяет ездить по городам России. Особенно нравится Санкт-Петербург. Очень хочу прыгнуть с парашютом.</p>
            </div>
            <div class="like">
                <p><b>Отзыв:</b></p>
                <p><?php echo words("Понравилась форма преподнесения информации. Также понравилась возможность практиковаться прямо во время занятия и задавать вопросы преподавателю. ")?></p>
            </div>
        </div>
    </div>
    <div class="space">
        <div>
            <p> Количество гласных букв: <?php echo vowel($content) ?> <br>  </p>
            <p> Количество слов: <?php echo word_count($content) ?></p>
        </div>
        <div style="text-align: center; margin-top: 20px;">
            <p>День рождения: <?php echo birth($birthday) ?></p>
            <p>Сегодня: <?php echo date("d.m.Y"); ?></p>
            <p>Разница в днях: <?php echo day_diff($today,$birthday); ?></p>
        </div>
    </div>
<?php require_once 'inc/footer.php';?>