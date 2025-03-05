<?php
require_once 'functions.php';

$hour = date("H");
if ($hour >= 8 && $hour < 20) {
$style = './assets/style/styles.css';
} else {
$style = './assets/style/nightTheme.css';
}
