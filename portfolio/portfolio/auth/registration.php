<?php require_once '../inc/header.php';
require_once 'Auth.php';
session_start();
?>
<div class="auth_div">
    <div class="auth_block">
        <div class="auth_header">Зарегистрироваться</div>
        <form name="form_auth" method="post" target="_top" action="#">

            <input class="login-inp" type="text" name="USER_LOGIN" placeholder="Логин" value="">
            <input class="login-inp" type="password" name="USER_PASSWORD" placeholder="Пароль">

            <div class="auth_footer ">
                <input type="submit" value="Регистрация" class="login-btn"><a class="login-btn" href="index.php">Авторизация</a>
            </div>
        </form>
        <div class='auth_fail'>
        <?php
        $login = isset($_POST['USER_LOGIN']) ? trim($_POST['USER_LOGIN']) : '';
        $password = isset($_POST['USER_PASSWORD']) ? trim($_POST['USER_PASSWORD']) : '';
        $hash = md5($password);

        if ($login && $hash) {
            $registration = new Auth($login, $hash);
            $registration->signUp();
        }
        ?>
        </div>
    </div>
</div>
<?php require_once '../inc/footer.php' ?>



