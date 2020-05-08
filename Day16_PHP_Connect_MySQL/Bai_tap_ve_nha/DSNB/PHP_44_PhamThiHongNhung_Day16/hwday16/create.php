<?php
session_start();
require_once 'config.php';
$error = '';
if (isset($_GET['submit'])) {
    $name = $_GET['name'];
    if (empty($name)) {
        $error = "Tên không được để trống";
    }
    else{
        $sqlInsert = "INSERT INTO employees (`name`) VALUES ('$name')";
        $isInsert = mysqli_query($connection, $sqlInsert);
        if($isInsert){
            $_SESSION['seccess'] = "Thêm mới thành công ! ";
            header("Location: index.php");
            exit();
        }
        else{
            $error = "Insert không thành công ";
        }
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<h1>Create Record</h1>
<form action="" method="get" style="width: 50%">
    <h3 style="color: red">
        <?php echo $error; ?>
    </h3>
    <div class="form-group">
        <label for="exampleInputName">Name *</label>
        <input type="text" class="form-control" id="exampleInputName" value="name">
    </div>
    <div class="form-group">
        <label for="exampleInputName">Description</label>
        <input type="text" class="form-control" id="exampleInputDecription">
    </div>
    <div class="form-group">
        <label for="exampleInputName">Salary</label>
        <input type="text" class="form-control" id="exampleInputSalary">
    </div>
    <div class="form-group">
        <label for="exampleInputGender">Gender</label>
        <input type="radio" >Male
        <input type="radio" >Female
    </div>
    <div class="form-group">
        <label for="exampleInputName">Birthday</label>
        <input type="text" class="form-control" id="exampleInputBirthday" placeholder="mm/dd/yy">
    </div>
    <br>
    <input type="submit" name="submit" value="Submit" class="btn btn-primary">
    <input type="cancel" name="cancel" value="Cancel" class="btn btn-light">
</form>
</body>
</html>
