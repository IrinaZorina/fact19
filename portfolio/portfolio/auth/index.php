<?php require_once '../inc/header.php';
session_start();
?>
<div class="auth_div">
    <div class="auth_block">
        <div class="auth_header">Авторизация</div>
        <form name="form_auth" method="post" target="_top" action="">

                <input class="login-inp" type="text" name="USER_LOGIN" placeholder="Логин" value="">
                <input class="login-inp" type="password" name="USER_PASSWORD" placeholder="Пароль">

            <div class="auth_footer ">
                <input type="submit" value="Войти" class="login-btn">
            </div>
        </form>
    </div>
    <?php $login = isset($_POST['USER_LOGIN']) ? $_POST['USER_LOGIN'] : '';
    $password = isset($_POST['USER_PASSWORD']) ? $_POST['USER_PASSWORD'] : '';
    $hash = md5($password);

    if ($login == 'admin' && $hash == md5('admin')) {
        echo 'Авторизация прошла успешно!';
        $_SESSION['auth'] = 'yes';
        header("Location: ../?login=yes");
        exit( );
    } elseif ($login == '') echo '';
    else {
        $_SESSION['auth'] = 'no';
        echo '<div class="auth_fail">Логин / Пароль неверный :(</div>';
    }?>
</div>
<?php require_once '../inc/footer.php' ?>



