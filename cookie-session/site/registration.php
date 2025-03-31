<?php
include 'ins/header.php';
if($_POST) {
    $login = $_POST['login'];
    $password = md5($_POST['password']);
}
?>

<form action="user.php" method="post" class="authorization">
    <h2>Регистрация</h2>
    <label for="login">Логин: </label>
    <input type="text" name="login" id="login" required>
    <label for="password">Пароль: </label>
    <input type="password" name="password" id="password" required>
    <input type="submit" class="submitR" value="Зарегистрироваться">
</form>
<?php include 'ins/footer.php'; ?>
