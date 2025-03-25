<?php include 'components/header.php'; ?>
<?php
session_start();
?>

<main>
  <h2>Регистрация</h2>
  <form action="process.php" method="POST">
    <label>Логин: <input type="text" name="username" required></label><br>
    <label>Пароль: <input type="password" name="password" required></label><br>
    <button type="submit">Зарегистрироваться</button>
  </form>
  <a href="login.php">Уже есть аккаунт? Войти</a>

  <h2>Вход</h2>
  <form action="login.php" method="POST">
    <label>Логин: <input type="text" name="username" required></label><br>
    <label>Пароль: <input type="password" name="password" required></label><br>
    <button type="submit">Войти</button>
  </form>
  <?php if (isset($_SESSION['user'])): ?>
    <p>Вы вошли как <?= $_SESSION['user'] ?> </p>
  <?php endif; ?>
  <?php include 'components/footer.php'; ?>
</main>