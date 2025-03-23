<?php require_once'inc/header.php'?>
<?php
session_start();
$login = (isset($_POST['login']));
$password = (isset($_POST['password']));
if (!empty($_POST['password'])&& !empty($_POST['login'])) {
    if ($_POST['password'] == 'mypass123' && $_POST['login'] == 'admin') {
        $_SESSION['login'] = 'Admin';
        header('location: welcome.php');
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $_POST['password'] = $hash;
    }
}
?>
<p class="form_text">Авторизация</p>
<form class="form_aut" method="post">
    Выберете логин
    <input type="text" name="login">
    <br>
    Пароль
    <input type="password" name="password">
    <Br>
    <input type="submit">
</form>
<?php require_once  'inc/footer.php'?>
