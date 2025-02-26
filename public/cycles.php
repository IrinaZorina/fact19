<?php include 'components/header.php'; ?>

<main>
  <h1>Задачи по циклам</h1>

  <h2>Вывести числа от 5 до 13</h2>
  <p>
    <?php
    for ($i = 5; $i <= 13; $i++) {
      echo $i . " ";
    }
    ?>
  </p>

  <h2>деление 1000 на 2</h2>
  <p>
    <?php
    $num = 1000;
    $iterations = 0;

    while ($num >= 50) {
      $num /= 2;
      $iterations++;
    }

    echo "Итоговое число: $num, Количество итераций: $iterations";
    ?>
  </p>

  <h2>с циклом for</h2>
  <p>
    <?php
    $num = 1000;
    for ($iterations = 0; $num >= 50; $iterations++) {
      $num /= 2;
    }

    echo "Итоговое число: $num, Количество итераций: $iterations";
    ?>
  </p>

  <h2>Вывод строк в зависимости от $i</h2>
  <p>
    <?php
    $i = 3;

    for ($j = 0; $j <= (10 - $i); $j++) {
      echo $j . " ";
    }
    ?>
  </p>

</main>

<?php include 'components/footer.php'; ?>