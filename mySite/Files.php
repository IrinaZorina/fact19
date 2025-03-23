<?php require_once'inc/header.php'?>
    <p class="files_work1"> Задание 1 <br>
    <?php
    $file1 = 'test/text1.txt';
    $file2 = 'test/text2.txt';
    $outputFile = 'test/result.txt';
    if (file_exists($file1)) {
        $file1Contents = file_get_contents($file1);
        $sentences1 = preg_split('/(?<=[.!?])\s*/', $file1Contents);
    } else {
        die("Ошибка: файл не существует - $file1");
    }
    if (file_exists($file2)) {
        $file2Contents = file_get_contents($file2);
        $sentences2 = preg_split('/(?<=[.!?])\s*/', $file2Contents);
    } else {
        die("Ошибка: файл не существует - $file2");
    }
    $sentences1 = array_map('trim', $sentences1);
    $sentences2 = array_map('trim', $sentences2);
    $allSentences = array_unique(array_merge($sentences1, $sentences2));
    file_put_contents($outputFile, implode("\n", $allSentences));
    echo "Файл с уникальными предложениями был успешно создан: $outputFile";
    ?>
</p>
<p class="files_work2"> Задание 2 <br>
<?php
$file1 = 'test/text1.txt';
$file2 = 'test/text2.txt';
$outputFile = 'test/result2.txt';
if (file_exists($file1)) {
    $file1Contents = file_get_contents($file1);
    $sentences1 = preg_split('/(?<=[.!?])\s*/', $file1Contents);
} else {
    die("Ошибка: файл не существует - $file1");
}
if (file_exists($file2)) {
    $file2Contents = file_get_contents($file2);
    $sentences2 = preg_split('/(?<=[.!?])\s*/', $file2Contents);
} else {
    die("Ошибка: файл не существует - $file2");
}
$allSentences = array_merge($sentences1, $sentences2);
$sentenceCount = array_count_values($allSentences);
$repeatedSentences = array_filter($sentenceCount, function($count) {
    return $count > 1;
});
file_put_contents($outputFile, implode("\n", array_keys($repeatedSentences)));
echo "Файл с повторяющимися предложениями был успешно создан: $outputFile";
?>
</p>
<?php require_once  'inc/footer.php'?>
