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
                <a href="/med.html" class="nav__link">Тема 1</a>
            </div>
            <div class="nav__item">
                <a href="./pages/cycles.php" class="nav__link">Циклы</a>
            </div>
            <div class="nav__item">
                <a href="/pages/array.php" class="nav__link">Массивы</a>
            </div>
       </nav>
       <div class="header__line">
       </div>
      
    </header> 