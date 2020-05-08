<?php
const DB_HOST = 'localhost';
const DB_USERNAME = 'root';
const DB_PASSWORD = '';
const DB_NAME = 'database_baitap';
const DB_PORT = 3306;
$connection = mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME,DB_PORT);
if (!$connection){
    die("Kết nối CSDL thất bại, lỗi như sau" . mysqli_connect_error());
}

echo "<h1>Kết nối CSDL " . DB_NAME . " thành công</h1>";
mysqli_set_charset($connection,'utf8');
?>