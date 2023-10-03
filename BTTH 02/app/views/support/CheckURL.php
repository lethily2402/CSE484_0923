<?php
$currentURL = $_SERVER['REQUEST_URI'];
$currentPage = '';

if (strpos($currentURL, 'trangchu.php') !== false) {
    $currentPage = 'trangchu';
} elseif (strpos($currentURL, 'trangngoai.php') !== false) {
    $currentPage = 'trangngoai';
} elseif (strpos($currentURL, 'theloai.php') !== false || strpos($currentURL, 'addDataType.php') !== false || strpos($currentURL, 'editDataType.php') !== false) {
    $currentPage = 'theloai';
} elseif (strpos($currentURL, 'tacgia.php') !== false) {
    $currentPage = 'tacgia';
} elseif (strpos($currentURL, 'baiviet.php') !== false) {
    $currentPage = 'baiviet';
} elseif (strpos($currentURL, 'index.php') !== false || $currentPage=="") {
    $currentPage = 'index';
} elseif (strpos($currentURL, 'login.php') !== false) {
    $currentPage = 'login';
}
?>