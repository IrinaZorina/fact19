<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/style-cycles.css">
    <title>Авторизация</title>
</head>
<body>
<?php
    include "header.php";
    if(isset($_POST["login_auth"]) && isset($_POST["pass_auth"]))
    {
        $log=$_POST["login_auth"];
        $pass=$_POST["pass_auth"];
        $arr_users=arr_log_pass();
        if(check_user($arr_users,$log,$pass))
        {
           echo '<h3 class="title">Приветсвуем на сайте '.$log.'</h3>';
           echo '<div class="block_get_post flex_row"> <a href="/index.php" class="block_get_post__link">На главную страницу</a> </div>';
        }
        else 
        {
            echo '<h3 class="title">Ошибка неверный логин или пароль!</h3>';
        }
    }
     
?>

<?php
        include "footer.php";
?>
</body>
</html>