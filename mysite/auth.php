<?php include_once 'inc/head.php'; ?>

    <div class="aut_reg">

        <?php
        $login = (isset($_POST['login']));
        $password = (isset($_POST['password']));
        if (!empty($_POST['password'])) {
            if ($_POST['password'] == 'qwerty' && $_POST['login'] == 'admin') {
                header('location: welcome.php');
                $hash = password_hash($password, PASSWORD_DEFAULT);
                $_POST['password'] = $hash;
            } else {
                echo 'Неверный пароль или логин';
            }
        }
        ?>

        <form method="post">
            Введите логин:
            <input type="text" name="login">
            <br>
            Введите Пароль
            <input type="password" name="password">
            <br>
            <button type="submit"> Вход</button>
            <br>

            Еще не зарегистрированы? <br>
            <button type="submit"> Регистрация</button>
        </form>


    </div>
<?php include_once 'inc/footer.php'; ?>