<?php
$str = 'HELLO';
$arr0 = [
    substr($str, 0, 3),
    substr($str, 3)
];
$arr1 = [
    substr($str, 0, 2),
    substr($str, 2)
];
print_r($arr0);
print_r($arr1);
?>