<?php
require_once 'functions.php';
[$cssfunct, $logofunct]=themeSelect();
?>

    <footer>
<link rel = "stylesheet" href = "<?= $cssfunct ?>">
<div class="footer1" >
    <div class="copyright" >
        <p > (c) Константин Мосунов </p >
    </div >
    <div class="tg" >
        <a href = "https://t.me/@const_mos" >
        <img src = "assets/image/telegram.png" alt = "Связаться через Telegram" >
        </a >
    </div >
    <div class="whatsapp" >
        <a href = "https://api.whatsapp.com/send?phone=+79776077898" >
            <img src = "assets/image/whatsapp.png" alt = "Связаться через WhatsApp" >
        </a >
    </div >
</div >
</footer>
