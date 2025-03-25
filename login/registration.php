<?php
session_start();
require_once 'config.php';
$title='Регистрация нового пользователя';
include_once '../header.php';

$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $confirm_password = trim($_POST['confirm_password']);

    if (empty($username) || empty($password) || empty($confirm_password)) {
        $error = 'Все поля обязательны для заполнения!';
    } elseif ($password !== $confirm_password) {
        $error = 'Пароли не совпадают!';
    } elseif (strlen($password) < 6) {
        $error = 'Пароль должен содержать минимум 6 символов!';
    } elseif (addUser($username, $password)) {
        $_SESSION['user'] = $username;
        header('Location: profile.php');
        exit;
    } else {
        $error = 'Пользователь с таким именем уже существует!';
    }
}
?>

<body>
    <div class="div_login">
        <h1>Регистрация</h1>
        <?php if ($error): ?>
            <p class="error1"><?= htmlspecialchars($error) ?></p>
        <?php endif; ?>

        <form method="POST">
            <div class="login_form">
                <label for="username">Имя пользователя:</label>
                <input type="text" id="username" name="username" required>
            </div>

            <div class="login_form">
                <label for="password">Пароль:</label>
                <input type="password" id="password" name="password" required>
            </div>

            <div class="login_form">
                <label for="confirm_password">Подтвердите пароль:</label>
                <input type="password" id="confirm_password" name="confirm_password" required>
            </div>

            <button type="submit" style="padding: 10px 15px;">Зарегистрироваться</button>
        </form>

        <p>Уже есть аккаунт? <a href="login.php">Войдите</a></p>
    </div>
</body>
</html>