<?php include_once 'inc/head.php'; ?>

<?php
session_start();
$_SESSION['last_visited_page'] = 'bitrix.php';
?>

    <h1>
        <p style="color: white"> Это страница Битрикс </p><br>
    </h1>

<?php include_once 'inc/footer.php'; ?>