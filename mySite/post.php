<?php require_once'inc/header.php'?>
<?php
if (!empty($_POST['password'])&& !empty($_POST['login'])) {
    if ($_POST['password'] == '12345' && $_POST['login'] == 'admin') {
        header('location: SecretPage.php');
    }
}?>
<body>
<p class="work1"> Задание 1. <br> Создать страницу для ввода имени пользователя (login) и пароля (passwd). Если пользователь вводит правильную пару (login/passwd), то сервер выдает страницу с сообщением, что доступ к секретным страницам открыт. Login предлагается выбирать из списка.</p>
<?php
if (!empty($_POST['password'])) {
    if ($_POST['password'] == '123456' && $_POST['login'] == 'user') {
        echo 'Вы вошли как пользователь';
    }else{
        echo 'Неверный пароль';
    }
}?>
<form method="post">
    Выберете логин
    <select size="2" name="login">
        <option value="admin"> Админ </option>
        <option value="user"> Пользователь </option>
    </select>
    <br>
    Пароль
    <input type="password" name="password">
    <Br>
    <input type="submit">
</form>
<p class="work2"> Задание 2.<br>Создайте форму генерации ссылки с параметром:
    Создайте форму и в ней добавьте поле со списком выбора – Лаб1, Лаб2, Лаб3, Лаб4
    При нажатии на кнопку должно быть сформирована ссылка следующего вида: phpcourse.php?l=3 , где 3 – это номер выбранной лабораторной работы.
</p>
<?php
if (isset($_GET['1'])) {
    $labnumber = $_GET['1'];
    echo "Вы выбрали лабараторную №:" ;
}
?>
<form action="phpcourse.php" method="Get">
    <p> Выберете лабараторную работу</p>
    <select size="4" name="laba">
        <option value="1"> Лабараторная 1 </option>
        <option value="2"> Лабараторная 2 </option>
        <option value="3"> Лабараторная 3 </option>
        <option value="4"> Лабараторная 4 </option>
    </select>
    <Br>
    <button type="submit">Перейти </button>
</form>
<p class="work3"> Задание 3. <br> Отправить логины и комментарии на почту (значения должны сохраняться вместо тестового документа на электронный адрес). </p>
<?php
if (!empty($_POST['login'])&&!empty($_POST['comment'])) {
    $login = (isset($_POST['login']));
    $comment = (isset($_POST['comment']));
    $mail = "goryachikh2468@gmail.com";
    $headers = "From: no-reply@example.com";
    if (mail($mail, $comment, $login ,$headers)) {
        echo 'Письмо отправлено';
    }else{
        echo 'Письмо не отправлено';
    }
}?>
<form method="post">
    <label> Логин: </label>
    <input type="text" name="login">
    <br>
    <label> Коментарий: </label>
    <textarea name="comment" rows="4" cols="16"> </textarea>
    <br>
    <button type="submit"> Отправить </button>
</form>
<p class="work4"> Задание 4. <br> Создайте форму авторизации. Зашифруйте пароли и отправьте их на сервер. </p>
<?php
$login = (isset($_POST['login']));
$password = (isset($_POST['password']));
if (!empty($_POST['password'])) {
    if ($_POST['password'] == 'mypass123' && $_POST['login'] == 'admin') {
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $_POST['password'] = $hash;
        echo 'Вы авторизованы';
    }
}
print_r($_POST);
echo "<br>";
?>
<form method="post">
    <label> Введите логин: </label> <br>
    <input type="text" name="login">
    <br>
    <label>Введите пароль: </label> <br>
    <input type="password" name="password"><br>
    <button type="submit">Авторизация</button><br>
