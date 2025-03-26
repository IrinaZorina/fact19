<?php require_once 'inc/header.php';
session_start();

if (isset($_POST['session_del']) == 1) {
    session_destroy();
}

if(isset($_POST['theme'])) {
    if($_POST['theme'] == "dark") {
        setcookie('theme', 0);
    }else{
        setcookie('theme', 1);
    }
    header("Refresh:0");
}

?>
    <div class="homework">
        <p style="text-align: center">Задачи на куки</p>
        <h3>1. Пользователь заходит на страницу. Вам необходимо сохранить куки со значением name = "User". После
            обновления страницы нам необходимо вывести на экран "Hello User" (Значение User берется из куки).</h3>
        <div class="hw1">
            <?php
            setcookie('name', 'User', time() + 60);
            $user = isset($_COOKIE['name']) ? $_COOKIE['name'] : '';
            echo 'Hello, ' . $user . '!';
            ?>
        </div>
        <h3>2. Создайте куки с логином посетителя и временем последнего захода. Куки должны хранится максимум 1 час.
            Примечание: возможно понадобится форма для ввода логина.</h3>
        <div class="hw2">
            <form method="post" action="">
                <label>Логин
                    <input name="log" type="text">
                </label>
                <input type="submit">
            </form>
            <?php
            setcookie('login', isset($_POST['log']) ? '<br>' . $_POST['log'] : '', time() + 3600);
            echo isset($_COOKIE['login']) ? $_COOKIE['login'] : ' ';
            ?>
        </div>
        <h3>3. Сделайте счетчик посещения сайта посетителем. Каждый раз, заходя на сайт, он должен видеть надпись: 'Вы
            посетили наш сайт % раз!'.</h3>
        <div class="hw3">
            <?php
            if (!isset($_COOKIE['counter'])) {
                setcookie('count', 1);
                $_COOKIE['count'] = 1;
            } else {
                setcookie('count', ++$_COOKIE['count']);
            }

            echo 'Вы посетили наш сайт ' . $_COOKIE['count'] . ' раз';
            ?>
        </div>
        <p style="text-align: center"><br>Задачи на сессии</p>
        <h3>1. Сделайте две страницы: index.php и hello.php. При заходе на index.php спросите с помощью формы имя
            пользователя, запишите его в сессию. При заходе на hello.php поприветствуйте пользователя фразой "Привет,
            Имя!".</h3>
        <div class="hw4">
            <form method="post" action="hello.php">
                <label>Ваше имя
                    <input name="name" type="text">
                </label>
                <input type="submit">
            </form>
            <?php
            //$_SESSION['name'] = isset($_POST['name']) ? $_POST['name'] : 'null';
            ?>
        </div>
        <h3>2. Запишите в сессию время захода пользователя на сайт. При обновлении страницы выводите сохраненное время
            на экран.</h3>
        <div class="hw5">
            <?php
            if (empty($_SESSION['date'])) {
                $_SESSION['date'] = date_create();
            }
            echo isset($_SESSION['date']) ? date_format($_SESSION['date'], 'd.m.Y H:i:s') : 0;
            ?>
        </div>
        <h3>3. Запишите в сессию время захода пользователя на сайт. При обновлении страницы выводите сколько секунд назад пользователь зашел на сайт.</h3>
        <div class="hw6">
            <?php
            if (empty($_SESSION['time'])) {
                $_SESSION['time'] = time();
            }
            echo time() - $_SESSION['time'] . ' секунд назад';
            ?>
        </div>
        <br>
        <br>
        <br>
        <div class="hw8">
            <h3>Страница <a class="nav_p" href="fact.php">ФАКТ</a></h3>
            <h3>Страница <a class="nav_p" href="bitrix.php">БИТРИКС</a></h3>
            <?php echo isset($_SESSION['page']) ? 'Страница '.$_SESSION['page'].' была посещена последней' : '';
            ?>
        </div>
        <div class="hw9">
            <h3>Выбрать тему</h3>
            <form action="" method="post">
                <select name="theme">
                    <option value="dark">Темная</option>
                    <option value="light">Светлая</option>
                </select>
                <input type="submit" value="Выбрать">

            </form>

        </div>

        <div class="hw7">
            <br>
            <br>
            <br>
            <form action="" method="post">
                <input type="hidden" name="session_del" value="true">
                <input type="submit" value="Удалить текущую сессию">
            </form>
        </div>

    </div>
<?php require_once 'inc/footer.php' ?>