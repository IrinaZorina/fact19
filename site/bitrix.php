<?php
session_start();
$_SESSION['last_visited'] = 'bitrix.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Bitrix Page</title>
</head>
<body>
    <h1>Bitrix Page</h1>
    <a href="fact.php">Go to Fact</a>
    <a href="welcome.php">Back to Welcome</a>
</body>
</html>