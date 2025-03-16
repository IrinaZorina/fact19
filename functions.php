<?php

// Окрашивание первого слова в тексте "обо мне" в красный цвет
function FirstToRed(&$string) {
    $new_string = explode(" ", $string, 2);
    $new_string[0] = "<span style=\"color: red;\">" . $new_string[0] . " </span>";
    $string = implode($new_string);
}

// Окрашивание каждого второго слова 
function WordColor(&$string){
    $new_string = explode(" ", $string);

    for ($i = 0; $i < count($new_string); $i++) {
        if ($i % 2 == 0) $new_string[$i] = "<span style=\"color: gray;\">" . $new_string[$i] . " </span>";
        else $new_string[$i] = "<span style=\"color: blue;\">" . $new_string[$i] . " </span>";
    }

    $string = implode($new_string);
}

// Получение контента страницы без тегов
function GetPageText($url) {
    return trim(strip_tags(file_get_contents($url)));
}

// Подсчет слов на указанной странице
function WordPageCount($url) {
    $content =  GetPageText($url);
    return str_word_count($content, 0, "АаБбВвГгДдЕеЁёЖжЗзИиЙйКкЛлМмНнОоПпРрСсТтУуФфХхЦцЧчШшЩщЪъЫыЬьЭэЮюЯя");
}

// Подсчет количества символов на странице
function VowelsPageCount($url) {
    $vowels = ["а", "е", "ё", "и", "о", "у", "ы", "э", "ю", "я"];
    $content = GetPageText($url);
    $content = mb_strtolower($content);
    $content = str_replace(" ", "", $content); //удаление пробелов
    $content = mb_str_split($content);

    $count = 0;
    foreach($content as $symb) {
        foreach ($vowels as $vowel){
            if ($symb == $vowel) {
                $count++;
                continue;
            } 
        }
    }
    return $count;
}

// Подсчет количества дней между датами
function DaysGone(string $str_date) {
    $date = strtotime($str_date);
    return round((time() - $date) / (60 * 60 * 24));
}

/**
 * Заполняет двумерный массив случайными значениями типа int
 * 
 * @param array $arr двумерный массив, который нужно заполнить
 * @param int $min_value минимальное значение
 * @param int $max_value максимальное значение
 * @param int $size количество элементов
 * 
 * Ничего не возвращает, но заполняет переданный массив
 */
function RandArrayInt(array &$arr, int $min_value, int $max_value, int $size) {
    foreach ($arr as $key => $values)
        for ($i = 0; $i < $size; $i++)
            array_push($arr[$key], mt_rand($min_value,$max_value));
}


/**
 * Создает и заполняет двумерный массив случайными строками из цифр и букв
 * 
 * 
 */
function RandArrayString(int $rows, int $columns, int $str_length) : array {
    $strings = [];
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    for ($i = 0; $i < $rows; $i++) {
        for ($j = 0; $j < $columns; $j++) {
            $str = "";
            for ($k = 0; $k < $str_length; $k++) {
                $str .= $characters[mt_rand(0, strlen($characters) - 1)];
            }
            $strings[$i][$j] = $str;
        }
    }
    return $strings;
}

/**
 * Создает матрицу, заполняет ее случайными числами и выводит ее в табличном виде
 * 
 * @param int $rows количество строк матрицы
 * @param int $columns количество колонок матрицы
 * @param int $min_value минимальное значение
 * @param int $max_value максимальное значение
 * @param bool Если true, то выводит таблицу
 * @return array возращает заполненную матрицу
 */
function CreateRandomMatrix(int $rows, int $columns, int $min_value, int $max_value, bool $create_table = true) {
    $matrix = [];

    // формирование шапки
    if ($create_table) {
        echo "<table><thead><th></th>";
        for ($i = 0; $i < $columns; $i++) {
            echo "<th>" . $i + 1 . "</th>";
        }
        echo "</thead><tbody>";
    }
    for ($i = 0; $i < $rows; $i++) {
        if ($create_table) echo "<tr><td><b>" . $i+1 . "</b></td>";
        for ($j = 0; $j < $columns; $j++) {
            $matrix[$i][$j] = mt_rand($min_value, $max_value);
            if ($create_table) echo "<td>" . $matrix[$i][$j] . "</td>";
        }
        if ($create_table) echo "</tr>";
    }
    if ($create_table) echo "</tbody></table>";
    return $matrix;
}

/**
 * Выводит сообщение об ошибке с помощью тега <blockquote>
 * 
 * @param string $error_text сообщение об ошибке
 */
function TextError(string $error_text) {
    echo "<style>";
    include_once "styles/error.css";
    echo "</style>";
    echo "<blockquote>";
    echo $error_text;
    echo "</blockquote>";
}