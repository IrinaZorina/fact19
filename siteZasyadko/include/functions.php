<?php
function about($text_about)
{
    $string = explode(" ", $text_about);
    $firstWord = "<span style='color: red'>   " . $string[0] . "</span>";
    $text_about = str_replace($string[0], $firstWord, $text_about);
    return $text_about;
}

function lesson($str)
{
    $arr_lesson = explode(" ", $str);
    $style_text = "";
    foreach ($arr_lesson as $index_word => $word) {
        if (($index_word + 1) % 2 === 0) {
            $style_text .= "<span style='color: yellow;'>" . $word . " " . "</span>";
        } else {
            $style_text .= "<span style='color: red;'>" . $word . " " . "</span>";
        }
    }
    return $style_text;
}

function WordsCount($file)
{
    $page = file_get_contents($file);
    echo "Общее количество слов = ";
    return str_word_count($page, 0, "АаБбВвГгДдЕеЁёЖжЗзИиЙйКкЛлМмНнОоПпРрСсТтУуФфХхЦцЧчШшЩщЪъЫыЬьЭэЮюЯя");
}

function letterCount($file)
{
    $page = file_get_contents($file);
    $page = strip_tags($page);
    return preg_match_all('/[аеёиоуэюяАЕЁИОУЭЮЯ]/u', $page);
}

function diffTime($birthday, $date_now, $diff)
{
    $birthday = DateTime::createFromFormat("d.m.Y", "20.03.1998");
    $date_now = new DateTime('now');
    $interval = $date_now->diff($birthday);
    $diff = $interval->days;
    echo "Я родился: " . $birthday->format("d.m.Y") . "<br>";
    echo "Сегодня: " . $date_now->format("d.m.Y") . "<br>" . "Разница: ";
    return $diff;
}
function deleteSession()
{
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    $_SESSION = [];
    if (session_destroy()) {
        return true;
    } else {
        return false;
    }
}
function processFile(string $file, array &$sentences): void {
if (file_exists($file)) {
$content = file_get_contents($file);
if ($content !== false) {
$newSentences = preg_split('/(?<=[.?!])\s+(?=[A-ZА-Я])/u', $content, -1, PREG_SPLIT_NO_EMPTY);

foreach ($newSentences as $sentence) {
$sentence = trim($sentence);
if (!empty($sentence) && !in_array($sentence, $sentences, true)) {
$sentences[] = $sentence;
}
}
} else {
echo "Ошибка чтения файла: " . $file . PHP_EOL;
}
} else {
echo "Файл не существует: " . $file . PHP_EOL;
}
}?>