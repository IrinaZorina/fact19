<?php require_once 'include/header.php' ?>
<?php
session_start();
$_SESSION['last_visited_page'] = 'fact.php';
?>
    <p>Эта страница Fact</p>
<?php require_once 'include/footer.php' ?>