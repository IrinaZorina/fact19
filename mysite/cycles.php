<?php include_once 'inc/head.php'; ?>
<div class="cycles">
    <h2>Задание 1</h2>
    <?php
    $i = 5;
    while ($i <= 13) {
        echo $i . "<br>";
        $i++;
    }
    ?>
    <h2>Задание 2</h2>
    <div class="cyclesContainer">
        <div class="while"> Через While
            <br>
            <br>
            <?php
            $num = 1000;
            $quan = 0;
            while ($num > 50) {
                $quan++;
                $num /= 2;
            }
            echo $num . " " . "<br>";
            echo 'Итераций выполнено ' . $quan;
            ?>
        </div>

        <div class="for">Через For
            <br>
            <br>
            <?php
            $quan=0;
            for ($num = 1000; $num>50; $quan++) {
                $num /= 2;
            }
            echo $num . " " . "<br>";
            echo 'Итераций выполнено ' . $quan;
            ?>
        </div>
    </div>
    <h2>Задание 3</h2>
    <?php
    $i=0;
    for ($j=0;$j<=10-$i;$j++) {
        echo $j;
       if ($j<10-$i) {
           echo " ";
       }
    }
    ?>
</div>
<?php include_once 'inc/footer.php'; ?>
