<?php
require_once 'config.php';
$sqlSelect = "SELECT * FROM employees ";
$result = mysqli_query($connection , $sqlSelect);
$employees = [];
if (mysqli_num_rows($result) >0){
    $employees = mysqli_fetch_all($result,MYSQLI_ASSOC);
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>bai1</title>
</head>
<body>
<a href="create.php"><button type="button" class="btn btn-success">++ Add New Employee</button></a>
<table border="1" cellspacing="" cellpadding="7">
        <h3>Employees List</h3>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>Salary</th>
        <th>Gender</th>
        <th>Birthday</th>
        <th>Created_at</th>
        <th>Action</th>
    </tr>
    <?php if (empty($employees)): ?>
        <tr>
            <td colspan="8"> Không có bản ghi nào </td>
        </tr>
    <?php else: ?>
    <?php foreach ($employees AS $employ): ?>
    <tr>
        <td>
            <?php echo $employ['id'] ?>
        </td>
        <td>
            <?php echo $employ['name']?>
        </td>
        <td>
            <?php echo $employ['description']?>
        </td>
        <td>
            <?php echo $employ['salary']   ." VND"?>
        </td>
        <td>
            <?php echo $employ['gender']?>
        </td>
        <td>
            <?php echo $employ['birthday']?>
        </td>
        <td>
            <?php echo $employ['created_at']?>
        </td>
        <td>
            <a href="show.php ? id= <?php echo $employ['id'] ?>"><i class="fas fa-eye"></i></a>
            <a href="update.php ? id= <?php echo $employ['id'] ?>"><i class="fas fa-pen"></i></a>
            <a onclick=" return confirm('Bạn có muốn xoá hay không?')"
               href="delete.php ? id= <?php $employ['id']?>"><i class="fas fa-trash-alt"></i></a>
        </td>
    </tr>
        <?php endforeach; ?>
    <?php endif; ?>
</table>

</body>
</html>
