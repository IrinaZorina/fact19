<?php
session_start();

if (isset($_SESSION['username'])) {
    header("Location: welcome.php");
    exit();
}

// Массив для хранения пользователей
$users = [
    'user1' => password_hash('password1', PASSWORD_DEFAULT),
    'user2' => password_hash('password2', PASSWORD_DEFAULT),
];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (!empty($username) && !empty($password)) {
        if (isset($users[$username])) {
            echo "<p>Пользователь с таким логином уже существует!</p>";
        } else {
            $users[$username] = password_hash($password, PASSWORD_DEFAULT);
            echo "<p>Регистрация прошла успешно!</p>";
        }
    } else {
        echo "<p>Логин и пароль не могут быть пустыми!</p>";
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (!empty($username) && !empty($password)) {
        if (isset($users[$username]) && password_verify($password, $users[$username])) {
            $_SESSION['username'] = $username;
            header("Location: welcome.php");
            exit();
        } else {
            echo "<p>Неверный логин или пароль!</p>";
        }
    } else {
        echo "<p>Логин и пароль не могут быть пустыми!</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация и регистрация</title>
</head>
<body>
    <h1>Авторизация</h1>
    <form method="POST" action="">
        <label for="username">Логин:</label>
        <input type="text" name="username" id="username" required>
        <br>
        <label for="password">Пароль:</label>
        <input type="password" name="password" id="password" required>
        <br>
        <button type="submit" name="login">Войти</button>
    </form>

    <h1>Регистрация</h1>
    <form method="POST" action="">
        <label for="username">Логин:</label>
        <input type="text" name="username" id="username" required>
        <br>
        <label for="password">Пароль:</label>
        <input type="password" name="password" id="password" required>
        <br>
        <button type="submit" name="register">Зарегистрироваться</button>
    </form>
</body>
</html>