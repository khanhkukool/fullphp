<?php
session_start();

require_once 'config.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    if (!is_numeric($id)) {
        $_SESSION['error'] = "Cần phải truyền id là số";
        header("Location: index.php");
        exit();
    }
    $queryDel = "DELETE FROM employees WHERE id = $id";
    $result = mysqli_query($connection, $queryDel);
    if ($result){
        header("Location: index.php");
        $_SESSION['success'] = "Xóa thành công";
        exit();
    }else{
        $_SESSION['error'] = "Xóa thất bại";
    }
}
?>