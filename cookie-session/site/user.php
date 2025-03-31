<?php
session_start();
include 'ins/header.php';

echo $_POST['login'];
echo $_POST['password'];
// Массив пользователей для хранения логина и пароля
$users = [
    'dina' => md5('123') // Стандартный пользователь

];

if ($_POST) {
    if (isset($_POST['login']) && isset($_POST['password'])) {
        $login = $_POST['login'];
        $password = md5($_POST['password']);

        // Проверка авторизации
        if (array_key_exists($login, $users) && $users[$login] === $password) {
            echo '<h2>' . 'Добро пожаловать, ' . htmlspecialchars($login) . '</h2>';
            if (isset($_SESSION['last_page'])) {
                $last_page = $_SESSION['last_page'];
                echo "<h2>Вы последним посещали страницу: $last_page</h2>";
            } else {
                echo "<h2>Это первая авторизация.</h2>";
            }
        } else {
            if (!array_key_exists($login, $users)) {
                $users[$login] = $password; // Добавляем нового пользователя
                echo '<h2>' . 'Успешная регистрация, ' . htmlspecialchars($login) . '</h2>';
                $_SESSION = array(); // Очищаем массив сессии
                session_destroy(); // Уничтожаем сессию
            } else {
                echo '<h2>' . 'Неправильный логин или пароль, ' . htmlspecialchars($login) . '</h2>';
                $_SESSION = array(); // Очищаем массив сессии
                session_destroy(); // Уничтожаем сессию
            }
        }
    }
}
?>
<body>
</body>
<?php
include 'ins/header.php';
?>
