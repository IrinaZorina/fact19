<?php
session_start();

// Инициализация массива пользователей из сессии, если он ещё не существует
if (!isset($_SESSION['users'])) {
    $_SESSION['users'] = [
        'user1' => '5f4dcc3b5aa765d61d8327deb882cf99', // md5("password")
        'user2' => 'e10adc3949ba59abbe56e057f20f883e', // md5("123456")
    ];
}
$users = &$_SESSION['users'];

// Проверка на регистрацию или авторизацию
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['register'])) {
        $newLogin = trim($_POST['reg_login'] ?? '');
        $newPassword = trim($_POST['reg_password'] ?? '');

        if (!empty($newLogin) && !empty($newPassword)) {
            if (!isset($users[$newLogin])) {
                $users[$newLogin] = md5($newPassword);
                $_SESSION['message'] = "Регистрация успешна! Теперь вы можете войти.";
            } else {
                $_SESSION['message'] = "Этот логин уже занят.";
            }
        } else {
            $_SESSION['message'] = "Заполните все поля.";
        }
    } elseif (isset($_POST['submit_login'])) {
        $login = trim($_POST['login'] ?? '');
        $password = trim($_POST['password'] ?? '');
        $hashedPassword = md5($password);

        if (isset($users[$login]) && $users[$login] === $hashedPassword) {
            $_SESSION['user'] = $login;
            header("Location: welcome.php");
            exit();
        } else {
            $_SESSION['message'] = "Ошибка: неверный логин или пароль.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация и регистрация</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .form-container { max-width: 400px; margin: 0 auto; padding: 20px; border: 1px solid #ccc; }
        h2 { color: #333; }
        .message { color: red; margin-bottom: 10px; }
        input, button { margin: 5px 0; padding: 5px; }
    </style>
</head>
<body>
    <div class="form-container">
        <?php
        if (isset($_SESSION['message'])) {
            echo "<div class='message'>" . htmlspecialchars($_SESSION['message']) . "</div>";
            unset($_SESSION['message']);
        }
        ?>

        <h2>Авторизация</h2>
        <form method="post" action="authorization.php" autocomplete="off">
            <p>
                Логин: <input type="text" name="login" required autocomplete="off">
            </p>
            <p>
                Пароль: <input type="password" name="password" required autocomplete="off">
            </p>
            <p>
                <input type="submit" name="submit_login" value="Войти">
            </p>
        </form>

        <h2>Регистрация</h2>
        <form method="post" action="authorization.php" autocomplete="off">
            <p>
                Логин: <input type="text" name="reg_login" required autocomplete="off">
            </p>
            <p>
                Пароль: <input type="password" name="reg_password" required autocomplete="off">
            </p>
            <p>
                <input type="submit" name="register" value="Зарегистрироваться">
            </p>
        </form>
    </div>
</body>
</html>