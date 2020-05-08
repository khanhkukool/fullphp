<?php
session_start();

require_once 'config.php';
//thực hiện truy vấn lấy ra dữ liệu từ bảng categories
$sqlSelect = "SELECT * FROM employees";
$results = mysqli_query($connection, $sqlSelect);
$employees = [];

if (mysqli_num_rows($results) > 0) {
    $employees = mysqli_fetch_all($results, MYSQLI_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bai1</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
          rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/44671b967f.js" crossorigin="anonymous"></script>
</head>

<body id="page-top">
<!-- Page Wrapper -->
<h3 style="color: green">
    <?php
    if (isset($_SESSION['success'])) {
        echo $_SESSION['success'];
        unset($_SESSION['success']);
    }
    ?>
</h3>
<div id="wrapper">
    <div id="content">
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 style="display: inline;" class="m-0 font-weight-bold text-primary">Employees List</h6>
                    <a style="float: right;background: green;color: #fff;padding: 3px 10px;" href="create.php">+ Add New
                        Employees</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Salary</th>
                                <th>Gender</th>
                                <th>Birthday</th>
                                <th>Created_at</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if (empty($employees)): ?>
                                <tr>
                                    <td colspan="2">Không có bản ghi nào</td>
                                </tr>
                            <?php else: ?>
                                <?php foreach ($employees as $employees): ?>
                                    <tr>
                                        <td><?php echo $employees['id']; ?></td>
                                        <td><?php echo $employees['name']; ?></td>
                                        <td><?php echo $employees['description']; ?></td>
                                        <td><?php echo $employees['salary']; ?></td>
                                        <td>
                                            <?php
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
                                        </td>
                                        <td><?php echo $employees['birthday']; ?></td>
                                        <td><?php echo $employees['created_at']; ?></td>
                                        <td>
                                            <a href="view.php?id=<?php echo $employees['id']; ?>"><i class="fas fa-eye"></i></a>
                                            <a href="update.php?id=<?php echo $employees['id']; ?>"><i class="fas fa-pen"></i></a>
                                            <a onclick="return confirm('Bạn có chắc chắn muốn xóa không?')" href="delete.php?id=<?php echo $employees['id']; ?>"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- End of Main Content -->
</div>
<!-- End of Content Wrapper -->
</body>

</html>
