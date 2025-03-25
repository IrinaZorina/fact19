<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = htmlspecialchars($_POST["username"]);
  $password = htmlspecialchars($_POST["password"]);

  $hashed_password = password_hash($password, PASSWORD_DEFAULT);

  $_SESSION["registered_users"][$username] = $hashed_password;

  echo "<h2>Регистрация успешна!</h2>";
  echo "<p>Теперь вы можете войти в систему.</p>";
  echo "<a href='index.php'>Вернуться</a>";
}
?>