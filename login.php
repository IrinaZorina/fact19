<?php
require_once "header.php";
require_once "functions.php";

if(isset($_SESSION['is_logined']) && $_SESSION['is_logined']) header("Location: hello.php");

$form_error = false;

$name = isset($_REQUEST["name"]) ? trim($_REQUEST["name"]) : NULL;
$user_password = isset($_REQUEST["pass"]) ? trim($_REQUEST['pass']) : NULL;


if ($name != NULL && $user_password != NULL){
    require_once "db.php";

    $sql = "SELECT * FROM users WHERE name=?";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([$name]);
    $user = $stmt->fetch();

    if ($user && password_verify($user_password, $user['password'])){
        $_SESSION['is_logined'] = true;
        header("Location: hello.php");
        exit;
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
    <a href="registration.php">Зарегистрироваться</a>
</form>
<?php
    if ($form_error) TextError("Неправильное имя или пароль!");
?>


<? require_once "footer.php"; ?>