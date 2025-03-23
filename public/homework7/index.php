<?php require $_SERVER['DOCUMENT_ROOT'] . '/../src/templates/_header.php'; ?>
<main class="main">
    <div class="section">
        <h1 class="title content__title">Задания на файлы</h1>
        <div class="task">
            <h2 class="task__title">Даны два файла, состоящие из предложений. Создать третий файл, содержащий все
                предложения, которые есть хотя бы в одном из файлов. Повторы не добавлять в третий файл.
                Файлы лежат в public/homework7
            </h2>
            <div class="task__answer">
                <?php

                $fileA = file_get_contents('a.txt');
                $fileB = file_get_contents('b.txt');

                echo 'Файл A:' . '<br>';
                echo '<pre>';
                print_r($fileA);
                echo '</pre>';
                echo '<br>';

                $fileAArray = explode(". ", $fileA);
                $fileBArray = explode(". ", $fileB);

                echo 'Файл B:' . '<br>';
                echo '<pre>';
                print_r($fileB);
                echo '</pre>';
                echo '<br>';

                $fileCText = implode('. ', str_replace('.', '', array_unique(array_merge($fileAArray, $fileBArray)))) . '.';
                fwrite(fopen("c.txt", "w"), $fileCText);

                echo 'Результат:' . '<br>';
                echo '<pre>';
                print_r($fileCText);
                echo '</pre>';
                echo '<br>';
                ?>
            </div>
        </div>
        <div class="task">
            <h2 class="task__title">Даны два файла, состоящие из предложений. Создать третий файл, содержащий все
                повторяющиеся предложения.
                Файлы лежат в public/homework7
            </h2>
            <div class="task__answer">
                <?php

                $fileA = file_get_contents('a.txt');
                $fileB = file_get_contents('b.txt');

                echo 'Файл A:' . '<br>';
                echo '<pre>';
                print_r($fileA);
                echo '</pre>';
                echo '<br>';

                $fileAArray = explode(". ", $fileA);
                $fileBArray = explode(". ", $fileB);

                echo 'Файл B:' . '<br>';
                echo '<pre>';
                print_r($fileB);
                echo '</pre>';
                echo '<br>';

                $fileCText = implode(' ', array_intersect($fileAArray, $fileBArray)) . '.';
                fwrite(fopen("d.txt", "w"), $fileCText);

                echo 'Результат:' . '<br>';
                echo '<pre>';
                print_r($fileCText);
                echo '</pre>';
                echo '<br>';
                ?>
            </div>
        </div>
        <div class="task">
            <h2 class="task__title">Загрузка файлов с сортировкой по папкам.
                Результаты лежат в папке public/homework7/upload
            </h2>
            <div class="task__answer">
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if ($_FILES["file"]["error"] > 0) {
                        echo "Ошибка: " . $_FILES["file"]["error"] . "<br>";
                    } else {
                        $fileFullName = $_FILES["file"]["name"];

                        $fileParts = explode('.', $fileFullName);

                        $fileExtension = "." . array_pop($fileParts);
                        $fileName = implode('.', $fileParts);

                        $path = match ($fileExtension) {
                            '.png' => $path = "upload/images/" . $fileName . $fileExtension,
                            '.mp4' => $path = "upload/videos/" . $fileName . $fileExtension,
                            '.txt' => $path = "upload/text/" . $fileName . $fileExtension,
                        };

                        move_uploaded_file($_FILES["file"]['tmp_name'], $path);
                    }
                }
                ?>

                <div class="form__group">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <input type="file" name="file"><br>
                        <button class="form__submit">Отправить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
<?php require $_SERVER['DOCUMENT_ROOT'] . '/../src/templates/_footer.php'; ?>
</div>
<script src="../assets/js/hamburger-menu.js"></script>
</body>
</html>