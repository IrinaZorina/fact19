<?php 
require('../style/function.php');
include_once "header.php";

    // Задание 1: Уникальные предложения
    echo '<h3>Задание 1: уникальные фразы</h3>';
    
    $sourceTextA = '../text1.txt';
    $sourceTextB = '../text2.txt';
    $uniquePhrasesOutput = '../resultFirst.txt';
    
    if (!file_exists($sourceTextA)) {
        die("Документ не найден: $sourceTextA");
    }
    $contentA = file_get_contents($sourceTextA);
    $phrasesFromA = preg_split('/(?<=[.!?])\s*/', $contentA);
    
    if (!file_exists($sourceTextB)) {
        die("Документ не найден: $sourceTextB");
    }
    $contentB = file_get_contents($sourceTextB);
    $phrasesFromB = preg_split('/(?<=[.!?])\s*/', $contentB);
    
    $trimmedPhrasesA = array_map('trim', $phrasesFromA);
    $trimmedPhrasesB = array_map('trim', $phrasesFromB);
    $uniquePhrases = array_unique(array_merge($trimmedPhrasesA, $trimmedPhrasesB));
    
    file_put_contents($uniquePhrasesOutput, implode("\n", $uniquePhrases));
    echo '<p> Создан файл уникальных фраз: <b>'.$uniquePhrasesOutput.'</b></p>';
    echo '<p>Найдено уникальных фраз: '.count($uniquePhrases).'</p>';
    echo '</div>';

    // Задание 2: Повторяющиеся предложения
    echo '<div>';
    echo '<h3>Задание 2: найденные совпадения</h3>';
    
    $documentX = '../text1.txt';
    $documentY = '../text2.txt';
    $commonPhrasesOutput = '../resultSecond.txt';
    
    if (!file_exists($documentX)) {
        die("Отсутствует документ: $documentX");
    }
    $textX = file_get_contents($documentX);
    $sentencesX = preg_split('/(?<=[.!?])\s*/', $textX);
    
    if (!file_exists($documentY)) {
        die("Отсутствует документ: $documentY");
    }
    $textY = file_get_contents($documentY);
    $sentencesY = preg_split('/(?<=[.!?])\s*/', $textY);
    
    $allPhrases = array_merge($sentencesX, $sentencesY);
    $phraseFrequency = array_count_values($allPhrases);
    $duplicatePhrases = array_filter($phraseFrequency, fn($count) => $count > 1);
    
    file_put_contents($commonPhrasesOutput, implode("\n", array_keys($duplicatePhrases)));
    echo '<p> Обнаружены повторяющиеся фразы: <b>'.$commonPhrasesOutput.'</b></p>';
    echo '<p>Количество совпадений: '.count($duplicatePhrases).'</p>';
    echo '</div>';

require('footer.php');
?>