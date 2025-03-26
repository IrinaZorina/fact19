<?php
function dayNightStyle(){
    date_default_timezone_set('Asia/Yekaterinburg');
    $time = Date('H');
    if ($time >= 8 && $time < 24) {
    $css = 'style';
    } else {
    $css = 'style2';
    }
    return $css;
};

function textColor($text){
    $words = explode(' ', $text); // Разбиваем строку на слова
    $coloredText = '';
        foreach ($words as $index => $word) {
        $class = ($index % 2 == 0) ? 'noch' : 'ch';
        $coloredText .= '<span class="' . $class . '">' . $word . '</span> '; // Оборачиваем слово в span с классом
        }
    return $coloredText;
}

function textContent(){
    $htmlContent = file_get_contents( '../adaptive/task3.php');
    $textContent = strip_tags($htmlContent);
    return  mb_strtolower($textContent);
};

function siteA(){
    $abc = 'аеёиоуыэюя';
    $count = 0;

    $textContent = textContent();

    for ($i = 0; $i < mb_strlen($textContent); $i++) {
        if (mb_strpos($abc, mb_substr($textContent, $i, 1)) !== false) {
            $count++;
        }
    }
    return $count;
};

function textWord(){
    $textContent = textContent();

    $array = preg_split('/\s+/', trim($textContent));

    return $countArray = count($array);
}

function textDate(){
    $currentTimestamp = time();
    date_default_timezone_set('Asia/Yekaterinburg');
    return $date = date('m/d/Y h:i:s', time());
}

function newYear(){
    $newYearTimestamp = strtotime('2006-10-01');

    $currentTimestamp = time();

    $timeDifference = $newYearTimestamp - $currentTimestamp;

    return $days = floor($timeDifference / (60 * 60 * 24));
}
