<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/style-cycles.css">
    <title>Get/Post</title>
</head>
<body>
<?php
        include "header.php";
     
   ?>
<form method="POST" id="form1">
   <h3 class="title">Слайд 15 задание №1</h3>
    <div class="block_get_post">
        <label for="str">Введите строку</label>
        <input class="block_get_post__input" type="text" name="str" id="str">
    </div>
    <div class="block_get_post">
        <label for="text">Введите текст</label>
        <textarea class="block_get_post__input" name="text" id="text"></textarea>
    </div>
    <p class="text text_align_center">Выберите темы для изучения</p>
    <div class="block_get_post flex_row">
        <label for="prog">Програмирование</label>
        <input type="checkbox" id="prog" name="chk_std[]" value="Програмирование">
        <label for="sql">Базы данных</label>
        <input type="checkbox" id="sql"name="chk_std[]" value="Базы данных">
        <label for="sql">Битрикс 24</label>
        <input type="checkbox" id="sql"name="chk_std[]" value="Битрикс 24">
    </div>
    <p class="text text_align_center">Выберите язык програмирования для изучения</p>
    <div class="block_get_post flex_row">
        <label for="php">PHP</label>
        <input type="radio" name="lang" value="PHP" id="php">
        <label for="JS">JavaScript</label>
        <input type="radio" name="lang" value="JavaScript" id="JS">
        <label for="C">C#</label>
        <input type="radio" name="lang" value="C#" id="C">
        
    </div>
    <div class="block_get_post">
        <button type="submit" form="form1">Отправить</button>
    </div>
   
   
</form>
<?php
// обработка формы Слайд 15 задание №1
   if(isset($_POST["str"]))
   {
     echo'<p class="text text_pd_left">'.$_POST["str"].' </p>';
   }
   if(isset($_POST["text"]))
   {
     echo'<p class="text text_pd_left">'.$_POST["text"].' </p>';
   }
   if(isset($_POST["chk_std"]))
   {
    foreach ($_POST["chk_std"] as $val) 
    {
        echo'<p class="text text_pd_left">'.$val.' </p>';
    }
   }
   if(isset($_POST["lang"]))
   {
        echo'<p class="text text_pd_left">'.$_POST["lang"].' </p>';
   }
?>
<form method="POST" id="form2">
    <h3 class="title">Слайд 15 задание №2</h3>
    <div class="block_get_post">
        <label for="login">Логин</label>
        <input class="block_get_post__input" type="text" name="login" id="login">
        <label for="pass">Пароль</label>
        <input class="block_get_post__input" type="password" name="pass" id="pass">
    <div class="block_get_post">
            <button type="submit" form="form2">Отправить</button>
    </div>
        
    </div>
</form>
<?php
if(isset($_POST["login"]))
{
    echo'<p class="text text_pd_left"> Логин '.$_POST["login"].' </p>';
}
if(isset($_POST["pass"]))
{
    $_POST["pass"]=md5($_POST["pass"]);
    echo'<p class="text text_pd_left"> Захешированный пароль '.$_POST["pass"].' </p>';
}
?>
<form method="POST" id="form3" action="./secret_page.php">
    <h3 class="title">Слайд 15 задание №3</h3>
    <p class="text text_align_center"> Логин: Batman Пароль: cave </p>
    <div class="block_get_post">
        <select name="log_list" size="1">
            <option value="Batman">Batman</option>
            <option value="Superman">Superman</option>
            <option value="Green_Lantern">Green Lantern</option>
        </select>
        <label for="login">Пароль</label>
        <input class="block_get_post__input" type="password" name="pass2" id="pass2">
    </div>
    <div class="block_get_post">
            <button type="submit" form="form3">Отправить</button>
    </div>
</form>
<form method="POST" id="form4">
    <h3 class="title">Слайд 15 задание №4</h3>
    <div class="block_get_post">
        <select name="lab_list" size="1">
            <option value="1">Лаб1</option>
            <option value="2">Лаб2</option>
            <option value="3">Лаб3</option>
            <option value="4">Лаб4</option>
        </select>
    </div>
    <div class="block_get_post">
            <button type="submit" form="form4">Отправить</button>
    </div>
</form>

