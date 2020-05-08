<?php
//hàm tính chu vi hcn
function tinhChuViHcn($width, $height) {
    $chuvi = ($width + $height) * 2;

//    echo "Chu vi hvc la $chuvi";
    return $chuvi;
//    echo "<br/>";
}

$chuVi = tinhChuViHcn(4, 2);
echo "Chu vi hcn = $chuVi";
?>