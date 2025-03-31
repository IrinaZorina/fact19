<?php require_once 'templates/Header.php' ?>
<?php
function readLines($filename) {
    if (!file_exists($filename)) {
        return [];
    }
    $lines = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    return $lines ?: [];
}
$file1 = 'file1.txt';
$file2 = 'file2.txt';
$outputFile = 'otvet2.txt';
$lines1 = readLines($file1);
$lines2 = readLines($file2);
$commonLines = array_intersect($lines1, $lines2);
$commonLines = array_unique($commonLines);
file_put_contents($outputFile, implode(PHP_EOL, $commonLines));
?>
<?php require_once 'templates/Footer.php' ?>