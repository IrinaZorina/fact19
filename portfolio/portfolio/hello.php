<?php require_once 'inc/header.php';
session_start();
$_SESSION['name'] = isset($_POST['name']) ? $_POST['name'] : 'null';
?>
<div class="homework">
    <?php echo 'Привет, '.$_SESSION['name'];?>
</div>
<?php require_once 'inc/footer.php'?>