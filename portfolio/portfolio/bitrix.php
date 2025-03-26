<?php require_once 'inc/header.php';
session_start();
$auth = isset($_SESSION['auth']) ? $_SESSION['auth'] : '';
if ($auth == 'yes') {
    $_SESSION["page"] = '"Битрикс"';
}

?>
    <div class="resume">
        <div class="main">
            Страница "БИТРИКС"
        </div>
    </div>
<?php require_once 'inc/footer.php'?>