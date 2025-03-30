<?php require $_SERVER['DOCUMENT_ROOT'] . '/../src/templates/_header.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $login = htmlentities(trim($_POST['login']));
    $password = htmlentities(trim($_POST['password']));
    $errors = [];

    if (!$connection) {
        $errors['login'] = 'Ошибка подключения к БД!!';
    }

    // Валидация данных
    if (empty($login)) $errors['login'] = 'Введите логин!';
    if (empty($password)) $errors['password'] = 'Введите пароль!';

    // Пытаемся войти
    if (empty($errors)) {
        $query = "SELECT login, password FROM users WHERE login = '{$login}' LIMIT 1";
        $result = mysqli_query($connection, $query);

        $userDB = mysqli_fetch_array($result, MYSQLI_ASSOC);

        if ($userDB && password_verify($password, $userDB['password'])) {
            $_SESSION['login'] = $userDB['login'];
            $_SESSION['show_message'] = true;
            header('Location: /');
            exit;
        }

        $errors['login'] = 'Неправильно введен логин или пароль';
    }
}
mysqli_close($connection);

?>
<main class="main">
    <div class="section">
        <h1 class="title content__title">Вход</h1>
        <form method="POST">
            <div class="form__group">
                <label for="login">Логин:</label>
                <input placeholder="admin" name="login" id="login" type="text">
                <?php
                if (isset($errors['login'])) {
                    echo '<p style="color: var(--color-primary)">' . $errors['login'] . '</p>';
                }
                ?>
            </div>
            <div class="form__group">
                <label for="password">Пароль:</label>
                <input placeholder="admin" name="password" id="password" type="password">
                <?php
                if (isset($errors['password'])) {
                    echo '<p style="color: var(--color-primary)">' . $errors['password'] . '</p>';
                }
                ?>
            </div>
            <button class="form__submit">Войти</button>
        </form>
    </div>
    </div>
</main>
<?php require $_SERVER['DOCUMENT_ROOT'] . '/../src/templates/_footer.php'; ?>
</div>
<script src="../assets/js/hamburger-menu.js"></script>
</body>
</html>