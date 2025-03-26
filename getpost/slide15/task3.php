<?php
session_start();

$correctLogin = 'dina';
$correctPassword = '123';

if ($_POST) {
    $login = $_POST['login'];
    $passwd = $_POST['passwd'];

    if ($login === $correctLogin && $passwd === $correctPassword) {
        header('Location: secret.php');
        exit();
    } else {
        $error = "Неправильный логин или пароль.";
    }
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3</title>
</head>
<body>
<h1>Вход</h1>
<?php if (isset($error)): ?>
    <p style="color:red;"><?php echo $error; ?></p>
<?php endif; ?>
<form method="post" action="">
    <label for="login">Логин:</label>
    <input type="text" name="login" id="login" required>
    <br><br>
    <label for="passwd">Пароль:</label>
    <input type="password" name="passwd" id="passwd" required>
    <br><br>
    <input type="submit" value="Войти">
</form>
</body>
</html>
