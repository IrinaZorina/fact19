<?php require_once '../inc/header.php';
session_start();
$hostname = "MySQL-8.2";
$username = "GaliyaSR";
$password = "galiya";
$dbname = "db_sarbaeva";
$mysqli = new mysqli($hostname, $username, $password, $dbname); // соединение/подключение к БД
$mysqli->set_charset("utf8"); // установить кодировку
?>
<div class="auth_div">
    <div class="auth_block">
        <div class="auth_header">Зарегистрироваться</div>
        <form name="form_auth" method="post" target="_top" action="">

            <input class="login-inp" type="text" name="USER_LOGIN" placeholder="Логин" value="">
            <input class="login-inp" type="password" name="USER_PASSWORD" placeholder="Пароль">

            <div class="auth_footer ">
                <input type="submit" value="Регистрация" class="login-btn"><a class="login-btn" href="index.php">Авторизация</a>
            </div>
        </form>
        <?php
        $login = isset($_POST['USER_LOGIN']) ? trim($_POST['USER_LOGIN']) : '';
        $password = isset($_POST['USER_PASSWORD']) ? trim($_POST['USER_PASSWORD']) : '';
        $hash = md5($password);


        if ($login && $hash) {
            //проверить наличие логина
            $result = $mysqli->query("SELECT id FROM users WHERE login='$login'");
            $row = $result->fetch_all(MYSQLI_ASSOC);
            if ($row) {
                echo "<div class='auth_fail'>Логин '$login' уже занят.</div>";
            }
            //такого логина нет
            else {
                $mysqli->query("INSERT INTO users   (login, password) VALUES ('$login', '$hash')");
                echo "<div class='auth_fail'> Вы зарегистрированы!</div>";
            }
        }
        ?>
    </div>
</div>
<?php require_once '../inc/footer.php' ?>



