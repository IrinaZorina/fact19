<?php
require ('../style/function.php');
$theme = thema();
if(isset($_SESSION['autotization'])){
    header("Location: hello.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body class="<?php echo $theme; ?>">
<?php
require_once "header.php";

$form_error = false;
$password = md5("Borisin");
$get_name = isset($_REQUEST["name"]) ? $_REQUEST["name"] : NULL;
$get_password = isset($_REQUEST["password"]) ? $_REQUEST["password"] : NULL;
if (isset($_REQUEST["name"]) && isset($_REQUEST["password"])){
    if ($get_name == "Vadim" && md5($get_password) == $password){
        header("Location: hello.php");
$_SESSION['autotization'] = true;
    } 
    else 
    $form_error = true;

}
?>

<form method="post"><style><?include "../style/form.css"?></style>
    <h2>Авторизация</h2>
    <p>
        <label for="name">Имя:</label>
        <input type="text" name="name"  required />
    </p>
    <p>
        <label for="pass">Пароль:</label>
        <input type="password" name="password"  required />
    </p>
    <button type="submit">
        Авторизоваться
    </button>
</form>

<?php
    if ($form_error) TextError("Неправильное имя или пароль!");
?>


<? require_once "footer.php"; ?>
</body>
</html>

