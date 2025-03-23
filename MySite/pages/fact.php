<?php
require ('../style/function.php');
$theme = thema();
setcookie('last-url', "fact", time() + 3600*24*30);
?>
<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="php,html,css,bitrix">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/style.css">

</head>
<body class="<?php echo $theme; ?>">
вы на странице fact
<a href="../pages/hello.php">перейти на страницу приветствия</a>

</main>

</body>
<?php
require_once('../pages/footer.php');
?>
</html>