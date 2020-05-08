<?php
session_start();
require_once 'config.php';
if (isset($_GET['id'])){
    $id = $_GET['id'];
    if (!is_numeric($id)) {
        $_SESSION['error'] = "Cần phải truyền id là số";
        header("Location: index.php");
        exit();
    }
    $querySelect = "SELECT * FROM employees WHERE id = $id";
    $results = mysqli_query($connection, $querySelect);
    $employ = [];
    if (mysqli_num_rows($results) > 0) {
        $employArr = mysqli_fetch_all($results, MYSQLI_ASSOC);
        $employ = $employArr[0];

    }
}
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $salary = $_POST['salary'];
    $gender = $_POST['gender'];
    $brithday = $_POST['birthday'];

    //tạo truy vấn update
    $queryUpdate = "UPDATE employees set `name,description,gender,salary,birthday,created_at` =
 '$name,$description,$salary,$gender,$brithday' WHERE id = {$employ['id']}";
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
<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>bai1</title>
</head>
<body>
<form action="" method="post" class="container">
    <h3>Create Record</h3>
    <div class="form-group">
        <label >Name *</label>
        <input type="text" class="form-control" name="name"
               value="<?php echo $employ['name'] ?>">
    </div>
    <div class="form-group">
        <label>Description</label>
        <input type="text" name="description" class="form-control" rows="2">
    </div>
    <div class="form-group">
        <label >Salary</label>
        <input type="text" class="form-control" name="salary"
               value="<?php echo $employ['salary'] ?> ">
    </div>

    <div class="form-group">
        <label>Gender</label>
        <br>
        <input type="radio" name="gender" value=""> Male
        <input type="radio" name="gender" value=""> Female
    </div>
    <div class="form-group">
        <label >Birthday</label>
        <input type="text" class="form-control" name="birthday" placeholder="mm/dd/yyyy"
               value="<?php echo $employ['birthday']  ?> ">
    </div>
    <div class="form-group">
        <a href="index.php"><input type="submit" name="submit" value="Save"></a>
        <input type="reset" name="reset" value="Cancel">
    </div>


</form>




</body>
</html>
