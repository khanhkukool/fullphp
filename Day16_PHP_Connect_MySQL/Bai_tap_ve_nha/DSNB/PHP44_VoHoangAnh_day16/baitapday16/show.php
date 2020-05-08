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
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bai1</title>
</head>
<body>
<form action="" method="get">
    View Record
    <p>
        Id <br>
        <?php echo $employ['id']?>

    </p>
    <p>
        Name: <br>
        <?php echo $employ['name']?>
    </p>
    <p>
        Description: <br>
        <?php echo $employ['description']?>
    </p>
    <p>
        Salary: <br>
        <?php echo $employ['gender']?>
    </p>
    <p>
        Salary: <br>
        <?php echo $employ['gender']?>
    </p>
    <p>
        Birthday: <br>
        <?php echo $employ['birthday']?>
    </p>
    <p>
        Created_at: <br>
        <?php echo $employ['created_at']?>
    </p>
</form>
<a href="index.php"><button type="button" class="btn btn-primary">Back</button></a>


</body>
</html>
