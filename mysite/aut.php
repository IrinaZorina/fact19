<?php include_once 'inc/head.php'; ?>

<div class="aut_reg">

    <?php
    session_start();
    include "Authentic.php";
    $db = new Authentic('MySQL-8.2', 'Mike', 'evrei228', 'db_Yuzhakov');
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $user = $_POST['login'];
        $pass = $_POST['password'];
        $user = new User($db, $user, $pass);
        $user->authenticate();
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

