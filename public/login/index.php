<?php require $_SERVER['DOCUMENT_ROOT'] . '/../src/templates/_header.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = [];

    // Валидация данных
    foreach ($_POST as $key => $value) {
        if (!validateRequirement($value)) {
            $errors[$key] = 'Нужно ввести данные!';
        }
    }

    // Пытаемся войти
    if (empty($errors)) {
        $users = file(
            $_SERVER['DOCUMENT_ROOT'] . '/users.txt',
            FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        foreach ($users as $user) {
            [$login, $password] = explode(' ', $user);
            if ($login == $_POST['login'] && password_verify($_POST['password'], $password)) {
                $_SESSION['login'] = $login;
                header('Location: /');
                exit;
            }
        }

        $errors['login'] = 'Неправильно введен логин или пароль';
    }
}

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