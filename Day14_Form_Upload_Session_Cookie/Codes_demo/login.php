<?php
session_start();

//trường hợp user đã đăng nhập rồi, thì chuyển hướng user
//tới trang đăng nhập thành công, mà ko cho phép họ truy cập lại trang
//login này nữa
if (isset($_SESSION['username'])) {
    $_SESSION['success'] = 'Bạn đã login rồi, không thể truy cập lại
    trang login nữa';
    header("Location: login_success.php");
    exit();
}

$error = '';
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    //trường hợp đăng nhập thành công
    if ($username == 'nvmanh' && $password == 123456) {
        //lưu session cho username
        $_SESSION['username'] = $username;
        header("Location: login_success.php");
        //cần kết thúc chuyển hướng bằng hàm exit để
//        tránh lỗi ko chuyển hướng được trong 1 số trường hợp
        exit();
    } else {
        $error = 'Sai tài khoản hoặc mật khẩu';
    }
}
?>
<h3 style="color: green">
    <?php
    echo isset($_SESSION['success']) ? $_SESSION['success'] : null;
    unset($_SESSION['success']);
    ?>
</h3>
<h3 style="color: red">
    <?php echo $error; ?>
</h3>
<form action="" method="post">
    Username: <input type="text" name="username" value=""/>
    <br/>
    Password: <input type="password" name="password" value=""/>
    <br/>
    <input type="submit" name="submit" value="Login"/>
</form>