<?php
    if(isset($_POST["lab_list"]))
    {
        
        $str_lab='phpcourse.php?l='.$_POST["lab_list"];
        echo'<p class="text text_align_center"> <a href="'.$str_lab.'">'.$str_lab.'</a> </p>';
    }
?>
<form method="POST" id="form5">
    <h3 class="title">Слайд 16 задание №1</h3>
    <div class="block_get_post">
        <label for="login_mail">Логин</label>
        <input class="block_get_post__input" type="text" name="login_mail" id="login_mail">
        <label for="com_mail">Комментарий</label>
        <textarea name="com_mail" id="com_mail" class="block_get_post__input"></textarea>
    </div>
    <div class="block_get_post">
            <button type="submit" form="form5">Отправить на email</button>
    </div>
</form>
<?php
if(isset($_POST["login_mail"]) && isset($_POST["com_mail"]))
{
    $to="filinkovms@yandex.ru";
    $theme="Форма для отправки на email.";
    $arr_mes=str_split($_POST["com_mail"],70);
    $mes=$_POST["login_mail"]."\r\n";
    for($i=0;$i<count($arr_mes);++$i)
    {
        $mes.=$arr_mes[$i]."\r\n";
    }
    $headers = "From: Max Filinkov <msfilinkov@gmail.com>\r\nContent-type: text/plain; charset=windows-1251 \r\n";
    if(mail($to,$theme,$mes,$headers))
    {
        echo'<p class="text text_align_center"> Письмо отправлено! </p>';
    }

}
?>
<form method="POST" id="form6">
    <h3 class="title">Слайд 16 задание №2</h3>
    <div class="block_get_post">
    <fieldset class="fieldset_get_post">
        <legend > Форма для авторизации</legend>
    
        <div class="block_get_post">
            <label for="login_f6">Логин</label>
            <input class="block_get_post__input" type="text" name="login_f6" id="login_f6">
            <label for="pass_f6">Пароль</label>
            <input class="block_get_post__input" type="password" name="pass_f6" id="pass_f6">
        <div class="block_get_post">
                <button type="submit" form="form6">Отправить</button>
        </div>
        
        </div>
    </fieldset>
    </div>
