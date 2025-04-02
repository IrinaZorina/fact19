<?php require $_SERVER['DOCUMENT_ROOT'] . '/../src/templates/_header.php';

use Classes\User;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = new User($_POST['login'], $_POST['password'], $_POST['password_confirm']);
    $errors = $user->register();
}

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