<?php include_once 'inc/head.php'; ?>

<?php
session_start();
$_SESSION['last_visited_page'] = 'fact.php';
?>


<h1>
    <p style="color: white"> Это страница Факт </p><br>
</h1>
<a href="welcome.php">Вернуться назад</a>

<?php include_once 'inc/footer.php'; ?>
