<?php
// Подключение заголовочного файла
include '../header.php';

// Определение массива пользователей с хешированными паролями
$validUsers = [
    'user1' => '5f4dcc3b5aa765d61d8327deb882cf99', // md5("password")
    'user2' => 'e10adc3949ba59abbe56e057f20f883e', // md5("123456")
    'admin' => '21232f297a57a5a743894a0e4a801fc3'  // md5("admin")
];

// Обработка 1-й формы: ввод данных (логин, комментарии, языки, ОС)
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['aboutME'])) {
    $login = $_POST['login'] ?? 'Не указано';
    $aboutMe = $_POST['aboutME'] ?? 'Не указано';
    $learn = isset($_POST['learn']) ? implode(', ', $_POST['learn']) : 'Не выбрано';
    $os = $_POST['os'] ?? 'Не указано';

    echo "<div style='margin: 20px; text-align: center; border: 1px solid #ccc; padding: 10px;'>";
    echo "<h3>Ваши данные:</h3>";
    echo "Логин: " . htmlspecialchars($login) . "<br>";
    echo "О себе: " . htmlspecialchars($aboutMe) . "<br>";
    echo "Изучаемые языки: " . htmlspecialchars($learn) . "<br>";
    echo "Операционная система: " . htmlspecialchars($os) . "<br>";
    echo "</div>";
}

// Обработка 2-3 формы: авторизация с выбором логина
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['password']) && !isset($_POST['auth_password']) && !isset($_POST['survey_name'])) {
    $login = $_POST['login'] ?? 'Не указано';
    $password = $_POST['password'] ?? '';
    $hashedPassword = md5($password);

    if (isset($validUsers[$login]) && $validUsers[$login] === $hashedPassword) {
        echo "Доступ к секретным страницам открыт.<br>";
    } else {
        echo "Ошибка: Неверный логин или пароль.<br>";
    }

    echo "Имя пользователя: " . htmlspecialchars($login) . "<br>";
    echo "Хешированный пароль (MD5): " . $hashedPassword . "<br>";
}

// Обработка 4-й формы: генерация ссылки
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['links'])) {
    $labNumber = $_GET['links'];
    $link = "phpcourse.php?l=" . $labNumber;
    echo "Сгенерированная ссылка: <a href=\"" . htmlspecialchars($link) . "\">" . htmlspecialchars($link) . "</a><br>";
}

// Обработка 5-й задачи: отправка логина и комментариев на email
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !isset($_POST['survey_name'])) {
    $login = $_POST['login'] ?? 'Не указано';
    $comments = $_POST['aboutME'] ?? 'Комментариев нет';

    $to = "test@example.com";
    $subject = "Логин и комментарии от пользователя";
    $message = "Логин: " . $login . "\nКомментарии: " . $comments;
    $headers = "From: sender@example.com\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo "Логин и комментарии успешно отправлены на почту!<br>";
    } else {
        echo "Ошибка при отправке email.<br>";
    }
}

// Обработка 6-й формы: авторизация с хешированием пароля
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['auth_password'])) {
    $login = $_POST['auth_login'] ?? '';
    $password = $_POST['auth_password'] ?? '';
    $hashedPassword = md5($password);

    if (isset($validUsers[$login]) && $validUsers[$login] === $hashedPassword) {
        echo "Авторизация успешна! Добро пожаловать, " . htmlspecialchars($login) . "!<br>";
    } else {
        echo "Ошибка: Неверный логин или пароль (форма авторизации).<br>";
    }
}

