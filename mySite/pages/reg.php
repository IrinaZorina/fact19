<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/style-cycles.css">
    <title>Регистрация</title>
</head>
<body>
<?php
        include "header.php";
     
?>
<form method="POST" id="form_reg">
    <div class="block_get_post">
    <fieldset class="fieldset_get_post">
        <legend > Форма для регистрации</legend>
    
        <div class="block_get_post">
            <label for="login">Логин</label>
            <input class="block_get_post__input" type="text" name="login_reg" id="login">
            <label for="pass">Пароль</label>
            <input class="block_get_post__input" type="password" name="pass_reg" id="pass">
        <div class="block_get_post">
                <button type="submit" form="form_reg" class="block_get_post__btn">Зарегистрироваться</button>
        </div>
        
        </div>
    </fieldset>
    </div>
</form>
<?php
if(isset($_POST["login_reg"]) && isset($_POST["pass_reg"]))
{
    $log=$_POST["login_reg"];
    $pass=$_POST["pass_reg"];
    $arr_user=arr_log_pass();
    if(check_user($arr_user,$log,0))
    {
        echo '<p class="text text_align_center"> Ошибка пользователь с таким логином существует! </p>';
    }
    else 
    {
        $file=fopen("F:\lcserver\home\mySite\info\user_info.txt",'a');
        fwrite($file,"login:".$log."\r\n"."pass:".md5($pass)."\r\n");
        fclose($file);
        echo '<p class="text text_align_center"> Регистрация прошла успешно! </p>';
    }
}
else 
{
    echo '<p class="text text_align_center"> Ошибка проверьте что введины логин и пароль! </p>';
}

?>

<?php
        include "footer.php";
?>    
</body>
</html>