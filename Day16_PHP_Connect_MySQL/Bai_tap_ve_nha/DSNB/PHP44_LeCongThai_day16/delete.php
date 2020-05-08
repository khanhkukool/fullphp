<?php
require_once 'config.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $querySelect = "SELECT * FROM employees where id = $id";
    $results = mysqli_query($connection, $querySelect);
    $sqlInsert = "DELETE FROM `employees` WHERE id = $id";
    $isInsert = mysqli_query($connection, $sqlInsert);
    if ($isInsert) {
        header("Location: index.php");
        exit();
    }
}
mysqli_close($connection);
