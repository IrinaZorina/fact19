<?php
/*isset($_POST['login']) ? $_POST['login'] : 'null';
isset($_POST['about']) ? $_POST['about'] : 'null';
isset($_POST['sex']) ? $_POST['sex'] : 'null';
isset($_POST['age']) ? $_POST['age'] : 'null';*/
?>
<?php require_once 'inc/header.php' ?>
    <div class="homework">
        <p style="text-align: center">Слайд 15</p>
        <h3 id="one">1. Создайте форму, состоящую из текстового поля, многострочного поля, группы выключателей, группы
            переключателей. Выведите на экран значения, которые ввел/выбрал пользователь.</h3>
        <div class="hw1">
            <form action="#one" method="post" enctype="multipart/form-data"> <!--//post, enctype для загрузки файла-->
                Логин <input type="text" name="login"><br><br>
                О себе <textarea name="about"> </textarea><br><br>
                <fieldset style="display: inline-block">
                    <legend>Пол:</legend>

                    <div>
                        <input type="radio" name="sex" value="male"/>
                        <label for="male">Мужской</label>
                    </div>

                    <div>
                        <input type="radio" name="sex" value="female"/>
                        <label for="female">Женский</label>
                    </div>
                </fieldset>
                <br>
                <fieldset style="display: inline-block">
                    <legend>Возраст:</legend>

                    <div>
                        <input type="radio" name="age" value=">25"/>
                        <label for=">25">Младше 25</label>
                    </div>

                    <div>
                        <input type="radio" name="age" value="25-40"/>
                        <label for="25-40">25 - 40</label>
                    </div>

                    <div>
                        <input type="radio" name="age" value="<40"/>
                        <label for="<40>">Старше 40</label>
                    </div>
                </fieldset>
                <br><br>
                <input type="submit">
            </form>
            <br>
            <?= isset($_POST['login']) ? $_POST['login'] : '' ?><br>
            <?= isset($_POST['about']) ? $_POST['about'] : '' ?><br>
            <?= isset($_POST['sex']) ? $_POST['sex'] : '' ?><br>
            <?= isset($_POST['age']) ? $_POST['age'] : '' ?><br>
        </div>
        <h3>2. Дана форма для ввода логина и пароля. Необходимо вывести на экран имя пользователя, а пароль захешировать
            и сохранить его в массив $_POST.</h3>
        <div class="hw2">
            <form id="two" action="#two" method="post">
                Login: <input type="text" name="log">
                <span>&emsp;<?= isset($_POST['log']) ? $_POST['log'] : '' ?></span><br><br><br>
                Password: <input type="password" name="pas">
                <span>&emsp;<?= isset($_POST['pas']) ? md5($_POST['pas']) : '' ?></span><br><br>
                <input type="submit">
            </form>
        </div>
        <h3>3. Создать страницу для ввода имени пользователя (login) и пароля (passwd). Если пользователь вводит
            правильную пару (login/passwd), то сервер выдает страницу с сообщением, что доступ к секретным страницам
            открыт. Login предлагается выбирать из списка.</h3>
        <div class="hw3">
            <form id="three" action="#three" method="post">
                <label for="log1">Логин: </label>
                <select name="log1" ">
                <option value='admin'>Admin</option>
                <option value='user'>User</option>
                <option value='guest'>Guest</option>
                </select>
                <br><br>
                Пароль: <input type="password" name="pas1">
                <br><br>
                <input type="submit">
            </form>
            <br>
            <?php $login = isset($_POST['log1']) ? $_POST['log1'] : '';
            $passwd = isset($_POST['pas1']) ? md5($_POST['pas1']) : '';
            if ($login == 'admin' && $passwd == md5(123) || $login == 'user' && $passwd == md5(456) || $login == 'guest' && $passwd == md5(789)) {
                echo 'Доступ к секретным страницам открыт!';
            } elseif ($login == '') echo '';
            else echo 'Пароль неверный :(';
            ?>
        </div>

        <h3>4. Создайте форму генерации ссылки с параметром:
            <ul>
                <li>Создайте форму и в ней добавьте поле со списком выбора – Лаб1, Лаб2, Лаб3, Лаб4;</li>
                <li>При нажатии на кнопку должно быть сформирована ссылка следующего вида: phpcourse.php?l=3 , где 3 –
                    это номер выбранной лабораторной работы.
                </li>
            </ul>
        </h3>
        <div class="hw4">
            <form id="four" action="#four" method="get">
                <label for="l">Параметр: </label>
                <select name="l" ">
                <option value='1'>Лаб1</option>
                <option value='2'>Лаб2</option>
                <option value='3'>Лаб3</option>
                <option value='4'>Лаб4</option>
                </select>
                <br><br>
                <input type="submit" value="Получить ссылку">
            </form>
            <br>
            <?php $param = isset($_GET['l']) ? $_GET['l'] : '';
            if ($param <> '') {
                $url = 'https://portfolio/get_post.php?l=' . $param;
                echo $url;
            }
            //echo 'Доступ к секретным страницам открыт!';
            ?>
        </div>

        <p style="text-align: center">Слайд 16</p>
        <h3>1. Отправить логины и комментарии на почту (значения должны сохраняться вместо тестового документа на
            электронный адрес).<br>
            &emsp;*Так как мы отправляем e-mail на локальном сервере, то письма будут сохраняться в папку
            \OpenServer\userdata\temp\email</h3>
        <div class="hw5">
            <form id="five" action="#five" method="post">
                Логин: <input type="text" name="log2"><br><br>
                Комментарий: <textarea name="comm"> </textarea><br><br>
                <input type="submit" value="Отправить на почту">
            </form>
            <br>
            <?php
            $login = isset($_POST['log2']) ? $_POST['log2'] : '';
            $comm = isset($_POST['comm']) ? $_POST['comm'] : '';
            if ($login <> '' && $comm <> '') {
                $headers = 'From: 1_1<info@address.com>' . "\r\n";

                $message = "Логин: " . $login . "\r\nКомментарий: " . $comm;
                mail('mail@example.com', 'Данные для доступа', $message, $headers);
                echo "Письмо отправлено";
            }
            ?>
        </div>
        <h3>2. Создайте форму авторизации. Зашифруйте пароли и отправьте их на сервер.</h3>
        <div class="hw6">
            <form id="six" action="#six" method="post">
                Логин: <input type="text" name="log3"><br><br>
                Пароль: <input type="password" name="pas3"><br><br>
                <input type="submit">
            </form>
            <br>
            <?php
            $login = isset($_POST['log3']) ? $_POST['log3'] : '';
            $password = isset($_POST['pas3']) ? $_POST['pas3'] : '';
            $hash = md5($password);

            if ($login == 'admin' && $hash == md5(123)) {
                echo 'Авторизация прошла успешно!';
            } elseif ($login == '') echo '';
            else echo 'Логин / Пароль неверный :(';

            if ($login <> '' && $password <> '') {
                $headers = 'From: 1_1<info@address.com>' . "\r\n";

                $message = "Логин: " . $login . "\r\nПароль: " . $password . "\r\nХэш: " . $hash;
                mail('mail@example.com', 'Данные для доступа', $message, $headers);
                echo "<br>Письмо отправлено";
            }
            ?>
        </div>
        <h3 id="seven" >3. Создайте анкету на форме. Ответ на каждый из вопросов представьте с помощью переключателя («да» или
            «нет»). По умолчанию задайте везде значение «да».<br>
            &emsp;Напишите сценарий обработки анкеты: поставьте 1 балл, если был ответ «да» в вопросах с номерами 3, 9,
            10, 13, 14, 19 и «нет» в вопросах с номерами 1, 2, 4, 5, 6, 7, 8, 11, 12, 15, 16, 17, 18. Подсчитайте сумму
            набранных баллов:
            <ul>
                <li>если она оказалась более 15, то результат: «У Вас покладистый характер»;</li>
                <li>если сумма в интервале от 8 до 15, то результат: «Вы не лишены недостатков, но с вами можно
                    ладить»;
                </li>
                <li>если сумма менее 8 баллов, то результат: «Вашим друзьям можно посочувствовать».</li>
            </ul>
            Отобразите на экране имя анкетируемого, фразу-результат анкетирования.
        </h3>
        <div class="hw7">
            <form action="#seven" method="post">
                Имя: <input type="text" name="name4">
                <?php
                $name = isset($_POST['name4']) ? $_POST['name4'] : 'user';
                $yes = [3, 9, 10, 13, 14, 19];
                $no = [1, 2, 4, 5, 6, 7, 8, 11, 12, 15, 16, 17, 18];
                $N = 0;
                foreach ($yes as $item) {
                    if (isset($_POST['quest'.$item]) ? $_POST['quest'.$item] : '' == 'yes') {
                        $N++;
                    }
                }
                foreach ($no as $item) {
                    if (isset($_POST['quest'.$item]) ? $_POST['quest'.$item] : '' == 'no') {
                        $N++;
                    }
                }
                if ($N) {
                    echo '&emsp;<b>'.$name;
                    if ($N > 15) {
                        echo ", у Вас покладистый характер</b>";
                    } elseif ($N > 8 && $N < 15) {
                        echo ", Вы не лишены недостатков, но с вами можно ладить</b>";
                    } else {
                        echo ", Вашим друзьям можно посочувствовать</b>";
                    }
                }
                ?>
                <br><br>
                <fieldset style="display: inline-block">
                    <legend>Вопрос 1:</legend>
                    <div>
                        <input type="radio" name="quest1" value="yes" checked/>
                        <label for="quest">Да</label>

                        <input type="radio" name="quest1" value="no"/>
                        <label for="quest">Нет</label>
                    </div>
                </fieldset>
                <br>
                <fieldset style="display: inline-block">
                    <legend>Вопрос 2:</legend>
                    <div>
                        <input type="radio" name="quest2" value="yes" checked/>
                        <label for="quest">Да</label>

                        <input type="radio" name="quest2" value="no"/>
                        <label for="quest">Нет</label>
                    </div>
                </fieldset>
                <br>
                <fieldset style="display: inline-block">
                    <legend>Вопрос 3:</legend>
                    <div>
                        <input type="radio" name="quest3" value="yes" checked/>
                        <label for="quest">Да</label>

                        <input type="radio" name="quest3" value="no"/>
                        <label for="quest">Нет</label>
                    </div>
                </fieldset>
                <br>
                <fieldset style="display: inline-block">
                    <legend>Вопрос 4:</legend>
                    <div>
                        <input type="radio" name="quest4" value="yes" checked/>
                        <label for="quest">Да</label>

                        <input type="radio" name="quest4" value="no"/>
                        <label for="quest">Нет</label>
                    </div>
                </fieldset>
                <br>
                <fieldset style="display: inline-block">
                    <legend>Вопрос 5:</legend>
                    <div>
                        <input type="radio" name="quest5" value="yes" checked/>
                        <label for="quest">Да</label>

                        <input type="radio" name="quest5" value="no"/>
                        <label for="quest">Нет</label>
                    </div>
                </fieldset>
                <br>
                <fieldset style="display: inline-block">
                    <legend>Вопрос 6:</legend>
                    <div>
                        <input type="radio" name="quest6" value="yes" checked/>
                        <label for="quest">Да</label>

                        <input type="radio" name="quest6" value="no"/>
                        <label for="quest">Нет</label>
                    </div>
                </fieldset>
                <br>
                <fieldset style="display: inline-block">
                    <legend>Вопрос 7:</legend>
                    <div>
                        <input type="radio" name="quest7" value="yes" checked/>
                        <label for="quest">Да</label>

                        <input type="radio" name="quest7" value="no"/>
                        <label for="quest">Нет</label>
                    </div>
                </fieldset>
                <br>
                <fieldset style="display: inline-block">
                    <legend>Вопрос 8:</legend>
                    <div>
                        <input type="radio" name="quest8" value="yes" checked/>
                        <label for="quest">Да</label>

                        <input type="radio" name="quest8" value="no"/>
                        <label for="quest">Нет</label>
                    </div>
                </fieldset>
                <br>
                <fieldset style="display: inline-block">
                    <legend>Вопрос 9:</legend>
                    <div>
                        <input type="radio" name="quest9" value="yes" checked/>
                        <label for="quest">Да</label>

                        <input type="radio" name="quest9" value="no"/>
                        <label for="quest">Нет</label>
                    </div>
                </fieldset>
                <br>
                <fieldset style="display: inline-block">
                    <legend>Вопрос 10:</legend>
                    <div>
                        <input type="radio" name="quest10" value="yes" checked/>
                        <label for="quest">Да</label>

                        <input type="radio" name="quest10" value="no"/>
                        <label for="quest">Нет</label>
                    </div>
                </fieldset>
                <br>
                <fieldset style="display: inline-block">
                    <legend>Вопрос 11:</legend>
                    <div>
                        <input type="radio" name="quest11" value="yes" checked/>
                        <label for="quest">Да</label>

                        <input type="radio" name="quest11" value="no"/>
                        <label for="quest">Нет</label>
                    </div>
                </fieldset>
                <br>
                <fieldset style="display: inline-block">
                    <legend>Вопрос 12:</legend>
                    <div>
                        <input type="radio" name="quest12" value="yes" checked/>
                        <label for="quest">Да</label>

                        <input type="radio" name="quest12" value="no"/>
                        <label for="quest">Нет</label>
                    </div>
                </fieldset>
                <br>
                <fieldset style="display: inline-block">
                    <legend>Вопрос 13:</legend>
                    <div>
                        <input type="radio" name="quest13" value="yes" checked/>
                        <label for="quest">Да</label>

                        <input type="radio" name="quest13" value="no"/>
                        <label for="quest">Нет</label>
                    </div>
                </fieldset>
                <br>
                <fieldset style="display: inline-block">
                    <legend>Вопрос 14:</legend>
                    <div>
                        <input type="radio" name="quest14" value="yes" checked/>
                        <label for="quest">Да</label>

                        <input type="radio" name="quest14" value="no"/>
                        <label for="quest">Нет</label>
                    </div>
                </fieldset>
                <br>
                <fieldset style="display: inline-block">
                    <legend>Вопрос 15:</legend>
                    <div>
                        <input type="radio" name="quest15" value="yes" checked/>
                        <label for="quest">Да</label>

                        <input type="radio" name="quest15" value="no"/>
                        <label for="quest">Нет</label>
                    </div>
                </fieldset>
                <br>
                <fieldset style="display: inline-block">
                    <legend>Вопрос 16:</legend>
                    <div>
                        <input type="radio" name="quest16" value="yes" checked/>
                        <label for="quest">Да</label>

                        <input type="radio" name="quest16" value="no"/>
                        <label for="quest">Нет</label>
                    </div>
                </fieldset>
                <br>
                <fieldset style="display: inline-block">
                    <legend>Вопрос 17:</legend>
                    <div>
                        <input type="radio" name="quest17" value="yes" checked/>
                        <label for="quest">Да</label>

                        <input type="radio" name="quest17" value="no"/>
                        <label for="quest">Нет</label>
                    </div>
                </fieldset>
                <br>
                <fieldset style="display: inline-block">
                    <legend>Вопрос 18:</legend>
                    <div>
                        <input type="radio" name="quest18" value="yes" checked/>
                        <label for="quest">Да</label>

                        <input type="radio" name="quest18" value="no"/>
                        <label for="quest">Нет</label>
                    </div>
                </fieldset>
                <br>
                <fieldset style="display: inline-block">
                    <legend>Вопрос 19:</legend>
                    <div>
                        <input type="radio" name="quest19" value="yes" checked/>
                        <label for="quest">Да</label>

                        <input type="radio" name="quest19" value="no"/>
                        <label for="quest">Нет</label>
                    </div>
                </fieldset>
                <br>

                <br>
                <input type="submit" value="Результат">
            </form>
            <br>

        </div>

    </div>
<?php require_once 'inc/footer.php' ?>