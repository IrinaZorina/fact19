<?php

use Classes\User;

require $_SERVER['DOCUMENT_ROOT'] . '/../src/templates/_header.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = new User($_POST["login"], $_POST["password"]);
    $errors = $user->login();
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