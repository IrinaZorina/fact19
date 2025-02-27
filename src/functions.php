<?php

declare(strict_types=1);

function getAboutText(string $aboutText): array
{
    $dotIndex = mb_strpos($aboutText, '.') + 1;
    $aboutTextPartOne = mb_substr($aboutText, 0, $dotIndex);
    $aboutTextPartTwo = mb_substr($aboutText, $dotIndex + 1, mb_strlen($aboutText));
    return [$aboutTextPartOne, $aboutTextPartTwo];
}

function getOpinionText(string $opinionText): string
{
    $opinionTextArr = explode(" ", $opinionText);
    $opinionTextColored = [];
    foreach ($opinionTextArr as $key => $value) {
        if ($key % 2 == 0) {
            $opinionTextColored[] = '<span style="color: var(--color-primary)">' . "{$value}" . '</span>';
        } else {
            $opinionTextColored[] = '<span style="color: var(--color-secondary)">' . "{$value}" . '</span>';
        }
    }
    $opinionTextColored = implode(" ", $opinionTextColored);
    return $opinionTextColored;
}

function getPageWordCount(string $path): int
{
    $page = file_get_contents($path);
    $page = strip_tags($page);
    return str_word_count($page, 0, "АаБбВвГгДдЕеЁёЖжЗзИиЙйКкЛлМмНнОоПпРрСсТтУуФфХхЦцЧчШшЩщЪъЫыЬьЭэЮюЯя");
}

function getPageVowelsCount(string $path): int
{
    $vowels = ['а', 'и', 'е', 'ё', 'о', 'у', 'ы', 'э', 'ю', 'я'];
    $page = file_get_contents($path);
    $page = strip_tags($page);
    $page = mb_strtolower($page, 'UTF-8');

    $count = 0;

    for ($i = 0; $i < mb_strlen($page); $i++) {
        $char = mb_substr($page, $i, 1);
        if (array_search($char, $vowels)) {
            $count++;
        }
    }
    return $count;
}

function getDaysDiff(string $date1, string $date2): int
{
    return (date_diff(date_create($date1), date_create($date2))->days);
}

