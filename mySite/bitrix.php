<?php require_once'inc/header.php'?>
<p class="bitrix"> Это страница Битрикс</p>
<?php
session_start();
$_SESSION['last_visited_page'] = 'bitrix.php';  // Запоминаем текущую страницу
?>
<?php require_once  'inc/footer.php'?>
