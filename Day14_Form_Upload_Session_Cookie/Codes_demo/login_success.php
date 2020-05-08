<?php
session_start();

//trường hợp user chưa đăng nhập và truy cập trực tiếp vào link này
//thì phải chuyển hướng họ về trang login
if (isset($_SESSION['username']) == FALSE) {
    $_SESSION['success'] = "Bạn cần login để truy cập trang này";
    header("Location: login.php");
    exit();
}

?>
<h3 style="color: green">
    <?php
    echo isset($_SESSION['success']) ? $_SESSION['success'] : '';
    unset($_SESSION['success']);
    ?>
</h3>
Xin chào,
<?php echo isset($_SESSION['username']) ? $_SESSION['username'] : '' ?>
<a href="logout.php">Logout</a>
