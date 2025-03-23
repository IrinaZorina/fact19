<?php require_once 'include/header.php' ?>
<?php
session_start();
$login = (isset($_POST['login']));
$password = (isset($_POST['password']));
if (!empty($_POST['password'])) {
    if ($_POST['password'] == 'qwerty123456' && $_POST['login'] == 'zasyadko') {
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $_POST['password'] = $hash;
        $_SESSION['login'] = 'administrator';
        header('location: welcome.php');
    } else {
        echo 'Неверный пароль или логин';
    }
}
?>
<form method="post">
    Введите логин:
    <input type="text" name="login">
    <br>
    Введите Пароль
    <input type="password" name="password">
    <br>
    <button type="submit"> Вход</button>
    <br>

    Еще не зарегистрированы? <br>
    <button type="submit"> Регистрация</button>
</form>
<?php require_once 'include/footer.php' ?>
