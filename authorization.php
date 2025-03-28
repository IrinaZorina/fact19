<?php
session_start();

// Настройки подключения к БД
$hostname = "MySQL-8.2";
$username = "Evgeniy_Krupnov";
$password = "123";
$dbname = "bd_Krupnov";

// Подключение к MySQL
$conn = new mysqli($hostname, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

// Обработка регистрации
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['register'])) {
        $newLogin = trim($_POST['reg_login'] ?? '');
        $newPassword = trim($_POST['reg_password'] ?? '');

        if (empty($newLogin) || empty($newPassword)) {
            $_SESSION['message'] = "Заполните все поля.";
        } elseif (strlen($newLogin) < 3 || strlen($newPassword) < 6) {
            $_SESSION['message'] = "Логин (от 3 символов) и пароль (от 6 символов) слишком короткие.";
        } else {
            // Проверка, что логин не занят
            $stmt = $conn->prepare("SELECT id FROM user WHERE login = ?");
            if (!$stmt) {
                die("Ошибка подготовки запроса: " . $conn->error);
            }
            $stmt->bind_param("s", $newLogin);
            $stmt->execute();
            $stmt->store_result();

            if ($stmt->num_rows > 0) {
                $_SESSION['message'] = "Этот логин уже занят.";
            } else {
                // Хэширование пароля
                $hashedPassword = password_hash($newPassword, PASSWORD_BCRYPT);

                // Добавление пользователя в БД
                $stmt = $conn->prepare("INSERT INTO user (login, password) VALUES (?, ?)");
                $stmt->bind_param("ss", $newLogin, $hashedPassword);
                if ($stmt->execute()) {
                    $_SESSION['message'] = "Регистрация успешна! Теперь вы можете войти.";
                } else {
                    $_SESSION['message'] = "Ошибка при регистрации: " . $conn->error;
                }
            }
            $stmt->close();
        }

    // Обработка входа
    } elseif (isset($_POST['submit_login'])) {
        $login = trim($_POST['login'] ?? '');
        $password = trim($_POST['password'] ?? '');

        $stmt = $conn->prepare("SELECT id, password FROM user WHERE login = ?");
        if (!$stmt) {
            die("Ошибка подготовки запроса: " . $conn->error);
        }
        $stmt->bind_param("s", $login);
        $stmt->execute();
        $stmt->bind_result($id, $hashedPassword);
        $stmt->fetch();

        if ($id && password_verify($password, $hashedPassword)) {
            $_SESSION['user'] = $login;
            header("Location: welcome.php");
            exit();
        } else {
            $_SESSION['message'] = "Ошибка: неверный логин или пароль.";
        }
        $stmt->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация</title>
    <style>
        .message { color: red; margin: 10px 0; }
    </style>
</head>
<body>
    <?php if (isset($_SESSION['message'])): ?>
        <div class="message"><?= htmlspecialchars($_SESSION['message']) ?></div>
        <?php unset($_SESSION['message']); ?>
    <?php endif; ?>

    <h2>Авторизация</h2>
    <form method="post">
        <input type="text" name="login" placeholder="Логин" required>
        <input type="password" name="password" placeholder="Пароль" required>
        <button type="submit" name="submit_login">Войти</button>
    </form>

    <h2>Регистрация</h2>
    <form method="post">
        <input type="text" name="reg_login" placeholder="Логин" required>
        <input type="password" name="reg_password" placeholder="Пароль" required>
        <button type="submit" name="register">Зарегистрироваться</button>
    </form>

    <?php $conn->close(); ?>
</body>
</html>