</form>
<p class="work5"> Задание 5. Создайте анкету на форме. Ответ на каждый из вопросов представьте с помощью переключателя («да» или «нет»). По умолчанию задайте везде значение «да».
</p>
<?php
$name = isset($_POST['name']) ? $_POST['name'] : 'Не указано';
$answers = [
    'q1' => (isset($_POST['q1'])),
    'q2' => (isset($_POST['q2'])),
    'q3' => (isset($_POST['q3'])),
    'q4' => (isset($_POST['q4'])),
    'q5' => (isset($_POST['q5'])),
    'q6' => (isset($_POST['q6'])),
    'q7' => (isset($_POST['q7'])),
    'q8' => (isset($_POST['q8'])),
    'q9' => (isset($_POST['q9'])),
    'q10' => (isset($_POST['q10'])),
    'q11' => (isset($_POST['q11'])),
    'q12' => (isset($_POST['q12'])),
    'q13' => (isset($_POST['q13'])),
    'q14' => (isset($_POST['q14'])),
    'q15' => (isset($_POST['q15'])),
    'q16' => (isset($_POST['q16'])),
    'q17' => (isset($_POST['q17'])),
    'q18' => (isset($_POST['q18'])),
    'q19' => (isset($_POST['q19'])),
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
    <label> Ваше Имя: </label>
    <input type="text" name="name"><br>
    <p> Вопрос 1:</p>
    <input type="radio" name="q1" value="yes" checked > Да
    <input type="radio" name="q1" value="no"> Нет
    <p> Вопрос 2:</p>
    <input type="radio" name="q2" value="yes" checked> Да
    <input type="radio" name="q2" value="no"> Нет
    <p> Вопрос 3:</p>
    <input type="radio" name="q3" value="yes" checked> Да
    <input type="radio" name="q3" value="no"> Нет
    <p> Вопрос 4:</p>
    <input type="radio" name="q4" value="yes" checked> Да
    <input type="radio" name="q4" value="no"> Нет
    <p> Вопрос 5:</p>
    <input type="radio" name="q5" value="yes" checked> Да
    <input type="radio" name="q5" value="no"> Нет
    <p> Вопрос 6:</p>
    <input type="radio" name="q6" value="yes" checked> Да
    <input type="radio" name="q6" value="no"> Нет
    <p> Вопрос 7:</p>
    <input type="radio" name="q7" value="yes" checked> Да
    <input type="radio" name="q7" value="no"> Нет
    <p> Вопрос 8:</p>
    <input type="radio" name="q8" value="yes" checked> Да
    <input type="radio" name="q8" value="no"> Нет
    <p> Вопрос 9:</p>
    <input type="radio" name="q9" value="yes" checked> Да
    <input type="radio" name="q9" value="no"> Нет
    <p> Вопрос 10:</p>
    <input type="radio" name="q10" value="yes" checked> Да
    <input type="radio" name="q10" value="no"> Нет
    <p> Вопрос 11:</p>
    <input type="radio" name="q11" value="yes" checked> Да
    <input type="radio" name="q11" value="no"> Нет
    <p> Вопрос 12:</p>
    <input type="radio" name="q12" value="yes" checked> Да
    <input type="radio" name="q12" value="no"> Нет
    <p> Вопрос 13:</p>
    <input type="radio" name="q13" value="yes" checked> Да
    <input type="radio" name="q13" value="no"> Нет
    <p> Вопрос 14:</p>
    <input type="radio" name="q14" value="yes" checked> Да
    <input type="radio" name="q14" value="no"> Нет
    <p> Вопрос 15:</p>
    <input type="radio" name="q15" value="yes" checked> Да
    <input type="radio" name="q15" value="no"> Нет
    <p> Вопрос 16:</p>
    <input type="radio" name="q16" value="yes" checked> Да
    <input type="radio" name="q16" value="no"> Нет
    <p> Вопрос 17:</p>
    <input type="radio" name="q17" value="yes" checked> Да
    <input type="radio" name="q17" value="no" > Нет
    <p> Вопрос 18:</p>
    <input type="radio" name="q18" value="yes" checked> Да
    <input type="radio" name="q18" value="no"> Нет
    <p> Вопрос 19:</p>
    <input type="radio" name="q19" value="yes" checked> Да
    <input type="radio" name="q19" value="no"> Нет
    <br>
    <button type="submit">Отправить</button>
</form>
</body>
<?php require_once  'inc/footer.php'?>

