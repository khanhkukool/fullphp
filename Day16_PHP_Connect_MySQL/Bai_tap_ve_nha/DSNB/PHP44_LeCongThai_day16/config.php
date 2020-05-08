<?php
const DB_SERVER = 'localhost';
const DB_USERNAME = 'root';
const DB_PASSWORD = '';
const DB_NAME = 'bt1';
const DB_PORT = 3306;
$connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME,DB_PORT);
if (!$connection) {
    die("Error! Could not connect: " . mysqli_connect_error());
}
?>
