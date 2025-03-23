<?php require_once 'include/header.php' ?>
<?php
session_start();
?>
<p>Добро пожаловать<?= $_SESSION['login'] ?></p>
<a href="Fact.php">Fact</a>
<a href="Bitrix.php">Bitrix</a>
<?php
if ($_SESSION['last_visited_page']) {
    $lastPage = $_SESSION['last_visited_page'];
    echo "Последняя посещенная страница: <a href='$lastPage'>$lastPage</a>";
} else {
    echo "Вы не посещали ни одной страницы.";
}
?>
<?php require_once 'include/footer.php' ?>