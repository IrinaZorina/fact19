<?php
session_start();
require_once 'config.php';
$title= 'Авторизация пользователя';
include_once '../header.php';

$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if (empty($username) || empty($password)) {
        $error = 'Все поля обязательны для заполнения!';
    } elseif (verifyUser($username, $password)) {
        $_SESSION['user'] = $username;
        header('Location: profile.php');
        exit;
    } else {
        $error = 'Неверное имя пользователя или пароль!';
    }
}
?>

<body>
<div class="div_login">
    <h1>Авторизация</h1>
    <?php if ($error): ?>
        <p class="error1"><?= htmlspecialchars($error) ?></p>
    <?php endif; ?>

    <form method="POST">
        <div class="login_form">
            <label class='login' for="username">Имя пользователя:</label>
            <input type="text" id="username" name="username" required>
        </div>

        <div class="login_form">
            <label class='login' for="password">Пароль:</label>
            <input type="password" id="password" name="password" required>
        </div>

        <button type="submit" style="padding: 10px 15px;">Войти</button>
    </form>

    <p class="login">Еще не зарегистрированы? <a href="registration.php">Создайте аккаунт</a></p>
</div>
</body>
</html>