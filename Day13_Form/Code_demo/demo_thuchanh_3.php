<?php
echo "<pre>";
print_r($_POST);
echo "</pre>";
$error = '';
$result = '';
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
//    validate
    if (empty($username) || empty($password)) {
        $error = "Username hoặc password không được để trống";
    } elseif (filter_var($username, FILTER_VALIDATE_EMAIL) == FALSE) {
        $error = "Username phải có định dạng email";
    } elseif (strlen($password) < 6) {
        $error = "Password cần phải >= 6 ký tự";
    } else {
        //pass validate
        if ($username == 'nguyenvietmanhit@gmail.com' &&
            $password == '123456') {
            $result = "Đăng nhập thành công";
        } else {
            $error = "Sai username hoặc password";
        }
    }
}
?>


<form action="" method="post">
    <h3 style="color: red">
        <?php echo $error; ?>
    </h3>
    <h3 style="color: green">
        <?php echo $result; ?>
    </h3>
    Username: <input type="text"
 name="username"
 value="<?php echo isset($_POST['username']) ? $_POST['username'] : '' ?>"/>
    <br/>
    Password: <input type="password" name="password" value=""/>
    <br/>
    <input type="submit" name="login" value="Login"/>
</form>