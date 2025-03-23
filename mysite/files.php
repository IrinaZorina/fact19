<?php require_once 'inc/head.php'; ?>
    <div class="files">

        <?php

        $file1 = 'test/file1.txt';
        $file2 = 'test/file2.txt';
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

        $file3 = 'test/file1.txt';
        $file4 = 'test/file2.txt';
        $outputFile1 = 'test/result2.txt';

        $file1Content = file_get_contents($file3);
        $file2Content = file_get_contents($file4);

        if ($file1Content === false) {
            die("Не удалось прочитать файл: $file3");
        }
        if ($file2Content === false) {
            die("Не удалось прочитать файл: $file4");
        }

        $sentences1 = preg_split('/(?<=[.?!…])\s+(?=[A-ZА-ЯЁ])|(?<=[.?!…])\s+$/u', trim($file1Content), -1, PREG_SPLIT_NO_EMPTY);
        $sentences2 = preg_split('/(?<=[.?!…])\s+(?=[A-ZА-ЯЁ])|(?<=[.?!…])\s+$/u', trim($file2Content), -1, PREG_SPLIT_NO_EMPTY);

        $repeatedSentences = [];
        foreach ($sentences1 as $sentence1) {
            $sentence1 = trim($sentence1);
            foreach ($sentences2 as $sentence2) {
                $sentence2 = trim($sentence2);
                if ($sentence1 === $sentence2) {
                    $alreadyExists = false;
                    foreach ($repeatedSentences as $existingSentence) {
                        if ($sentence1 === $existingSentence) {
                            $alreadyExists = true;
                            break;
                        }
                    }
                    if (!$alreadyExists) {
                        $repeatedSentences[] = $sentence1;
                    }
                    break;
                }
            }
        }

        if (count($repeatedSentences) > 0) {
            $fileHandle = fopen($outputFile1, 'w');
            if ($fileHandle) {
                foreach ($repeatedSentences as $sentence) {
                    fwrite($fileHandle, $sentence . PHP_EOL);
                }
                fclose($fileHandle);
                echo "Файл '$outputFile1' успешно создан с повторяющимися предложениями.\n";
            } else {
                echo "Не удалось открыть файл '$outputFile1' для записи.\n";
            }
        } else {
            echo "Повторяющиеся предложения не найдены.\n";
        }
        echo "<br>";
        readfile($outputFile1);
        ?>
    </div>


<?php require_once 'inc/footer.php'; ?>