<?php
date_default_timezone_set('Asia/Yekaterinburg'); // Устанавливаем часовой пояс Екатеринбурга
$hour = date('H'); // Получаем текущий час

// Определяем тему в зависимости от времени суток
if ($hour >= 8 && $hour < 20) {
  $theme = 'light-theme';
} else {
  $theme = 'dark-theme';
}
?>
<?php include __DIR__ . '/header.php';?>
  <div class="container">
    <h1 class="title">Евгений Крупнов</h1>
    <div class="Name"></div>
    <div class="AboutMe">
      <h2>Обо мне</h2>
      Меня зовут Евгений. Мне 33 года, я люблю проводить свое свободное
      время,занимаясь спортом, путешествуя с семьей, также увлекаюсь чтением
      книг. Моя профессиональная деятельность с 20 лет связана с продажами,
      потому что мне нравится работать с людьми и в команде. В 25 лет поступил
      в институт "экономики и управления" г.Челябинска, специальность
      "менеджмент организации" Есть опыт ведения собственного бизнеса
      (интернет магазин), на сегодняшний день работаю на должности помошника
      управляющего в сети розничной торговли. Но в 2024 году решился получить
      новую профессию, на мой взгляд, более интересную,перспективную , и
      теперь я здесь.
    </div>
    <div class="Review">
      <h2>Отзыв о курсе</h2>
      Как человек,который пришел на курс с полным остутствием опыта и знаний в
      этой сфере, хочу сказать, что информация подается понятно,вся теория
      сразу подкрепляется практикой, мне это очень нравится. Начал обучение с
      бесплатного курса, смог понять весь материал самостоятельно, что очень
      мне помогло на первом занятии основного курса. Думаю дойти до конца и
      получить необходимые навыки, которые будут цениться на рынке труда.
    </div>
  </div>
  <div class="Crimea-container">
    <h1 class="titlecrimea">Достопримечательности Крыма</h1>
    <div class="Crimea">
      <div class="Crimea-box">
        <div class="Crimea-item fiolent"></div>
        <div class="Crimea-caption">
          Один из самых популярных мысов Крыма — мыс Фиолент
        </div>
      </div>

      <div class="Crimea-box">
        <div class="Crimea-item hersones"></div>
        <div class="Crimea-caption">Древнегреческий город Херсонес</div>
      </div>

      <div class="Crimea-box">
        <div class="Crimea-item ipetri"></div>
        <div class="Crimea-caption">
          Самое посещаемое место в Ялте — гора Ай-Петри
        </div>
      </div>

      <div class="Crimea-box">
        <div class="Crimea-item sapun"></div>
        <div class="Crimea-caption">
          Сапун-гора — ключевая оборонительная позиция к г. Севастополь во
          время ВОВ
        </div>
      </div>
    </div>
  </div>

  <div class="city-container">
    <h1 class="titlecity">Города Крыма</h1>
    <div class="city-box">
      <div class="city-item sevastopol"></div>
      <div class="city-caption">Севастополь</div>
    </div>
    <div class="city-box">
      <div class="city-item simferopol"></div>
      <div class="city-caption">Симферополь</div>
    </div>
    <div class="city-box">
      <div class="city-item yalta"></div>
      <div class="city-caption">Ялта</div>
    </div>
    <div class="city-box">
      <div class="city-item balaklava"></div>
      <div class="city-caption">Балаклава</div>
    </div>
  </div>
  <?php include __DIR__ . '/footer.php';?>