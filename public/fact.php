<?php
session_start();

if (!isset($_SESSION["user"])) {
  header("Location: index.php");
  exit();
}

$_SESSION["last_page"] = "Fact";
?>
<?php include 'components/header.php'; ?>

<main>fact страница</main>
<?php include 'components/footer.php'; ?>