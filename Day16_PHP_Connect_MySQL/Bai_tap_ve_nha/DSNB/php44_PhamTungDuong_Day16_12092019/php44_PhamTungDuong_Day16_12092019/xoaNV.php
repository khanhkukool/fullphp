<?php
session_start();
$id=$_GET['id'];
require_once ("config.php");

    $sqliDelete = "DELETE FROM employees WHERE `id`='$id'";
    $isDelete = mysqli_query($connection, $sqliDelete);
    if ($isDelete) {
        header("Location:lietkeNV.php");
        exit();
    }
?>