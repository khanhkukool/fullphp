<?php
session_start();
require_once 'config.php';

$error = '';
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $salary = $_POST['salary'];
    $gender = isset($_POST['gender']) ? $_POST['gender'] : false;
    $birthday = $_POST['birthday'];

    if (empty($name)) {
        $error = "Tên không được để trống";
    }else {
        $sqlInsert = "INSERT INTO employees(`name`, `description`, `gender`, `salary`, `birthday`) VALUES ('$name','$description','$gender','$salary','$birthday')";
        $isInsert = mysqli_query($connection, $sqlInsert);
        if ($isInsert) {
            $_SESSION['success'] = 'Thêm mới thành công';
            header("Location: index.php");
            exit();
        } else {
            $error = "Insert không thành công";
        }
    }
}
if (isset($_POST['cancel'])) {
    header("Location: index.php");
    exit();
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    <title>Bai1 - Create</title>
    <style>
        label {
            font-weight: bold;
        }
    </style>
</head>
<body>
<h3 style="color: red">
    <?php echo $error; ?>
</h3>
<div class="container">
    <h1>Create Record</h1>
    <form action="" method="post">
        <div class="form-group">
            <label> Name<span style="color: red">*</span></label>
            <input type="text" name="name" class="form-control"
                   value="<?php echo isset($_POST['name']) ? $_POST['name'] : '' ?>">
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea name="description" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label>Salary</label>
            <input type="number" name="salary" class="form-control">
        </div>
        <div class="form-group">
            <label>Gender</label>
            <br>
            <input type="radio" name="gender" value="1"> Male
            <input type="radio" name="gender" value="2"> Female
        </div>
        <div class="form-group">
            <label>Birthday</label>
            <input type="date" name="birthday" class="form-control" placeholder="mm/dd/yyyy">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Save</button>
        <button type="cancel" name="cancel" class="btn btn-light">Cancel</button>
    </form>
</div>
</body>
</html>