// Обработка 7-й формы: анкета
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['survey_name'])) {
    $name = $_POST['survey_name'] ?? 'Не указано';
    $score = 0;

    // Вопросы, где "да" даёт 1 балл
    $yesQuestions = [3, 9, 10, 13, 14, 19];
    // Вопросы, где "нет" даёт 1 балл
    $noQuestions = [1, 2, 4, 5, 6, 7, 8, 11, 12, 15, 16, 17, 18];

    // Подсчёт баллов
    for ($i = 1; $i <= 19; $i++) {
        $answer = $_POST["question_$i"] ?? 'нет';
        if (in_array($i, $yesQuestions) && $answer === 'да') {
            $score++;
        } elseif (in_array($i, $noQuestions) && $answer === 'нет') {
            $score++;
        }
    }

    // Определение результата
    if ($score > 15) {
        $result = "У Вас покладистый характер";
    } elseif ($score >= 8 && $score <= 15) {
        $result = "Вы не лишены недостатков, но с вами можно ладить";
    } else {
        $result = "Вашим друзьям можно посочувствовать";
    }

    // Вывод результата
    echo "<div style='margin: 20px; text-align: center; border: 1px solid #ccc; padding: 10px;'>";
    echo "<h3>Результат анкетирования:</h3>";
    echo "Имя: " . htmlspecialchars($name) . "<br>";
    echo "Сумма баллов: " . $score . "<br>";
    echo "Результат: " . $result . "<br>";
    echo "</div>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Мои задания</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        h3 { color: #333; }
        form { margin-bottom: 20px; padding: 10px; border: 1px solid #ddd; }
        p { margin: 5px 0; }
    </style>
</head>
<body>
    <h3>1. Форма с текстовым полем, многострочным полем, группой выключателей и переключателей</h3>
    <form action="dates.php" method="post">
        <p>
            Логин: <input type="text" name="login">
        </p>
        <p>
            Расскажите о себе: <textarea name="aboutME" placeholder="Введите текст"></textarea>
        </p>
        <p>
            Изучаемый язык:
            <input type="checkbox" name="learn[]" value="php"> PHP
            <input type="checkbox" name="learn[]" value="html"> HTML
            <input type="checkbox" name="learn[]" value="bitrix"> Bitrix
        </p>
        <p>
            Ваша операционная система:
            <input type="radio" name="os" value="windows"> Windows
            <input type="radio" name="os" value="linux"> Linux
        </p>
        <p>
            <input type="submit" value="Отправить">
        </p>
    </form>

    <h3>2-3. Форма для ввода логина и пароля</h3>
    <p>Необходимо вывести на экран имя пользователя, а пароль захешировать. Если пользователь вводит правильную пару (login/passwd), сервер выдаёт сообщение о доступе к секретным страницам. Логин выбирается из списка.</p>
    <form action="dates.php" method="post">
        <p>
            Логин:
            <select name="login">
                <option value="user1">user1</option>
                <option value="user2">user2</option>
                <option value="admin">admin</option>
            </select>
        </p>
        <p>
            Пароль: <input type="password" name="password">
        </p>
        <p>
            <input type="submit" value="Войти">
        </p>
    </form>

    <h3>4. Форма генерации ссылки с параметром</h3>
    <p>Создайте форму с выбором лабораторной работы (Лаб1–Лаб4). При нажатии на кнопку формируется ссылка вида: phpcourse.php?l=3, где 3 — номер выбранной лаборатории.</p>
    <form action="dates.php" method="get">
        <p>
            Ссылки:
            <select name="links">
                <option value="1">Лаб1</option>
                <option value="2">Лаб2</option>
                <option value="3">Лаб3</option>
                <option value="4">Лаб4</option>
            </select>
        </p>
        <p>
            <input type="submit" value="Сгенерировать">
        </p>
    </form>

    <h3>5. Отправка логина и комментариев на email</h3>
    <p>Данные из форм отправляются на email и сохраняются в \OpenServer\userdata\temp\email.</p>
    <!-- Эта задача обрабатывается автоматически при отправке форм 1 и 2-3 -->

    <h3>6. Форма авторизации</h3>
    <p>Создайте форму авторизации. Пароли зашифровываются и отправляются на сервер для проверки.</p>
    <form action="dates.php" method="post">
        <p>
            Логин:
            <select name="auth_login">
                <option value="user1">user1</option>
                <option value="user2">user2</option>
                <option value="admin">admin</option>
            </select>
        </p>
        <p>
            Пароль: <input type="password" name="auth_password">
        </p>
        <p>
            <input type="submit" value="Войти">
        </p>
    </form>

    <h3>7. Анкета</h3>
    <p>Ответьте на вопросы, выбрав "да" или "нет". После отправки будет подсчитан ваш результат.</p>
    <form action="dates.php" method="post">
        <p>
            Ваше имя: <input type="text" name="survey_name" required>
        </p>
        <?php for ($i = 1; $i <= 19; $i++): ?>
            <p>
                Вопрос <?php echo $i; ?>:
                <input type="radio" name="question_<?php echo $i; ?>" value="да" checked> Да
                <input type="radio" name="question_<?php echo $i; ?>" value="нет"> Нет
            </p>
        <?php endfor; ?>
        <p>
            <input type="submit" value="Отправить анкету">
        </p>
    </form>
</body>
</html>