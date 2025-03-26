<?php
if($_POST){
    $_POST['password'] = md5($_POST['password']);

    if(isset($_POST['name']) == $_POST['name'] && isset($_POST['password']) == $_POST['password']){
        echo  "<br>" . "Имя: " . $_POST['name'];
        echo  "<br>" . "Пароль: " . $_POST['password'];
    }
}

?>

<!DOCTYPE html>
<html lang="ru">
<meta charset="UTF-8">
<title>2</title>
<body>
<form action="" method="post">
    <div>
        <h2>Введите имя и пароль</h2>
        <div>
            <label>Имя</label>
            <input type="text" name="name">
        </div>
        <div>
            <label> Пароль</label>
            <input type="password" name="password">
        </div>
        <input type="submit" class="submit">
    </div>
</form>
</body>
</html>

<style>
    form{
        display: flex;
        flex-direction: column;
        align-items: start;
        justify-content: center;
    }
    form div{
        width: 300px;
        display: flex;
        flex-direction: column;
        align-items: start;
        justify-content: center;
    }

    form div div{
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        margin-bottom: 20px;
    }
</style>