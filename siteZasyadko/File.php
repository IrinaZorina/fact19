<?php require_once 'include/header.php' ?>
<?php

$file1 = 'test/1.txt';
$file2 = 'test/2.txt';
$outputFile = 'test/result.txt';

$file1Content = file_get_contents($file1);
$file2Content = file_get_contents($file2);

if ($file1Content === false) {
    $file1Content = '';
}
if ($file2Content === false) {
    $file2Content = '';
}

$sentences1 = preg_split('/(?<=[.?!…])\s+(?=[A-ZА-ЯЁ])|(?<=[.?!…])\s+$/u', trim($file1Content), -1, PREG_SPLIT_NO_EMPTY);
$sentences2 = preg_split('/(?<=[.?!…])\s+(?=[A-ZА-ЯЁ])|(?<=[.?!…])\s+$/u', trim($file2Content), -1, PREG_SPLIT_NO_EMPTY);

$allSentences = array_merge($sentences1, $sentences2);

$uniqueSentences = array();
foreach ($allSentences as $sentence) {
    $sentence = trim($sentence);
    if (!in_array($sentence, $uniqueSentences)) {
        $uniqueSentences[] = $sentence;
    }
}

$fileHandle = fopen($outputFile, 'w');
if ($fileHandle) {
    foreach ($uniqueSentences as $sentence) {
        fwrite($fileHandle, $sentence . PHP_EOL);
    }
    fclose($fileHandle);
    echo "Файл '$outputFile' успешно создан.\n";
} else {
    echo "Не удалось создать файл '$outputFile'.\n";
}
echo "<br>";
readfile($outputFile);
?>
<br>
<?php

$file3 = 'test/1.txt';
$file4 = 'test/2.txt';
$outputFile = 'test/result2.txt';

$sentences1 = [];
$sentences2 = [];
$result2Sentences = [];


if (file_exists($file3)) {
    $content1 = file_get_contents($file3);
    if ($content1 !== false) {
        $newSentences1 = preg_split('/(?<=[.?!])\s+(?=[A-ZА-Я])/u', $content1, -1, PREG_SPLIT_NO_EMPTY);
        foreach ($newSentences1 as $sentence) {
            $sentence = trim($sentence);
            if (!empty($sentence)) {
                $sentences1[] = $sentence;
            }
        }
    } else {
        echo "Ошибка чтения файла: " . $file3 . PHP_EOL;
    }
} else {
    echo "Файл не существует: " . $file3 . PHP_EOL;
}

if (file_exists($file4)) {
    $content2 = file_get_contents($file4);
    if ($content2 !== false) {
        $newSentences2 = preg_split('/(?<=[.?!])\s+(?=[A-ZА-Я])/u', $content2, -1, PREG_SPLIT_NO_EMPTY);
        foreach ($newSentences2 as $sentence) {
            $sentence = trim($sentence);
            if (!empty($sentence)) {
                $sentences2[] = $sentence;
            }
        }
    } else {
        echo "Ошибка чтения файла: " . $file4 . PHP_EOL;
    }
} else {
    echo "Файл не существует: " . $file4 . PHP_EOL;
}

foreach ($sentences1 as $sentence1) {
    if (in_array($sentence1, $sentences2, true) && !in_array($sentence1, $result2Sentences, true)) {
        $result2Sentences[] = $sentence1;
    }
}


$result = file_put_contents($outputFile, implode(PHP_EOL, $result2Sentences));

if ($result !== false) {
    echo "Повторяющиеся предложения успешно записаны в файл: " . $outputFile . PHP_EOL;
} else {
    echo "Ошибка записи в файл: " . $outputFile . PHP_EOL;
}
echo "<br>";
readfile($outputFile);
?>
<?php require_once 'include/footer.php' ?>
