<?php
//$_COOKIE
//khởi tạo cookie
echo "<pre>";
print_r($_COOKIE);
echo "</pre>";
setcookie('age', 29, time() + 3600);

setcookie("address", "Ha noi", time() + 5);

//lấy cookie
echo $_COOKIE['age'];
echo isset($_COOKIE['address']) ? $_COOKIE['address'] : '';

//xóa cookie
setcookie('age', '', time() - 1);