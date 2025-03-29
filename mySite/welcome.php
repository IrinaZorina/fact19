<?php require_once'inc/header.php'?>
<?php
session_start();
?>
<p class="welcome"> Добро пожаловать! <?= $_SESSION['login'] ?> </p>
<div class="fact">
    <a href="fact.php" >Fact</a>
    <a href="bitrix.php" >Bitrix</a><br>
</div>
<p class="last">
    <?php
    if ($_SESSION['last_visited_page']) {
        $lastPage = $_SESSION['last_visited_page'];
        echo "Последняя посещенная страница: <a href='$lastPage'>$lastPage</a>";
    } else {
        echo "Вы не посещали другие страницы перед авторизацией.";
    }
    ?>
    <?php require_once  'inc/footer.php'?>
</p>

