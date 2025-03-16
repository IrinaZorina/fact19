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
     
?>
<form method="POST" id="form_auth" action="./welcome.php">
    <div class="block_get_post">
    <fieldset class="fieldset_get_post">
        <legend > Форма для авторизации</legend>
    
        <div class="block_get_post">
            <label for="login">Логин</label>
            <input class="block_get_post__input" type="text" name="login_auth" id="login">
            <label for="pass">Пароль</label>
            <input class="block_get_post__input" type="password" name="pass_auth" id="pass">
        <div class="block_get_post">
                <button type="submit" form="form_auth" class="block_get_post__btn">Войти</button>
        </div>
        
        </div>
    </fieldset>
    </div>
</form>
<div class="block_get_post flex_row">
<p class="text text_align_center"> Еще не зарегистрированы? </p>
<a href="./reg.php" class="block_get_post__link">Зарегистрироваться</a>
</div>

<?php
        include "footer.php";
?>    
</body>
</html>