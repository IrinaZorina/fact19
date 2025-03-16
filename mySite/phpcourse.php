<?php require_once'inc/header.php'?>
<?php
switch ($_GET['laba']){
    case 1:
        echo 'Лабараторная 1';
        break;
        case 2:
            echo 'Лабараторная 2';
            break;
    case 3:
        echo 'Лабараторная 3';
        break;
    case 4:
        echo 'Лабараторная 4';
        break;
}
?>
<?php require_once  'inc/footer.php'?>
