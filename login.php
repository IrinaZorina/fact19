<?php
require_once "header.php";
require_once "functions.php";
include "classes/Auth.php";

if(isset($_SESSION['user_id'])) header("Location: hello.php");

$form_error = false;

if (isset($_REQUEST["name"]) && isset($_REQUEST["pass"])) {
    $login = new Auth(trim($_REQUEST["name"]), trim($_REQUEST['pass']));
    
    if($login->Login()) {
        header("Location: hello.php");
        exit;
    } else {
        $form_error = true;
    }
}

?>

<style>
    <?include "styles/form.css"?>
</style>

<form method="post">
    <h2>Авторизация</h2>
    <p>
        <label for="name">Имя:</label>
        <input type="text" name="name"  required />
    </p>
    <p>
        <label for="pass">Пароль:</label>
        <input type="password" name="pass"  required />
    </p>
    <button type="submit">
        Авторизоваться
    </button>
    <a href="registration.php">Зарегистрироваться</a>
</form>
<?php
    if ($form_error) TextError("Неправильное имя или пароль!");
?>


<? require_once "footer.php"; ?>