<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $comment = $_POST['comment'];

    print_r($_POST);

    $file_path = __DIR__ . '/text.txt';
    // не получалось записать данные в \OpenServer\userdata\temp\email

    $file = fopen($file_path, 'a+');

    if ($file) {
        $data_to_save = "Email: $email\nКомментарий: $comment\n\n";

        fwrite($file, $data_to_save);

        fclose($file);

        echo "Данные успешно сохранены в файл!";
    } else {
        echo "Ошибка при открытии файла.";
    }
} else {
    echo "<h2>Введите данные</h2>";
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <label for="email">Почта</label>
    <input type="email" id="email" name="email" required><br><br>
    <label for="comment">Комментарий</label>
    <input type="text" id="comment" name="comment" required><br><br>
    <input type="submit" value="Отправить">
</form>
</body>
</html>
