<?php
session_start();
$result = "";
$error = "";
require_once 'config.php';
if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $description = $_POST['description'];
    $gender = $_POST['gender'];
    $salary = $_POST['salary'];
    $birthday = $_POST['birthday'];
}
if (empty($name)){
    $error = "Không được để trống name";
}
else {
    $sqlInser = "insert into employees(`name`, `description`, `gender`, `salary`, `birthday`) 
 value('$name','$description','$gender','$salary','$birthday')";
    $isInsert = mysqli_query($connection,$sqlInsert);
    if($isInsert){
        //Chuyển hướng người dùng về trang index và thông báo thành công
        $_SESSION['success'] = "Thêm mới thành công";
        header("Location:index.php");
        exit ();
    }
    else {
        $error="Insert thất bại";
    }
}

?>
<h3 style="color: red">
    <?php echo $error ?>
</h3>
<form action = "" method = "post">
    Name:<br/>
    <input type ="text" name ="name" value ="<?php echo isset($_POST['name'])? $_POST['name']:'' ?>"><br/>Description:<br/>
    <input type ="text" name ="description" value="<?php echo isset($_POST['description'])? $_POST['description']:'' ?>"><br/>Salary<br/>
    <input type ="text" name ="salary" value ="<?php echo isset($_POST['salary'])? $_POST['salary']:'' ?>"><br/>Gender:<br/>
    <input type ="radio" name ="gender" value ="1">Male
    <input type ="radio" name ="gender" value ="0">Female<br/>Birthday:<br/>
    <input type ="text" name ="birthday" value ="<?php echo isset($_POST['birthday'])? $_POST['birthday']:'' ?>"
           placeholder="mm/dd/yyyy"><br/>
    <input type="submit" name="submit" value="Save">
    <input type="submit" name="cancel" value="Cancel">
</form>
