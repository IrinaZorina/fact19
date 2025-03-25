<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = htmlspecialchars($_POST["username"]);
  $password = htmlspecialchars($_POST["password"]);

  if (isset($_SESSION["registered_users"][$username])) {
    if (password_verify($password, $_SESSION["registered_users"][$username])) {
      $_SESSION["user"] = $username;
      header("Location: welcome.php");
      exit();
    } else {
      echo "Ошибка: Неверный пароль!";
    }
  } else {
    echo "Ошибка: Пользователь не найден!";
  }
}
?>