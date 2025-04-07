<?php
session_start();
include 'ins/header.php';
include 'config.php';
include 'classes/Database.php';
include 'classes/Users.php';

$database = new Database();
$db = $database->connect();
$userClass = new User($db);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = $_POST['login'];
    $password = $_POST['password'];

    if ($userClass->loginExists($login)) {
        echo "Этот логин уже занят. Пожалуйста, выберите другой.";
    } else {
        if ($userClass->register($login, $password)) {
            $_SESSION['login'] = $login;
            header("Location: user.php");
            exit();
        } else {
            echo "Ошибка регистрации.";
        }
    }
}
?>

<form action="" method="post" class="authorization">
    <h2>Регистрация</h2>
    <label for="login">Логин</label>
    <input type="text" name="login" id="login" required>
    <label for="password">Пароль</label>
    <input type="password" name="password" id="password" required>
    <input type="submit" class="submitR" value="Зарегистрироваться">
</form>
<?php include 'ins/footer.php'; ?>
