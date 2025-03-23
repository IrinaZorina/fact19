<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/style-cycles.css">
    <title>Битрикс</title>
</head>
<body>
    <?php
        include "header.php";
        if(session_status()==PHP_SESSION_ACTIVE)
        {
            $_SESSION["page"]='bitrix.php';
        }  
    ?>
    <h1 class="title">Битрикс</h1>
    <?php
        include "footer.php";
    ?>
</body>
</html>