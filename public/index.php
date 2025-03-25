<?php include 'components/header.php'; ?>
<?php
session_start();
$lastPage = $_SESSION["last_page"] ?? "Неизвестно";
$bgColor = $_SESSION["bg_color"] ?? "#ffffff";
?>

<main style="background-color: <?= htmlspecialchars($bgColor) ?>;" class="container">
  <img class="photo" src="https://i.postimg.cc/qM2bkr56/photo-2025-01-29-12-28-39.jpg" />
  <div class="info">
    <div class="name">Протасов Антон</div>
    <div class="about">
      <span style="color: blueviolet">Мне 24 года,</span> я фронтенд разработчик, люблю спорт, занимаюсь баскетболом и мма.
    </div>
    <div class="feedback">
      <?php echo highlightEvenOddWords("На первых занятиях, к сожалению, смог пробыть только первую половину, в целом всё структурированно и понятно изложено было, только чуть добавил бы скорости", "red", "green"); ?>
    </div>
  </div>
  <div class="sections-wrapper">
    <section class="block one">
      <div class="card-wrapper">
        <img src="./assets/images/moscow.jpg" alt="Москва" />
        <div class="description">Москва — столица России, крупнейший город страны.</div>
      </div>
      <div class="card-wrapper">
        <img src="./assets/images/spb.jpg" alt="Санкт-Петербург" />
        <div class="description">
          Санкт-Петербург — культурная столица России, город музеев и каналов.
        </div>
      </div>
      <div class="card-wrapper">
        <img src="./assets/images/kazan.jpg" alt="Казань" />
        <div class="description">
          Казань — столица Татарстана, город с богатым историческим наследием.
        </div>
      </div>
      <div class="card-wrapper">
        <img src="./assets/images/nizhniy-novgorod.jpg" alt="Нижний Новгород" />
        <div class="description">Нижний Новгород — древний город с живописной набережной.</div>
      </div>
    </section>
    <section class="block two">
      <div class="card-wrapper">
        <img src="./assets/images/ekb.jpg" alt="Екатеринбург" />
        <div class="description">
          Екатеринбург — крупный промышленный и культурный центр Урала.
        </div>
      </div>
      <div class="card-wrapper">
        <img src="./assets/images/vladivostok.jpg" alt="Владивосток" />
        <div class="description">Владивосток — главный порт России на Тихом океане.</div>
      </div>
      <div class="card-wrapper">
        <img src="./assets/images/samara.jpg" alt="Самара" />
        <div class="description">
          Самара — город на Волге, известный своими космическими технологиями.
        </div>
      </div>
      <div class="card-wrapper">
        <img src="./assets/images/novosib.jpg" alt="Новосибирск" />
        <div class="description">
          Новосибирск — крупнейший город Сибири, научный и промышленный центр.
        </div>
      </div>
    </section>
  </div>

  <div class="statistics">
    <p>Дата рождения: <?php echo date("d.m.Y", strtotime($birthDate)); ?></p>
    <p>Текущая дата: <?php echo date("d.m.Y"); ?></p>
    <p>Разница в днях: <?php echo $daysDifference; ?></p>
    <p>Количество гласных на странице: <?php echo $totalVowels; ?></p>
    <p>Количество слов на странице: <?php echo $totalWords; ?></p>
  </div>
  <?php if (isset($_SESSION['user'])): ?>
    <p>Вы вошли как <?= $_SESSION['user'] ?> </p>
    <p>Последняя посещенная страница: <?= htmlspecialchars($lastPage) ?></p>
  <?php endif; ?>
</main>

<?php include 'components/footer.php'; ?>