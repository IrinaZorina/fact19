<?php
function getFullText($link)
{
  return trim(strip_tags(file_get_contents($link)));
}

function countVowels($link)
{
  $page = file_get_contents($link);
  $pageText = strip_tags($page);
  return preg_match_all('/[аеёиоуэюяАЕЁИОУЭЮЯ]/u', $pageText);
}

function countWords($link)
{
  $content = getFullText($link);
  return str_word_count($content, 0, "АаБбВвГгДдЕеЁёЖжЗзИиЙйКкЛлМмНнОоПпРрСсТтУуФфХхЦцЧчШшЩщЪъЫыЬьЭэЮюЯя");
}

function highlightEvenOddWords($text, $color1, $color2)
{
  $words = explode(" ", $text);
  $coloredText = "";
  for ($i = 0; $i < count($words); $i++) {
    $color = $i % 2 == 0 ? $color1 : $color2;
    $coloredText .= "<span style='color: $color'>{$words[$i]}</span> ";
  }
  return trim($coloredText);
}

function getDaysDifference($birthDate)
{
  $birthTimestamp = strtotime($birthDate);
  $currentTimestamp = time();
  return floor(($currentTimestamp - $birthTimestamp) / (60 * 60 * 24));
}

function changeTheme()
{
  $hour = date("H");

  return ($hour >= 8 && $hour < 20) ? "day-theme" : "night-theme";

}

$birthDate = "2000-08-02";
$daysDifference = getDaysDifference($birthDate);

$totalWords = countWords("index.php");
$totalVowels = countVowels("index.php");
?>