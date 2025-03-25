<?php
session_start();

if (!isset($_SESSION["user"])) {
  header("Location: index.php");
  exit();
}
?>
<?php include 'components/header.php';
$lastPage = $_SESSION["last_page"] ?? "Неизвестно";
$bgColor = $_SESSION["bg_color"] ?? "#ffffff";
?>

<main style="background-color: <?= htmlspecialchars($bgColor) ?>;">
  <h2>Добро пожаловать, <?= $_SESSION["user"] ?>!</h2>
  <p><a href="index.php">Главная</a></p>
  <p>Последняя посещенная страница: <?= htmlspecialchars($lastPage) ?></p>
  <a href="fact.php">Fact</a> | <a href="bitrix.php">Bitrix</a> | <a href="logout.php">Выйти</a>

  <form action="color.php" method="POST">
    <label>Выберите цвет фона:
      <select name="bg_color">
        <option value="#ffffff" <?= ($bgColor == "#ffffff") ? "selected" : "" ?>>Белый</option>
        <option value="#ffcccc" <?= ($bgColor == "#ffcccc") ? "selected" : "" ?>>Красный</option>
        <option value="#ccffcc" <?= ($bgColor == "#ccffcc") ? "selected" : "" ?>>Зеленый</option>
        <option value="#ccccff" <?= ($bgColor == "#ccccff") ? "selected" : "" ?>>Синий</option>
      </select>
    </label>
    <button type="submit">Сохранить</button>
  </form>
</main>
<?php include 'components/footer.php'; ?>