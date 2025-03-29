<?php require_once'inc/header.php'?>
<?php
session_start();
include 'inc/db_conn.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_POST['login'];
    $pass = ($_POST['password']);
    $sql = "SELECT * FROM user WHERE login = '$user' and password = '$pass'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if ($row) {
            $hash = password_hash($pass, PASSWORD_DEFAULT);
            $_SESSION['password'] = $hash;
            $_SESSION['login'] = $user;
            header('Location: welcome.php');
        } else {
            echo "Неверный пароль!";
        }
    } else {
        echo "Пользователь не найден!";
    }
}
$conn->close();
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
