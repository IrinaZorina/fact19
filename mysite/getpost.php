<?php include_once 'inc/head.php'; ?>
    <div class="getpost">
        <?php
        if (!empty($_POST['password']) && !empty($_POST['login'])) {
            if ($_POST['password'] == '12345' && $_POST['login'] == 'admin') {
                header('location: secret.php');
            }
        } ?>
        <br>
        <h2>Задание 3. Слайд 15 <br>
            Создать страницу для ввода имени пользователя (login) и пароля (passwd). Если пользователь вводит правильную
            пару (login/passwd), то сервер выдает страницу с сообщением, что доступ к секретным страницам открыт. Login
            предлагается выбирать из списка.
        </h2>
        <br>
        <?php
        if (!empty($_POST['password'])) {
            if ($_POST['password'] == 'qwe' && $_POST['login'] == 'user') {
                echo 'Вы вошли как пользователь';
            } else {
                echo 'Неверный пароль';
            }
        } ?>
        <form method="post">
            Выберете логин
            <select size="2" name="login">
                <option value="admin"> Админ</option>
                <option value="user"> Пользователь</option>
            </select>
            <br>
            Пароль
            <input type="password" name="password">
            <br>
            <input type="submit">
        </form>
        <br>
        <h2>Задание 4. Слайд 15 <br>
            Создайте форму генерации ссылки с параметром:
            Создайте форму и в ней добавьте поле со списком выбора – Лаб1, Лаб2, Лаб3, Лаб4
            При нажатии на кнопку должно быть сформирована ссылка следующего вида: phpcourse.php?l=3 , где 3 – это номер
            выбранной лабораторной работы.
        </h2>
        <?php
        if (isset($_GET['1'])) {
            $lab = $_GET['1'];
            echo "Лабораторная №:";
        }
        ?>
        <form action="phpcourse.php" method="get">
            <p> Выберете лабараторную работу</p>
            <select size="4" name="lab">
                <option value="1"> Лабараторная 1</option>
                <option value="2"> Лабараторная 2</option>
                <option value="3"> Лабараторная 3</option>
                <option value="4"> Лабараторная 4</option>
            </select>
            <Br>
            <button type="submit">Перейти</button>
        </form>
        <br>
        <h2>Задание 1. Слайд 16 <br>
            Отправить логины и комментарии на почту (значения должны сохраняться вместо тестового документа на
            электронный адрес).
            *Так как мы отправляем e-mail на локальном сервере, то письма будут сохраняться в папку
            \OpenServer\userdata\temp\email
        </h2>
        <br>
        <?php
        if (!empty($_POST['login']) && !empty($_POST['comment'])) {
            $login = (isset($_POST['login']));
            $comment = (isset($_POST['comment']));
            $mail = "kaifobot_og@gmail.com";
            $headers = "From: no-reply@example.com";
            if (mail($mail, $comment, $login, $headers)) {
                echo 'Письмо отправлено';
            } else {
                echo 'Письмо не отправлено';
            }
        }
        ?>

        <form method="post">
            <label> Логин: </label>
            <input type="text" name="login">
            <br>
            <label> Коментарий: </label> <br>
            <textarea name="comment" rows="5" cols="16"> </textarea>
            <br>
            <button type="submit"> Отправить</button>
        </form>
        <br>
        <h2>Задание 2. Слайд 16 <br>
            Создайте форму авторизации. Зашифруйте пароли и отправьте их на сервер.
        </h2>
        <?php
        $login = (isset($_POST['login']));
        $password = (isset($_POST['password']));
        if (!empty($_POST['password'])) {
            if ($_POST['password'] == 'qwe' && $_POST['login'] == 'user') {
                $hash = password_hash($password, PASSWORD_DEFAULT);
                $_POST['password'] = $hash;
                echo 'Вы авторизованы';
            } else {
                echo 'Неверный пароль';
            }
        }
        echo "<br>";
        print_r($_POST);
        ?>
        <br>
        <form method="post">
            Авторизация: <br>
            Логин:
            <input type="text" name="login">
            <br>
            Пароль:
            <input type="password" name="password">
            <br>
            <input type="submit">
        </form>
        <br>
        <h2>Задание 3. Слайд 16 <br>
            Создайте анкету на форме. Ответ на каждый из вопросов представьте с помощью переключателя («да» или «нет»).
            По умолчанию задайте везде значение «да».
            Напишите сценарий обработки анкеты: поставьте 1 балл, если был ответ «да» в вопросах с номерами 3, 9, 10,
            13, 14, 19 и «нет» в вопросах с номерами 1, 2, 4, 5, 6, 7, 8, 11, 12, 15, 16, 17, 18. Подсчитайте сумму
            набранных баллов:
            если она оказалась более 15, то результат: «У Вас покладистый характер»;
            если сумма в интервале от 8 до 15, то результат: «Вы не лишены недостатков, но с вами можно ладить»;
            если сумма менее 8 баллов, то результат: «Вашим друзьям можно посочувствовать».
            Отобразите на экране имя анкетируемого, фразу-результат анкетирования.
        </h2>
        <br>
        <?php

        $name = isset($_POST['name']) ? $_POST['name'] : 'Не указано';
        $answers = [
            'q1' => isset($_POST['q1']),
            'q2' => isset($_POST['q2']),
            'q3' => isset($_POST['q3']),
            'q4' => isset($_POST['q4']),
            'q5' => isset($_POST['q5']),
            'q6' => isset($_POST['q6']),
            'q7' => isset($_POST['q7']),
            'q8' => isset($_POST['q8']),
            'q9' => isset($_POST['q9']),
            'q10' => isset($_POST['q10']),
            'q11' => isset($_POST['q11']),
            'q12' => isset($_POST['q12']),
            'q13' => isset($_POST['q13']),
            'q14' => isset($_POST['q14']),
            'q15' => isset($_POST['q15']),
            'q16' => isset($_POST['q16']),
            'q17' => isset($_POST['q17']),
            'q18' => isset($_POST['q18']),
            'q19' => isset($_POST['q19']),
        ];
        $score = 0;
        $yes = ['q3', 'q9', 'q10', 'q13', 'q14', 'q19'];
        $no = ['q1', 'q2', 'q4', 'q5', 'q6', 'q7', 'q8', 'q11', 'q12', 'q15', 'q16', 'q17', 'q18'];
        foreach ($yes as $q) {
            if ($answers[$q] == 'yes') {
                $score++;
            }
        }
        foreach ($no as $q) {
            if ($answers[$q] == 'no') {
                $score++;
            }
        }
        if ($score > 15) {
            $res = "У вас покладистый характер";
        } elseif ($score >= 8 && $score <= 15) {
            $res = "Вы не лишены недостатков, но с вами можно ладить";
        } else {
            $res = "Вашим друзьям можно посочувствовать";
        }
        echo "Имя: $name";
        echo "<br>";
        echo "Результат: $res";
        echo "<br>";
        ?>

        <form method="post">
            <label for="name">Ваше имя:</label>
            <input type="text" name="name" id="name" required>
            <br>
            <p>Вопрос 1:</p>
            <label>
                <input type="radio" name="q1" value="yes" checked> Да
            </label>
            <label>
                <input type="radio" name="q1" value="no"> Нет
            </label>
            <p>Вопрос 2:</p>
            <label>
                <input type="radio" name="q2" value="yes" checked> Да
            </label>
            <label>
                <input type="radio" name="q2" value="no"> Нет
            </label>
            <br>
            <p>Вопрос 3:</p>
            <label>
                <input type="radio" name="q3" value="yes" checked> Да
            </label>
            <label>
                <input type="radio" name="q3" value="no"> Нет
            </label>
            <br>
            <p>Вопрос 4:</p>
            <label>
                <input type="radio" name="q4" value="yes" checked> Да
            </label>
            <label>
                <input type="radio" name="q4" value="no"> Нет
            </label>
            <br>
            <p>Вопрос 5:</p>
            <label>
                <input type="radio" name="q5" value="yes" checked> Да
            </label>
            <label>
                <input type="radio" name="q5" value="no"> Нет
            </label>
            <br>
            <p>Вопрос 6:</p>
            <label>
                <input type="radio" name="q6" value="yes" checked> Да
            </label>
            <label>
                <input type="radio" name="q6" value="no"> Нет
            </label>
            <br>
            <p>Вопрос 7:</p>
            <label>
                <input type="radio" name="q7" value="yes" checked> Да
            </label>
            <label>
                <input type="radio" name="q7" value="no"> Нет
            </label>
            <br>
            <p>Вопрос 8:</p>
            <label>
                <input type="radio" name="q8" value="yes" checked> Да
            </label>
            <label>
                <input type="radio" name="q8" value="no"> Нет
            </label>
            <br>
            <p>Вопрос 9:</p>
            <label>
                <input type="radio" name="q9" value="yes" checked> Да
            </label>
            <label>
                <input type="radio" name="q9" value="no"> Нет
            </label>
            <br>
            <p>Вопрос 10:</p>
            <label>
                <input type="radio" name="q10" value="yes" checked> Да
            </label>
            <label>
                <input type="radio" name="q10" value="no"> Нет
            </label>
            <br>
            <p>Вопрос 11:</p>
            <label>
                <input type="radio" name="q11" value="yes" checked> Да
            </label>
            <label>
                <input type="radio" name="q11" value="no"> Нет
            </label>
            <br>
            <p>Вопрос 12:</p>
            <label>
                <input type="radio" name="q12" value="yes" checked> Да
            </label>
            <label>
                <input type="radio" name="q12" value="no"> Нет
            </label>
            <br>
            <p>Вопрос 13:</p>
            <label>
                <input type="radio" name="q13" value="yes" checked> Да
            </label>
            <label>
                <input type="radio" name="q13" value="no"> Нет
            </label>
            <br>
            <p>Вопрос 14:</p>
            <label>
                <input type="radio" name="q14" value="yes" checked> Да
            </label>
            <label>
                <input type="radio" name="q14" value="no"> Нет
            </label>
            <br>
            <p>Вопрос 15:</p>
            <label>
                <input type="radio" name="q15" value="yes" checked> Да
            </label>
            <label>
                <input type="radio" name="q15" value="no"> Нет
            </label>
            <br>
            <p>Вопрос 16:</p>
            <label>
                <input type="radio" name="q16" value="yes" checked> Да
            </label>
            <label>
                <input type="radio" name="q16" value="no"> Нет
            </label>
            <br>
            <p>Вопрос 17:</p>
            <label>
                <input type="radio" name="q17" value="yes" checked> Да
            </label>
            <label>
                <input type="radio" name="q17" value="no"> Нет
            </label>
            <br>
            <p>Вопрос 18:</p>
            <label>
                <input type="radio" name="q18" value="yes" checked> Да
            </label>
            <label>
                <input type="radio" name="q18" value="no"> Нет
            </label>
            <br>
            <p>Вопрос 19:</p>
            <label>
                <input type="radio" name="q19" value="yes" checked> Да
            </label>
            <label>
                <input type="radio" name="q19" value="no"> Нет
            </label>
            <br>
            <br>

            <input type="submit">
        </form>


    </div>


<?php include_once 'inc/footer.php'; ?>