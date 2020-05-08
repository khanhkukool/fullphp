<?php
session_start();
require_once 'config.php';
$sqlSelect=" SELECT * FROM employees ";
$results=mysqli_query($connection,$sqlSelect);
$employees=[];
if (mysqli_num_rows($results)>0){
    $employees=mysqli_fetch_all($results,MYSQLI_ASSOC);
}
?>
<head>
    <link type="text/css" rel="stylesheet" href="fontawesome-free-5.11.2-web/css/all.css">
</head>
<style>
    .container{
        display: flex;
        padding: 15px 0;
    }
    .title{
        font-size: 30px;
        font-weight: bold;
    }
    .create{
        margin-left: 257px;
    }
    .create button{
        background: green;
        height:30px;
    }
    .create a{
        text-decoration: none;
        color: white;
    }
</style>
<body>
<h3 style="color: green">
    <?php
    if (isset($_SESSION['success'])){
    echo $_SESSION['success'];
    unset($_SESSION['success']);
    }
    ?>
</h3>
<form action="" method="post">
    <div class="container">
        <div class="title">
            <span>Employees List</span>
        </div>
        <div class="create">
            <button type="submit" class="btn">
                <a href="themNV.php">+ Add New Employee</a>
            </button>
        </div>
    </div>
    <div class="main">
        <table border="1" cellspacing="0" cellpadding="5">
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
            <?php if (empty($employees)):?>
            <tr>
                 <td  colspan="8">Không có bản ghi nào</td>
            </tr>
            <?php else:?>
            <?php foreach ($employees as $employ):?>
            <tr>
                <td><?php echo $employ['id'];?></td>
                <td><?php echo $employ['name'];?></td>
                <td><?php echo $employ['description'];?></td>
                <td><?php echo $employ['salary'];?></td>
                <td><?php echo $employ['gender'];?></td>
                <td><?php echo $employ['birthday'];?></td>
                <td><?php echo $employ['created_at'];?></td>
                <td>
                    <a href="chitietNV.php?id=<?php echo $employ['id'];?>"><i class="fas fa-eye"></i></a>&nbsp
                    <a href="suaNV.php?id=<?php echo $employ['id'];?>"><i class="fas fa-pen"></i></a>&nbsp
                    <a onclick="return confirm('Are you sure delete?')"
                       href="xoaNV.php?id=<?php echo $employ['id'];?>"><i class="fas fa-trash-alt"></i></a>
                </td>
            </tr>
            <?php endforeach;?>
            <?php endif;?>
        </table>
    </div>
</form>
</body>