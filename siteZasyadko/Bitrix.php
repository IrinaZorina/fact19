<?php require_once 'include/header.php' ?>
<?php
session_start();
$_SESSION['last_visited_page'] = 'bitrix.php';
?>
    <p>Эта страница Bitrix</p>
<?php require_once 'include/footer.php' ?>