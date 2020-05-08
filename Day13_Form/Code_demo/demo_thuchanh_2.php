<?php
echo "<pre>";
print_r($_GET);
echo "</pre>";

$error = '';
$result = '';
//kiểm tra xem đã click nút submit form hay chưa
if (isset($_GET['submit'])) {
    $name = $_GET['name'];
//    echo $name;
    //check validate
    if (empty($name)) {
        $error = "Tên không được để trống";
    } else if (strlen($name) < 6) {
        $error = "Tên phải có độ dài >= 6 ký tự";
    } else {
        //pass validate
        $result = "Chào bạn, " . $name;
    }
}
?>
<form action="" method="get">
    <h3 style="color: red">
        <?php echo $error; ?>
    </h3>
    <h3>Nhập tên của bạn</h3>
    <input type="text" name="name"
           value="<?php echo isset($name) ? $name : ''; ?>"/>
    <input type="submit" name="submit" value="Show thông tin"/>
    <h3 style="color: green">
        <?php echo $result; ?>
    </h3>
</form>