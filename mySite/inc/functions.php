<?php
function About($text_about)
{
    $arr = explode(" ", $text_about);
    for ($i = 0; $i <= 5; $i++) {
        $arrRes[] = $arr[$i] . ' ';
    }
    $stringRes = implode('', $arrRes);
    $first_ = "<span style='color: #00ff40;'>". $stringRes ."</span>";
    $text_about = str_replace($stringRes, $first_, $text_about);
    echo $text_about;
}
function birthday($bioInfo)
{
    $birthday = DateTime::createFromFormat("d.m.Y","25.07.1998");
    $date_now = new DateTime( 'now');
    $interval = $date_now ->diff($birthday);
    $diff = $interval->days;
    $bioInfo = "Я родился: " . $birthday->format("d.m.Y") . "<br>" .
        "Сегодня: " . $date_now->format("d.m.Y") . "<br>" .
        "Разница: " . $diff;
    echo $bioInfo;
    return $birthday;
}
function lesson($str)
{
    $arr_lesson = explode(" ", $str);
    $style_text = "";
    foreach ($arr_lesson as $index_word => $word) {
        if (($index_word + 1) % 2 === 0) {
            $style_text .= "<span style='color: #002aff;'>" . $word . " </span>";
        } else {
            $style_text .= "<span style='color: #ff0000;'>" . $word . " </span>";
        }
    }
    return $style_text;
}

function WordsCount($file)
{
    $page = file_get_contents($file);
    return str_word_count($page, 0, "АаБбВвГгДдЕеЁёЖжЗзИиЙйКкЛлМмНнОоПпРрСсТтУуФфХхЦцЧчШшЩщЪъЫыЬьЭэЮюЯя");
}
function letterCount($file)
{
    $page = file_get_contents($file);
    return preg_match_all('/[аеёиоуэюяАЕЁИОУЭЮЯ]/u', $page);
}
function diff($birthday, $now, $diff)
{
    $birthday = DateTime::createFromFormat("d.m.Y", "20.03.1998");
    $now = new DateTime('now');
    $interval = $now->diff($birthday);
    $diff = $interval->days;
    echo "Я родился: " .  $birthday->format("d.m.Y") . "<br>";
    echo "Сегодня: " .  $now->format("d.m.Y") . "<br>" . "Разница: ";
    echo $diff;
}
