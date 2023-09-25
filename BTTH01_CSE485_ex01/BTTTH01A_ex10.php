<?php
function convertToUppercase($arr) {
    $result = array_map(function($item) {
        if (is_string($item)) {
            return strtoupper($item);
        }
        return $item;
    }, $arr);
    return $result;
}
$arrs = ['1', 'b', 'c', 'd'];
$result1 = convertToUppercase($arrs);
var_dump($result1);

$arrs = ['a', 0, null, false];
$result2 = convertToUppercase($arrs);
var_dump($result2);
?>