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
    $querySelect = "SELECT * FROM employees WHERE id = $id";
    $results = mysqli_query($connection, $querySelect);
    $employee = [];
    if (mysqli_num_rows($results) > 0) {
        $employeeArr = mysqli_fetch_all($results, MYSQLI_ASSOC);
        $employee = $employeeArr[0];
    }
}
if (isset($_POST['submit'])) {
    $name=$_POST['name'];
    $description=$_POST['description'];
    $gender=$_POST['gender'];
    $salary=$_POST['salary'];
    $birthday=$_POST['birthday'];
    //tạo truy vấn update
    $queryUpdate = "UPDATE employees
    set (`name`,`description`,`gender`,`salary`,`birthday`) = ('$name','$description','$gender','$salary','$birthday')
     WHERE id = {$employee['id']}";
    $isUpdate = mysqli_query($connection, $queryUpdate);
    if ($isUpdate) {
        $_SESSION['success'] = 'Update thành công';
        header("Location: index.php");
        exit();
    }
    else {
        //
    }
}
?>
<form action="" method="post">
    <h5>

        Cập nhật danh mục với id = <?php if (!empty($employee['id'])) {
            echo $employee['id'];
        } ?>

    </h5>
    Name:<br/>
    <input type="text" name="name" value="<?php echo isset($_POST['name'])? $_POST['name']:'' ?>"><br/>
    Description:<br/>
    <input type="text" name="description" value="<?php echo isset($_POST['description'])? $_POST['description']:'' ?>"><br/>
    Salary<br/>
    <input type="text" name="salary" value="<?php echo isset($_POST['salary'])? $_POST['salary']:'' ?>"><br/>
    Gender:<br/>
    <input type="radio" name="gender" value="1">Male
    <input type="radio" name="gender" value="0">Female<br/>
    Birthday:<br/>
    <input type="text" name="birthday" value="<?php echo isset($_POST['birthday'])? $_POST['birthday']:'' ?>"
           placeholder="mm/dd/yyyy"><br/>
    <input type="submit" name="submit" value="Save">
    <input type="submit" name="cancel" value="Cancel">
</form>
