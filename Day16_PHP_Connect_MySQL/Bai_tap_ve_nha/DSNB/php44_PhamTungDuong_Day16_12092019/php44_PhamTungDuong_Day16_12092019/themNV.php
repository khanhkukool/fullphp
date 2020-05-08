<?php
session_start();
require_once 'config.php';
$error='';
if(isset($_POST['save'])){
    $name=$_POST['name'];
    $description=$_POST['description'];
    $salary=$_POST['salary'];
    if(isset($_POST['gender']) ? $_POST['gender'] : '');
    $birthday=$_POST['birthday'];
    if (empty($name)){
        $error='Name không được để trống';
    }else{
        $genderText='';
        switch ($_POST['gender']){
            case 0: $genderText=0;break;
            case 1: $genderText=1;break;
        }
        $date=date_create($birthday);
        $date1=date_format($date,"Y/m/d");
        $sqliInsert="INSERT INTO employees(`name`,`description`,`salary`,`gender`,`birthday`)values ('$name','$description','$salary','$genderText','$date1')";
        $isInsert=mysqli_query($connection,$sqliInsert);
        if ($isInsert){
            $_SESSION['success']='Thêm mới nhân viên thành công';
            header('Location: lietkeNV.php');
            exit();
        }
    }
}
if (isset($_POST['cancel'])){
    header("Location: lietkeNV.php");
    exit();
}
?>
<style>
    span{
        color: red;
    }
    input,textarea{
        margin: 5px 0;
        margin-right: 3px;
    }
    input[type="text"]{
        width: 300px;
    }
    textarea{
        width: 300px;
    }
</style>
<h5 style="color: red"><?php echo $error;?></h5>
<form action="" method="post">
    <h2>Create Record</h2>
    Name<span>*</span><br/>
    <input type="text" name="name" value=""><br/>
    Description<br/>
    <textarea name="description"></textarea><br/>
    Salary<br/>
    <input type="text" name="salary" value=""><br/>
    Gender<br/>
    <input type="radio" name="gender" value="0">Male
    <input type="radio" name="gender" value="1">Female<br/>
    Birthday<br/>
    <input type="text" name="birthday" value="" placeholder="mm/dd/yyyy"><br/>
    <input type="submit" name="save" value="Save">
    <input type="submit" name="cancel" value="Cancel">
</form>