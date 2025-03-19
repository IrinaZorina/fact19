<?php include_once 'inc/head.php'; ?>
<?php
session_start();
?>
    <p style="color: white"> Добро пожаловать <?= $_SESSION['login'] ?></p><br>
    <h3>
        <a href="fact.php">Перейти на страницу Факт</a> <br>
        <a href="bitrix.php">Перейти на страницу Битрикс</a> <br>
    </h3>

<?php
if ($_SESSION['last_visited_page']) {
    $lastPage = $_SESSION['last_visited_page'];
    echo "Последняя посещенная страница: <a href='$lastPage'>$lastPage</a>";
} else {
    echo "Не посещена ни одна страница.";
}
?>
<?php include_once 'inc/footer.php'; ?>