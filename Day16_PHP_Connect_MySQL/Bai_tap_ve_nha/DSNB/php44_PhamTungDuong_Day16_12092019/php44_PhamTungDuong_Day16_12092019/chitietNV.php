<?php
require_once ('config.php');
if (isset($_GET['id'])){
    $id=$_GET['id'];
    $chitietNV=" SELECT * FROM employees where id=$id LIMIT 1";
    $results=mysqli_query($connection,$chitietNV);
    $employs=[];
    if (mysqli_num_rows($results)>0) {
        $employsArr = mysqli_fetch_all($results, MYSQLI_ASSOC);
        $employs = $employsArr[0];
    }
}
if (isset($_POST['Back'])){
    header("Location: lietkeNV.php");
    exit();
}
?>
<style>
    span{
        color: green;
        margin: 10px;
        font-size: 20px;
        font-weight: bold;
    }
    input{
        background: dodgerblue;
        color: white;
    }
</style>
<form action="" method="post">
    <h2>View Record</h2>
    ID<br/>
    <span>
        <?php echo $employs['id']?>
    </span><br/>Name<br/>
    <span>
        <?php echo $employs['name']?>
    </span><br/>
    Description<br/>
    <span>
        <?php echo $employs['description']?>
    </span><br/>
    Salary<br/>
    <span>
        <?php echo $employs['salary']?>
    </span><br/>
    Gender<br/>
    <span>
        <?php
        $genderText='';
        switch ($employs['gender']){
            case 0:$genderText='Male';break;
            case 1:$genderText='Female';break;
        }
        ?>
        <?php echo $genderText?>
    </span><br/>
    Birthday<br/>
    <span>
        <?php
        $date=date_create($employs['birthday']);
        $birthDay=date_format($date,"d/m/Y");
        ?>
        <?php echo $birthDay?>
    </span><br/>
    Created_at<br/>
    <span>
        <?php
        $dateCreate=date_create($employs['created_at']);
        $Create=date_format($dateCreate,"d/m/Y");
        ?>
        <?php echo $Create?>
    </span><br/>
    <input type="submit" name="Back" value="Back">
</form>