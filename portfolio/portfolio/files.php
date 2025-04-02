<?php require_once 'inc/header.php';

?>
        <div class="homework">
            <h3>4. Даны два файла, состоящие из предложений. Создать третий файл, содержащий все предложения, которые есть хотя бы в одном из файлов. Повторы не добавлять в третий файл.</h3>
            <div class="hw1">
                <?php

                $file1 = file_get_contents('1.txt');
                $file2 = file_get_contents('2.txt');

                echo "1-ый файл:<br>$file1";
                echo "<br><br>2-ой файл:<br>$file2";


                $array1 = explode(".", $file1);
                $array2 = explode(".", $file2);

                $uniq1 = array_diff($array1, $array2);
                $uniq2 = array_diff($array2, $array1);
                $file3 = implode('. ', $uniq1) . '. ' . implode('. ', $uniq2) . '.';

                file_put_contents('3_4.txt', $file3);

                echo "<br><br>3-ий файл:<br>$file3";
                ?>
            </div>
            <h3>5. Даны два файла, состоящие из предложений. Создать третий файл, содержащий все повторяющиеся предложения.</h3>
            <div class="hw2">
                <?php

                $file1 = file_get_contents('1.txt');
                $file2 = file_get_contents('2.txt');

                echo "1-ый файл:<br>$file1";
                echo "<br><br>2-ой файл:<br>$file2";

                $array1 = explode(".", $file1);
                $array2 = explode(".", $file2);

                $fileCText = implode('. ', array_intersect($array1, $array2));

                file_put_contents('3_5.txt', $file3);

                echo "<br><br>3-ий файл:<br>$file3";
                ?>
            </div>

        </div>
<?php require_once 'inc/footer.php'?>