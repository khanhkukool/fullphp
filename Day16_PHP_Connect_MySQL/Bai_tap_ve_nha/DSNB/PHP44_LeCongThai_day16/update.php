<?php
require_once 'config.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $querySelect = "SELECT * FROM employees where id = $id";
    $results = mysqli_query($connection, $querySelect);
    $employees = [];
    if (mysqli_num_rows($results) > 0) {
        $employeesArr = mysqli_fetch_all($results, MYSQLI_ASSOC);
        $employees = $employeesArr[0];
    }
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $Description = $_POST['Description'];
        $Salary = $_POST['Salary'];
        $gender = $_POST['gender'] == 1 ? "Male" : "Female";
        $Birthday = $_POST['Birthday'];
        $queryUpdate = "UPDATE employees set `name` = '$name',`Description`= '$Description', `Salary` = '$Salary',`Gender` = '$gender', `Birthday` = '$Birthday' WHERE id = {$employees['id']}";
        $isUpdate = mysqli_query($connection, $queryUpdate);
        if ($isUpdate) {
            header("Location: index.php");
            exit();
        }
    }
    mysqli_close($connection);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript">

    </script>
</head>
<body>
<div class="container" style="line-height: 30px">
    <form action="" method="post">
    <h1>Update Form</h1>
    <hr>
    <div class="form-group">
        <b>Name</b><br>
        <input type="text" name="name" value="<?php echo $employees['Name']; ?>" class="form-control">
    </div>
    <div class="form-group">
        <b>Description</b>
        <input type="text" name="Description" value="<?php echo $employees['Description']; ?>" class="form-control">
    </div>
    <div class="form-group">
        <b>Salary</b><br>
        <input type="number" name="Salary" value="<?php echo $employees['Salary']; ?>" class="form-control">
    </div>
    <div class="form-group">
        <b>Gender</b><br>
        <input type="radio" name="gender" value="1" checked>Male
        <input type="radio" name="gender" value="2" >Female
    </div>
    <div class="form-group">
        <b>Birthday</b>
        <input type="datetime-local" name="Birthday" class="form-control">
    </div>
    <input type="submit" name="submit" value="Submit"class="btn btn-primary">
    <a href="index.php" class="btn">Cancer</a>
    </form>
</div>
</body>
</html>