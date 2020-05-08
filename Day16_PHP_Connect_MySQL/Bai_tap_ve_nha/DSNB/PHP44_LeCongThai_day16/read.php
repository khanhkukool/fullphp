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
    	<h1>View Record</h1>
    	<hr>
    	<b>ID</b><br>
        <?php echo $employees['id']; ?>
    	<br>
    	<b>Name</b><br>
        <?php echo $employees['Name']; ?>
    	<br>
    	<b>Description</b><br>
        <?php echo $employees['Description']; ?>
    	<br>
    	<b>Salary</b><br>
        <?php echo $employees['Salary']; ?>
    	<br>
    	<b>Gender</b><br>
        <?php echo $employees['Gender']; ?>
    	<br>
    	<b>Birthday</b><br>
        <?php echo $employees['Birthday']; ?>
    	<br>
    	<b>Create at</b><br>
        <?php echo $employees['Create_at']; ?>
    	<hr>
    	<a href="index.php" class="btn btn-primary">Back</a>
    </div>
</body>
</html>