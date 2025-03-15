<?php include_once 'inc/head.php'; ?>
<body>
<p style="color: white">
    <?php
    switch ($_GET['lab']) {
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
</p>
</body>


<?php include_once 'inc/footer.php'; ?>
