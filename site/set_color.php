<?php
session_start();

if (isset($_POST['color'])) {
    $_SESSION['bg_color'] = $_POST['color'];
    header("Location: ".$_SERVER['HTTP_REFERER']);
    exit();
}
?>