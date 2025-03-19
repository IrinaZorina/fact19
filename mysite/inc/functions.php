<?php
function about($about)
{
    $string = explode(" ", $about);
    $firstWord = "<span style='color: red'>   " . $string[0] . "</span>";
    $about = str_replace($string[0], $firstWord, $about);
    return $about;
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
    $page = strip_tags($page);
    return str_word_count($page, 0, "АаБбВвГгДдЕеЁёЖжЗзИиЙйКкЛлМмНнОоПпРрСсТтУуФфХхЦцЧчШшЩщЪъЫыЬьЭэЮюЯя");
}

function letterCount($file)
{
    $page = file_get_contents($file);
    $page = strip_tags($page);
    return preg_match_all('/[аеёиоуэюяАЕЁИОУЭЮЯ]/u', $page);
}

function diffTime($birthday, $now, $diff)
{
    $birthday = DateTime::createFromFormat("d.m.Y", "20.03.1998");
    $now = new DateTime('now');
    $interval = $now->diff($birthday);
    $diff = $interval->days;
    echo "Я родился: " . $birthday->format("d.m.Y") . "<br>";
    echo "Сегодня: " . $now->format("d.m.Y") . "<br>" . "Разница: ";
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