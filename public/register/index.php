<?php require $_SERVER['DOCUMENT_ROOT'] . '/../src/templates/_header.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = [];

    $login = htmlentities(trim($_POST['login']));
    $password = htmlentities(trim($_POST['password']));
    $password_confirm = htmlentities(trim($_POST['password_confirm']));

    if (!$connection) {
        $errors['login'] = 'Ошибка подключения к БД!';
    }

    // Валидация данных
    if (empty($login)) $errors['login'] = 'Введите логин!';
    if (empty($password)) $errors['password'] = 'Введите пароль!';
    if ($password !== $password_confirm) {
        $errors['password'] = $errors['password_confirm'] = 'Пароли не совпадают!';
    }

    // Проверяем, есть ли пользователь
    $query = "SELECT login FROM users WHERE login = '{$login}' LIMIT 1";
    $found = mysqli_query($connection, $query);
    if (mysqli_fetch_array($found)) {
        $errors['login'] = 'Такой пользователь уже есть!';
    }

    // Сохраняем данные в БД
    if (empty($errors)) {
        $password = password_hash($password, PASSWORD_DEFAULT);
        $query = "INSERT INTO users (login, password) VALUES ('{$login}', '{$password}');";
        if (mysqli_query($connection, $query)) {
            $_SESSION['login'] = $login;
            header('Location: /');
            exit;
        } else {
            $errors['login'] = 'Ошибка регистрации!';
        }
    }
}
mysqli_close($connection);

?>
<main class="main">
    <div class="section">
        <h1 class="title content__title">Регистрация</h1>
        <form method="POST">
            <div class="form__group">
                <label for="login">Логин:</label>
                <input name="login" id="login" type="text">
                <?php
                if (isset($errors['login'])) {
                    echo '<p style="color: var(--color-primary)">' . $errors['login'] . '</p>';
                }
                ?>
            </div>
            <div class="form__group">
                <label for="password">Пароль:</label>
                <input name="password" id="password" type="password">
                <?php
                if (isset($errors['password'])) {
                    echo '<p style="color: var(--color-primary)">' . $errors['password'] . '</p>';
                }
                ?>
            </div>
            <div class="form__group">
                <label for="password_confirm">Подтвердите пароль:</label>
                <input name="password_confirm" id="password_confirm" type="password">
                <?php
                if (isset($errors['password_confirm'])) {
                    echo '<p style="color: var(--color-primary)">' . $errors['password_confirm'] . '</p>';
                }
                ?>
            </div>
            <button class="form__submit">Зарегистрироваться</button>
        </form>
    </div>
    </div>
</main>
<?php require $_SERVER['DOCUMENT_ROOT'] . '/../src/templates/_footer.php'; ?>
</div>
<script src="../assets/js/hamburger-menu.js"></script>
</body>
</html>