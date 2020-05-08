<?php
const DB_HOST='localhost';
const DB_USERNAME='root';
const DB_PASSWORD='';
const DB_NAME='database_btvn';
const DB_PORT=3306;
$connection=mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME,DB_PORT);
if(!$connection){
    die("ket noi that bai,loi nhu sau:".mysqli_connect_error());
}
echo"<h1>ket noi csdl ".DB_NAME. " thanh cong</h1>";
mysqli_set_charset($connection,'utf8');
?>