<?php
$arrs = [2,5,6,9,2,5,6,12,5];
//tính tổng//
function tong($arrs) {
    $sum = array_sum($arrs);
    return $sum;
}
//tính tích//
function tich($arrs) {
    $product = array_product($arrs);
    return $product;
}
// tính hiệu//
$diff = $arrs[0];
for ($i = 1; $i < count($arrs); $i++) {
    $diff -= $arrs[$i];
}
// tính thương//
$quotient = $arrs[0];
for ($i = 1; $i < count($arrs); $i++) {
    if ($arrs[$i] != 0) {
        $quotient /= $arrs[$i];
    } else {
        echo "Lỗi: Chia cho 0 không hợp lệ!";
        break;
    }
}


$sum = tong($arrs);
$product = tich($arrs);

echo "Tổng các phần tử = " . implode(" + ", $arrs) . " = " . $sum . "<br>" ; 
echo "Tích các phần tử = " . implode(" * ", $arrs) . " = " . $product . "<br>" ;
echo "Hiệu các phần tử = " . implode(" - ", $arrs) . " = " . $diff . "<br>" ;
echo "Thương các phần tử = " . implode(" / ", $arrs) . " = " . $quotient . "<br>" ;
?>