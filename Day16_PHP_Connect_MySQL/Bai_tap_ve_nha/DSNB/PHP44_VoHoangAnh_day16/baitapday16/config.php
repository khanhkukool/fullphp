<?php
//Chứa các thông số kết nối tới csdl
const DB_HOST = 'localhost';
const DB_USERNAME = 'root';
const DB_PASSWORD = '';
const DB_NAME = 'bai1_sql_connect';
const DB_PORT = 3306;
$connection = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME, DB_PORT);
?>