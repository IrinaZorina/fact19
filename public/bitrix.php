<?php require $_SERVER['DOCUMENT_ROOT'] . '/../src/templates/_header.php';

if (isset($_SESSION['login'])) {
    $_SESSION['last_page'] = 'bitrix';
}

?>

<main class="main">
    <div class="section">
        <h1 class="title content__title">Страница о Битриксе</h1>
    </div>
</main>
<?php require $_SERVER['DOCUMENT_ROOT'] . '/../src/templates/_footer.php'; ?>
</div>
<script src="../assets/js/hamburger-menu.js"></script>
</body>
</html>