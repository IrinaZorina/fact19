<?php
session_start();
if (!isset($_SESSION["user"])) {
  header("Location: index.php");
  exit();
}

$_SESSION["last_page"] = "Bitrix";

?>
<?php include 'components/header.php'; ?>
<main>
  страница битрих
</main>

<?php include 'components/footer.php'; ?>