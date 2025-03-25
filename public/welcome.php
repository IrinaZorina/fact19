<?php
session_start();

if (!isset($_SESSION["user"])) {
  header("Location: index.php");
  exit();
}
?>
<?php include 'components/header.php'; ?>


<h2>Добро пожаловать, <?= $_SESSION["user"] ?>!</h2>
<p><a href="logout.php">Выйти</a></p>

<?php include 'components/footer.php'; ?>