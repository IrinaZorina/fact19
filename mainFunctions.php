<?php
// Функция для смены темы дня и ночи
function dayNnight() {
    date_default_timezone_set('Asia/Yekaterinburg');
    $hour = date('H');
    if ($hour >= 8 && $hour < 20) {
        return 'light-theme';
    } else {
        return 'dark-theme';
    }
}

// Функция для подсчёта разницы в днях
function calculateDaysDifference($birthDateString) {
    $birthDate = new DateTime($birthDateString);
    $currentDate = new DateTime();
    $interval = $currentDate->diff($birthDate);
    $daysDifference = $interval->days;
    return [
        'days' => $daysDifference,
        'birthDate' => $birthDate->format('d.m.Y'),
        'currentDate' => $currentDate->format('d.m.Y')
    ];
}

// Вспомогательная функция для подсчёта гласных
function countVowels($text) {
    $text = strip_tags($text);
    $text = strtolower($text);
    $allowed = 'аеёиоуыэюяАЕЁИОУЫЭЮЯaeiouAEIOU ';
    $cleanText = '';
    for ($i = 0; $i < mb_strlen($text, 'UTF-8'); $i++) {
        $char = mb_substr($text, $i, 1, 'UTF-8');
        if (strpos($allowed, $char) !== false) {
            $cleanText .= $char;
        }
    }
    $text = $cleanText;
    $vowels = ['а', 'е', 'ё', 'и', 'о', 'у', 'ы', 'э', 'ю', 'я', 'a', 'e', 'i', 'o', 'u'];
    $count = 0;
    for ($i = 0; $i < mb_strlen($text, 'UTF-8'); $i++) {
        $char = mb_substr($text, $i, 1, 'UTF-8');
        if (in_array($char, $vowels)) {
            $count++;
        }
    }
    return $count;
}

// Функция для подсчёта гласных в блоках
function countVowelsInBlocks($aboutText, $reviewText) {
    $pageText = '';
    $pageText .= $aboutText ?? '';
    $pageText .= $reviewText ?? '';
    return countVowels($pageText);
}

// Вспомогательная функция для подсчёта слов
function countWords($text) {
    $text = strip_tags($text);
    $words = explode(" ", $text);
    $wordCount = 0;
    foreach ($words as $word) {
        if (!empty(trim($word))) {
            $wordCount++;
        }
    }
    return $wordCount;
}

// Функция для подсчёта слов в блоках
function countWordsInBlocks($aboutText, $reviewText) {
    $pageText = '';
    $pageText .= $aboutText ?? '';
    $pageText .= $reviewText ?? '';
    return countWords($pageText);
}

