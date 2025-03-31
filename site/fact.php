<?php
session_start();
$_SESSION['last_visited'] = 'fact.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Fact Page</title>
</head>
<body>
    <h1>Fact Page</h1>
    <a href="bitrix.php">Go to Bitrix</a>
    <a href="welcome.php">Back to Welcome</a>
</body>
</html>