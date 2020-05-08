<?php
require_once "config.php";
mysqli_query($connection, 'SET NAMES "utf8"');
$querySelect = "SELECT * FROM employees";
$results = mysqli_query($connection, $querySelect);
$employees = [];
if (mysqli_num_rows($results) > 0) {
    $employees = mysqli_fetch_all($results, MYSQLI_ASSOC);
}

//B3: đóng kết nối
mysqli_close($connection);
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

<div class="container">
    <div class="row">
        <h1 style="display: inline-block;">Empoyees List</h1>
        <a href="create.php" class="btn btn-success" style="float: right; margin-top: 20px">+ Add New employees</a>
    </div>
    <hr>
    <table border="1" cellpadding="0" cellspacing="10" class="table">
        <thead style="border-bottom: 2px solid black; font-weight: bold;font-size: 17px;">
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Description</td>
            <td>Salary</td>
            <td>Gender</td>
            <td>Birthday</td>
            <td>Create_at</td>
            <td>Action</td>
        </tr>
        </thead>
        <tbody>
        <?php if (empty($employees)): ?>
            <tr>
                <td colspan="2">Không có bản ghi nào</td>
            </tr>
        <?php else: ?>
            <?php foreach ($employees AS $employees): ?>
                <tr>
                    <td>
                        <?php echo $employees['id']; ?>
                    </td>
                    <td>
                        <?php echo $employees['Name']; ?>
                    </td>
                    <td>
                        <?php echo $employees['Description']; ?>
                    </td>
                    <td>
                        <?php echo $employees['Salary']; ?>
                    </td>
                    <td>
                        <?php echo $employees['Gender']; ?>
                    </td>
                    <td>
                        <?php echo $employees['Birthday']; ?>
                    </td>
                    <td>
                        <?php echo $employees['Create_at']; ?>
                    </td>
                    <td>
                        <a href="read.php?id=<?php echo $employees['id']?>" title=""><span class='glyphicon glyphicon-eye-open'></a>
                        <a href="update.php?id=<?php echo $employees['id']?>" title=""><span class='glyphicon glyphicon-pencil'></span></a>
                        <a onclick="return confirm('Bạn có chắc chắn muốn xóa không?')"
                           href="delete.php?id=<?php echo $employees['id'] ?>">
                            <span class='glyphicon glyphicon-trash'>
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
        </tbody>
    </table>
</div>
</body>
</html>