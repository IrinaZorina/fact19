<?php include 'components/header.php'; ?>

<?php
$stringArray = [
  ["Арбуз", "Банан", "Авокадо"],
  ["Апельсин", "Абрикос", "Манго"],
  ["Арахис", "Вишня", "Ананас"]
];

echo '<div class="block">';
echo "<h2>слова на 'А':</h2><ul>";
foreach ($stringArray as $row) {
  foreach ($row as $word) {
    if (mb_strpos($word, "А") === 0) {
      echo "<li>$word</li>";
    }
  }
}
echo "</ul></div>";

$numberArray = [
  [1, 2, 3],
  [4, 5, 6, 7],
  [8, 9]
];

$totalCount = 0;
$dimensionCounts = [];

foreach ($numberArray as $index => $row) {
  $dimensionCounts[$index] = count($row);
  $totalCount += $dimensionCounts[$index];
}

echo '<div class="block">';
echo "<h2>числовой массив</h2>";
echo "<p><strong>сумма элементов:</strong> $totalCount</p>";
echo "<ul>";
foreach ($dimensionCounts as $index => $count) {
  echo "<li><strong>кол-во в строке $index:</strong> $count</li>";
}
echo "</ul></div>";
?>


<?php include 'components/footer.php'; ?>