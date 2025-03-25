<?php
session_start();

if (!isset($_SESSION['user'])) {
  header("Location: login_sql.php");
  exit();
}

echo "<h2>Добро пожаловать, " . $_SESSION['user'] . "!</h2>";
echo "<a href='index.php'>Главная</a>";
?>