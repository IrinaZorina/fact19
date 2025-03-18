<?php
require_once "header.php";
require_once "functions.php";

if(isset($_SESSION['is_logined']) && $_SESSION['is_logined']) header("Location: hello.php");

$form_error = false;
$password = md5("VladPassword");
$get_name = isset($_REQUEST["name"]) ? $_REQUEST["name"] : NULL;
$get_passord = isset($_REQUEST["pass"]) ? $_REQUEST["pass"] : NULL;

if (isset($_REQUEST["name"]) && isset($_REQUEST["pass"])){
    if ($get_name === "Vlad" && md5($get_passord) === $password){
        $_SESSION['is_logined'] = true;
        header("Location: hello.php");
    } 
    else $form_error = true;
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
</form>

<?php
    if ($form_error) TextError("Неправильное имя или пароль!");
?>


<? require_once "footer.php"; ?>