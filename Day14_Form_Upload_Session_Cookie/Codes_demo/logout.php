<?php
session_start();
//khi logout, sẽ xóa hết session đang có liên quan
//đến user đang đăng nhập, đồng thời chuyển hướng user
//về trang login
unset($_SESSION['username']);
$_SESSION['success'] = 'Đăng xuất thành công';
header("Location: login.php");
exit();