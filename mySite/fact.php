<?php require_once'inc/header.php'?>
<p class="fact1"> Это страница факт</p>
<?php
session_start();
$_SESSION['last_visited_page'] = 'fact.php';  // Запоминаем текущую страницу
?>
<p class="back">
    <a href="welcome.php">Вернуться назад</a>
</p>
<?php require_once  'inc/footer.php'?>
