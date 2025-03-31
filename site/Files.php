<?php require_once 'inc/header.php' ?>
<?php
function readLines($filename)
{
    if (!file_exists($filename)) {
        return [];
    }
    $lines = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    return $lines ?: [];
}

$file1 = 'file1.txt';
$file2 = 'file2.txt';
$outputFile = 'vivod.txt';

$lines1 = readLines($file1);
$lines2 = readLines($file2);
$uniqueLines = array_merge(
    array_diff($lines1, $lines2),  // Строки из file1, которых нет в file2
    array_diff($lines2, $lines1)   // Строки из file2, которых нет в file1
);
$uniqueLines = array_unique($uniqueLines);
file_put_contents($outputFile, implode(PHP_EOL, $uniqueLines));
?>

<?php require_once 'inc/footer.php' ?>