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
    $result = mysqli_query($connection, $querySelect);
    $employees = [];
    if (mysqli_num_rows($result) > 0) {
        $employeesArr = mysqli_fetch_all($result, MYSQLI_ASSOC);
        $employees = $employeesArr[0];

    }
}
if (isset($_POST['back'])){
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
    <title>Document</title>
    <style>
        label {
            font-weight: bold;
        }
    </style>
</head>
<body>
<div class="container">
    <form action="" method="post">
        <h1>
            View Record
        </h1>
        <label>ID</label>
        <p><?php echo $employees['id']; ?></p>
        <label>Name</label>
        <p><?php echo $employees['name']; ?></p>
        <label>Description</label>
        <p><?php echo $employees['description']; ?></p>
        <label>Sarary</label>
        <p><?php echo $employees['salary']; ?></p>
        <label>Gender</label>
        <p><?php
            $genderText = '';
            switch ($employees['gender']) {
                case 1:
                    $genderText = 'Male';
                    break;
                case 2:
                    $genderText = 'Female';
                    break;
            }
            echo $genderText;
            ?>
        </p>
        <label>Birthday</label>
        <p><?php echo $employees['birthday']; ?></p>
        <label>Created_at</label>
        <p><?php echo $employees['created_at']; ?></p>
        <button type="back" name="back" class="btn btn-primary">Back</button>
    </form>
</div>
</body>
</html>