<?php
require_once "header.php";
require_once "functions.php";

if(isset($_SESSION['is_logined']) && $_SESSION['is_logined']) header("Location: hello.php");

$form_error = false;

if (isset($_REQUEST["name"]) && isset($_REQUEST["pass"])) {
    require_once "db.php";

    $sql = 'INSERT INTO users (name, password) VALUES (:name, :password)';

    $stmt = $pdo->prepare($sql);
    $stmt->execute(['name' => $_REQUEST["name"], 'password' => password_hash(trim($_REQUEST["pass"]), PASSWORD_DEFAULT)]);

    $_SESSION['is_logined'] = true;
    header("Location: hello.php");
}

?>

<style>
    <?include "styles/form.css"?>
</style>

<form method="post">
    <h2>Регистрация</h2>
    <p>
        <label for="name">Имя:</label>
        <input type="text" name="name"  required />
    </p>
    <p>
        <label for="pass">Пароль:</label>
        <input type="password" name="pass"  required />
    </p>
    <button type="submit">
        Зарегистрироваться
    </button>
</form>

<?php
    if ($form_error) TextError("Ошибка регистрации!");
?>


<? require_once "footer.php"; ?>