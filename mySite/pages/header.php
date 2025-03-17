<header class="header"> 
       <nav class="nav">
            <div class="nav__logo">
            <?php
                $hour=date('H');
                if($hour>=8 && $hour<20)
                {
                    echo '
                        <img src="/assets/image/free-png.ru-451.png" class="nav_logo-img" alt="sun">
                    ';
            
                }
                else
                {
                    echo '<img src="/assets/image/free-png.ru-173.png" class="nav_logo-img" alt="moon">';
                }
        ?>      
            </div>
            <div class="nav__item">
                <a href="/pages/auth.php" class="nav__link">Авторизация</a>
            </div>
            <div class="nav__item">
                <a href="/pages/function.php" class="nav__link">Функции</a>
            </div>
            <div class="nav__item">
                <a href="./pages/cycles.php" class="nav__link">Циклы</a>
            </div>
            <div class="nav__item">
                <a href="/pages/array.php" class="nav__link">Массивы</a>
            </div>
            <div class="nav__item">
                <a href="/pages/get_post.php" class="nav__link">GET/POST</a>
            </div>
       </nav>
    <?php
    class user_info
    {
        public $login, $pass;
    }
    function arr_log_pass()
    { 
        $arr=[];
        $file=fopen("F:\lcserver\home\mySite\info\user_info.txt",'r');
        $log_key=false; $pass_key=false;
        $i=0;
        while(!feof($file))
        {
           
            $str=fgets($file);
            if(mb_strpos($str,"ogin:"))
            {
                $str_log=mb_substr($str,6);
                $str_log=str_replace("\r\n","",$str_log);
                $log_key=true;
            }
            if(mb_strpos($str,"ass:"))
            {
                $str_pass=mb_substr($str,5);
                $str_pass=str_replace("\r\n","",$str_pass);
                $pass_key=true;
            }
            if($log_key && $pass_key)
            {
                $arr[$i]= new user_info;
                $arr[$i]->login=$str_log;
                $arr[$i]->pass=$str_pass;
                $log_key=false; $pass_key=false;
                ++$i;
            }
           
        }
        fclose($file);
        return $arr;
    }
    // если передать вместо параметра $log 0 то пройдет проверка на наличие пароля в массиве аналогично если передать вместо параметра $pass 0
    function check_user($arr,$log1,$pass1)
    {
        if($log1!=0 && $pass1!=0)
        {
                for($i=0;$i<count($arr);++$i)
            {
                if($arr[$i]->login===$log1 && $arr[$i]->pass===md5($pass1))
                {
                    return true;
                }
            }
            return false;
        }
        if($pass1==0)
        {
            for($i=0;$i<count($arr);++$i)
            { 
                if($arr[$i]->login===$log1)
                {
                    return true;
                }
            }
            return false;
        }
    }
    ?>
      
    </header> 