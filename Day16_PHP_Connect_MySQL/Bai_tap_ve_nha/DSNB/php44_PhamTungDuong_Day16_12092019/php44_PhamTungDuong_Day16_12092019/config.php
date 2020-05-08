<?php
$connection=mysqli_connect('localhost','root','','bt1','3306');
if (!$connection){
    die("Kết nối thất bại, ".mysqli_connect_error());
}
?>