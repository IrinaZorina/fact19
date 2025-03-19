<?php include_once 'inc/head.php'; ?>

    <div class="aut_reg">

        <?php
        session_start();
        if (!empty($_POST['password']) && !empty($_POST['login'])) {
            if ($_POST['password'] == 'qwerty' && $_POST['login'] == 'admin') {
                $_SESSION['login'] = 'administrator';
                header('location: welcome.php');
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