</form>
<?php
if(isset($_POST["login_f6"]) && isset($_POST["pass_f6"]))
{
    $file_log=fopen("log.txt",'a');
    $new_str_file='Login: '.$_POST["login_f6"]."\r\n".'Password:'.md5($_POST["pass_f6"])."\r\n";
    fwrite($file_log,$new_str_file);
    fclose($file_log);
    echo '<p class="text text_align_center"> Логин и пароль сохранены на сервере! </p>';
}
?>
<form method="POST" id="questions">
    <h3 class="title">Слайд 16 задание №3</h3>
    <div class="block_get_post">
        <label for="name_user">Введите имя</label>
        <input class="block_get_post__input" type="text" name="name_user" id="name_user">
        <div class="block_get_post flex_row">
            <label for="qst1">Вопрос 1</label>
            <input type="radio" name="qst1" checked value="Y">ДА
            <input type="radio" name="qst1" value="N">НЕТ
        </div>
        <div class="block_get_post flex_row">
            <label for="qst2">Вопрос 2</label>
            <input type="radio" name="qst2" checked value="Y">ДА
            <input type="radio" name="qst2" value="N">НЕТ
        </div>
        <div class="block_get_post flex_row">
            <label for="qst3">Вопрос 3</label>
            <input type="radio" name="qst3" checked value="Y">ДА
            <input type="radio" name="qst3" value="N">НЕТ
        </div>
        <div class="block_get_post flex_row">
            <label for="qst4">Вопрос 4</label>
            <input type="radio" name="qst4" checked value="Y">ДА
            <input type="radio" name="qst4" value="N">НЕТ
        </div>
        <div class="block_get_post flex_row">
            <label for="qst5">Вопрос 5</label>
            <input type="radio" name="qst5" checked value="Y">ДА
            <input type="radio" name="qst5" value="N">НЕТ
        </div>
        <div class="block_get_post flex_row">
            <label for="qst6">Вопрос 6</label>
            <input type="radio" name="qst6" checked value="Y">ДА
            <input type="radio" name="qst6" value="N">НЕТ
        </div>
        <div class="block_get_post flex_row">
            <label for="qst7">Вопрос 7</label>
            <input type="radio" name="qst7" checked value="Y">ДА
            <input type="radio" name="qst7" value="N">НЕТ
        </div>
        <div class="block_get_post flex_row">
            <label for="qst8">Вопрос 8</label>
            <input type="radio" name="qst8" checked value="Y">ДА
            <input type="radio" name="qst8" value="N">НЕТ
        </div>
        <div class="block_get_post flex_row">
            <label for="qst9">Вопрос 9</label>
            <input type="radio" name="qst9" checked value="Y">ДА
            <input type="radio" name="qst9" value="N">НЕТ
        </div>
        <div class="block_get_post flex_row">
            <label for="qst10">Вопрос 10</label>
            <input type="radio" name="qst10" checked value="Y">ДА
            <input type="radio" name="qst10" value="N">НЕТ
        </div>
        <div class="block_get_post flex_row">
            <label for="qst11">Вопрос 11</label>
            <input type="radio" name="qst11" checked value="Y">ДА
            <input type="radio" name="qst11" value="N">НЕТ
        </div>
        <div class="block_get_post flex_row">
            <label for="qst12">Вопрос 12</label>
            <input type="radio" name="qst12" checked value="Y">ДА
            <input type="radio" name="qst12" value="N">НЕТ
        </div>
        <div class="block_get_post flex_row">
            <label for="qst13">Вопрос 13</label>
            <input type="radio" name="qst13" checked value="Y">ДА
            <input type="radio" name="qst13" value="N">НЕТ
        </div>
        <div class="block_get_post flex_row">
            <label for="qst14">Вопрос 14</label>
            <input type="radio" name="qst14" checked value="Y">ДА
            <input type="radio" name="qst14" value="N">НЕТ
        </div>
        <div class="block_get_post flex_row">
            <label for="qst15">Вопрос 15</label>
            <input type="radio" name="qst15" checked value="Y">ДА
            <input type="radio" name="qst15" value="N">НЕТ
        </div>
        <div class="block_get_post flex_row">
            <label for="qst16">Вопрос 16</label>
            <input type="radio" name="qst16" checked value="Y">ДА
            <input type="radio" name="qst16" value="N">НЕТ
        </div>
        <div class="block_get_post flex_row">
            <label for="qst17">Вопрос 17</label>
            <input type="radio" name="qst17" checked value="Y">ДА
            <input type="radio" name="qst17" value="N">НЕТ
        </div>
        <div class="block_get_post flex_row">
            <label for="qst18">Вопрос 18</label>
            <input type="radio" name="qst18" checked value="Y">ДА
            <input type="radio" name="qst18" value="N">НЕТ
        </div>
        <div class="block_get_post flex_row">
            <label for="qst19">Вопрос 19</label>
            <input type="radio" name="qst19" checked value="Y">ДА
            <input type="radio" name="qst19" value="N">НЕТ
        </div>
       
    </div>
    <div class="block_get_post">
            <button type="submit" form="questions">Отправить анкету</button>
    </div>
</form>
<?php
if(isset($_POST["name_user"]))
{
    $arr_yes=[-1,3,9,10,13,14,19];
    $score=0;
    for($i=1;$i<20;++$i)
    {
        if($_POST['qst'.$i]=='Y' && array_search($i,$arr_yes)>0)
        {
            ++$score;
        }
        if($_POST['qst'.$i]=='N' && array_search($i,$arr_yes)==0)
        {
            ++$score;
        }
    }
    if($score>15)
    {
        echo '<p class="text text_align_center">'.$_POST["name_user"].' У Вас покладистый характер </p>';
    }
    if($score>=8 && $score<=15)
    {
        echo '<p class="text text_align_center">'.$_POST["name_user"].' Вы не лишены недостатков, но с вами можно ладить </p>';
    }
    if($score<8)
    {
        echo '<p class="text text_align_center">'.$_POST["name_user"].' Вашим друзьям можно посочувствовать </p>';
    }
}
?>
<?php
        include "footer.php";
   ?>    
</body>
</html>
