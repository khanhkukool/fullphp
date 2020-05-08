<?php
session_start();
require_once 'config.php';
$error = '';
if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $description = $_POST['description'];
    $salary = $_POST['salary'];
    $gender = $_POST['gender'];
    $brithday = $_POST['birthday'];

    if (empty($name)){
        $error = "Name không được để trống";
    }
    else{
        $sqlInsert = "INSERT INTO employees (`name`,`description`,`gender`,`salary`,`birthday`,`created_at`)
          value ('$name', '$description','$gender','$salary','$brithday')";
        $isInsert = mysqli_query($connection, $sqlInsert);
        if ($isInsert){
            $_SESSION['success'] = 'Thêm mới thành công';
            header("Location: index.php");
            exit();
        }
        else{
            $error = "Insert không thành công";
        }
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
               value="<?php echo isset($_POST['name']) ? $_POST['name'] : '' ?>">
    </div>
    <div class="form-group">
        <label>Description</label>
        <textarea name="description" class="form-control" rows="2"></textarea>
    </div>
    <div class="form-group">
        <label >Salary</label>
        <input type="text" class="form-control" name="salary"
               value="<?php echo isset($_POST['salary']) ? $_POST['salary'] : '' ?> ">
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
               value="<?php echo isset($_POST['birthday']) ? $_POST['birthday'] : '' ?> ">
    </div>
    <div class="form-group">
        <input type="submit" name="submit" value="Save">
        <input type="reset" name="reset" value="Cancel">
    </div>

    <h3 style="color: red">
        <?php
        echo $error;
        ?>
    </h3>

</form>




</body>
</html>