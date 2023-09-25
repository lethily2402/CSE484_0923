<?php
$a = [
 'a' => [
 'b' => 0,
 'c' => 1
 ],
 'b' => [
 'e' => 2,
 'o' => [
 'b' => 3
 ]
 ]
];
$valueB = $a['b']['o']['b'];
echo $valueB; 
//
$valueC = $a['a']['c'];
echo $valueC;
//
$infoA = $a['a'];
print_r($infoA);
?>