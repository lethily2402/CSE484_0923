<?php
$array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];

$maxLength = 0;
$minLength = PHP_INT_MAX;
$longestString = '';
$shortestString = '';

foreach ($array as $string) {
    $length = strlen($string);
    
    if ($length > $maxLength) {
        $maxLength = $length;
        $longestString = $string;
    }
    
    if ($length < $minLength) {
        $minLength = $length;
        $shortestString = $string;
    }
}

echo "Chuỗi lớn nhất là $longestString, độ dài = $maxLength <br> " ;
echo "Chuỗi nhỏ nhất là $shortestString, độ dài = $minLength ";
?>