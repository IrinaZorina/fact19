<?php
include_once ("Class.php");
session_start();
$hostname = "MySQL-8.2";
$username = "Vad";
$password = "zapret";
$dbname = "db_Borisin";

if($_SERVER['REQUEST_METHOD']=='POST'){
    $name = trim($_POST['Log'] ?? '');
    $pass = trim($_POST['Passw'] ?? '');

    try {
        $auth = new Auth($name, $pass, $hostname, $username, $password, $dbname); // Передаем параметры БД
        $auth->authenticate(); // Вызываем метод авторизации
    } catch (TypeError $e) {
        die("Ошибка: неверные данные для авторизации");
    }

    if($auth->isLoggedIn){
        $_SESSION['Log'] = $name;
        require_once 'pages/header.php';
        echo "добро пожаловать";
    } else {
        echo $auth->errorMessage; // Выводим сообщение об ошибке из класса
    }
}
?>

<form method="post"><style><?include "style/form.css"?></style>
    <h2>Авторизация</h2>
    <p>
        <label for="name">Имя:</label>
        <input type="text" name="Log"  required />
    </p>
    <p>
        <label for="pass">Пароль:</label>
        <input type="password" name="Passw"  required />
    </p>
    <button type="submit">
        Авторизоваться
    </button>
</form>
