<?php
include 'ins/header.php';
if($_POST) {if (isset($_POST['login']) && isset($_POST['password'])) {
    $login = $_POST['login'];
    $password = md5($_POST['password']);


    if ($login == 'dina' && $password == md5('123')) {
        echo '<h2>' . 'Добро пожаловать, ' . htmlspecialchars($login) . '</h2>';
    } else {
        echo '<h2>' . 'Неправильный логин или пароль' . $_POST['login'] . '</h2>';
    }
} else {
    echo '<h2>' . 'Успешная регистрация, ' . $_POST['login'] . '</h2>';
}
}
?>
<body>
</body>
<?php
include 'ins/header.php';
?>