<?php require_once'inc/header.php'?>
<?php
session_start();
include "Class.php";
$db = new Database('MySQL-8.2', 'Ivan', 'defuses9diAbl', 'db_goryachikh');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_POST['login'];
    $pass = $_POST['password'];
    $user = new User($db, $user, $pass);
    $user->authenticate();
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
