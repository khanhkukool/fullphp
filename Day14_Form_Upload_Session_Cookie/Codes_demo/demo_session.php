<?php
session_start();
echo '<pre>';
print_r($_SESSION);
echo '</pre>';

//thêm dữ liệu cho session
$_SESSION['name'] = 'Mạnh';
$_SESSION['age'] = 29;
$_SESSION['true'] = TRUE;

//lấy giá trị từ session
echo "Tên của bạn là: " . $_SESSION['name'];
echo "<br />";
echo "Tuổi của bạn là: " . $_SESSION['age'];
echo "<br />";

//xóa phần tử trong session
//unset($_SESSION['name']);

//xóa tất cả session đang có trên hệ thống
//session_destroy();

//echo '<pre>';
//print_r($_SESSION);
//echo '</pre>';