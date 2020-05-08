<?php
session_start();
require_once 'config.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
//    check validate
    if (!is_numeric($id)) {
        $_SESSION['error'] = "Cần phải truyền id là số";
        header("Location: index.php");
        exit();
    }
    $querySelect = "SELECT * FROM employees WHERE id = $id";
    $results = mysqli_query($connection, $querySelect);
    $employee = [];
    if (mysqli_num_rows($results) > 0) {
        $employeeArr = mysqli_fetch_all($results, MYSQLI_ASSOC);
        $employee =  $employeeArr[0];
    }
}
//lặp lại thao tác xử lý lưu lại dữ liệu khi submit form
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    //tạo truy vấn update
    $queryUpdate = "UPDATE employees
    set `name` = '$name' WHERE id = {$employee['id']}";
    $isUpdate = mysqli_query($connection, $queryUpdate);
    if ($isUpdate) {
        $_SESSION['success'] = 'Update thành công';
        header("Location: index.php");
        exit();
    }
}
?>
<form action="" method="post">
    <h5>
        Cập nhật danh mục với id = <?php echo  $employee['id']?>
    </h5>
    Name :
    <input type="text" name="name"
           value="<?php echo  $employee['name']?>" />
    <br />
    <input type="text" name="description" value="<?php echo $employee['description']?>">
    <br />
    <input type="radio" name="gender" value="<?php echo $employee['gender']?>">Male
    <input type="radio" name="gender" value="<?php echo $employee['gender']?>">Female
    <br>
    <input type="text" name="salary" value="<?php echo $employee['salary']?>">
    <br>
    <input type="text" name="birthday" value="<?php echo $employee['birthday']?>">
    <br>
    <input type="text" name="created_at" value="<?php echo $employee['created_at']?>">
    <input type="submit" name="submit" value="Cập nhật" />
</form>