<?php
$numbers = [
    'key1' => 12, 
    'key2' => 30, 
    'key3' => 4, 
    'key4' => -123, 
    'key5' => 1234, 
    'key6' => -12565, 
   ];
   
   // Lấy ra phần tử đầu tiên và phần tử cuối cùng trong mảng
   $firstElement = reset($numbers);
   $lastElement = end($numbers);
   
   echo "Phần tử đầu tiên: " . $firstElement . "\n";
   echo "Phần tử cuối cùng: " . $lastElement . "\n";
   
   // Tìm số lớn nhất, số nhỏ nhất và tổng các giá trị từ mảng
   $maxValue = max($numbers);
   $minValue = min($numbers);
   $sum = array_sum($numbers);
   
   echo "Số lớn nhất: " . $maxValue . "\n";
   echo "Số nhỏ nhất: " . $minValue . "\n";
   echo "Tổng các giá trị: " . $sum . "\n";
   
   // Sắp xếp mảng theo chiều tăng, giảm các giá trị
   asort($numbers); // Sắp xếp tăng dần theo giá trị
   print_r($numbers);
   
   arsort($numbers); // Sắp xếp giảm dần theo giá trị
   print_r($numbers);
   
   // Sắp xếp mảng theo chiều tăng, giảm các key
   ksort($numbers); // Sắp xếp tăng dần theo key
   print_r($numbers);
   
   krsort($numbers); // Sắp xếp giảm dần theo key
   print_r($numbers);
?>