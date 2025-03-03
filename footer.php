<?php
$time = date("H");
if ($time >= 8 && $time < 20) {
    $tiptemy = '/assets/css/styleday.css';
} else {
    $tiptemy = '/assets/css/style.css';
}
?>

    <footer>
<link rel = "stylesheet" href = "<?= $tiptemy ?>">
<div class="footer1" >
    <div class="copyright" >
        <p > (c) 2025 </p >
    </div >
    <div class="tg" >
        <a href = "https://t.me/onetwo4200" >
        <img src = "assets/image/telegramico.png" alt = "Связаться через Telegram" >
        </a >
    </div >
    <div class="whatsapp" >
        <a href="https://api.whatsapp.com/send?phone=79031442722">
            <img src = "assets/image/whatsappico.png" alt = "Связаться через WhatsApp" >
        </a >
    </div >
</div >
</footer>
