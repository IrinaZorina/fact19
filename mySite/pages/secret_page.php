<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/style-cycles.css">
    <title></title>
</head>
<body>
<?php
$str_back='<p class="text text_align_center"> <a href="./get_post.php">На страницу с авторизацией</a> </p>';
    $arr_pass_log=["login"=>"Batman","password"=>"cave"];
    if(isset($_POST["log_list"]) && isset($_POST["pass2"]))
    {
        if($arr_pass_log["login"]===$_POST["log_list"])
        {
            if($arr_pass_log["password"]===$_POST["pass2"])
            {
                echo '<p class="text text_align_center"> Доступ к секретным страницам открыт! </p>';
                echo $str_back;
                
            }
            else
            {
                echo '<p class="text text_align_center"> Неверный пароль! </p>';
                echo $str_back;
            }
        }
        else
        {
            echo '<p class="text text_align_center"> Неверный логин! </p>';
            echo $str_back;
        }
    }
    else 
    {
        echo '<p class="text text_align_center"> Не введен пароль! </p>';
        echo $str_back;
    }
?>
</body>
</html>
