<?php
//echo "<pre>";
//print_r($_POST);
//print_r($_FILES);
//echo "</pre>";
$error = '';
$result = '';
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $fileArr = $_FILES['avatar'];
    $fileError = $fileArr['error'];
    if ($fileError != 0) {
        $error = "Có lỗi gì đó xảy ra, không thể upload file";
    } else {
        //lấy ra đuôi ảnh để check
        $fileName = $fileArr['name'];
        $fileSize = $fileArr['size'];
        $fileSizeMb = $fileSize / 1024 / 1024;
        $extension = pathinfo($fileName, PATHINFO_EXTENSION);
        $extension = strtolower($extension);
        //đuôi ảnh cho phép là jpg, png, jpeg, gif
        if (in_array($extension, ['jpg', 'png', 'jpeg', 'gif']) == FALSE) {
            $error = "Cần upload file dạng ảnh";
        } else if ($fileSizeMb > 2) {
            $error = 'File upload không được lớn hơn 2Mb';
        } else {
            //tiến hành upload file
            $directoryUploads = __DIR__ . '/uploads';
            if (file_exists($directoryUploads) == FALSE) {
                mkdir($directoryUploads);
            }

            $tmpName = $fileArr['tmp_name'];
            $destination = $directoryUploads . '/' . $fileName;
            $isUploaded = move_uploaded_file($tmpName, $destination);
            if ($isUploaded == TRUE) {
                $result = "Upload thành công";
            } else {
                $error = "Không thể upload, có thể lỗi do server";
            }
        }
    }
}
?>
<form method="post" enctype="multipart/form-data">
    Name : <input type="text" name="name" value=""/>
    <br/>
    Avatar <input type="file" name="avatar"/>
    <br/>
    <input type="submit" name="submit" value="Show Info"/>
</form>
<h3 style="color: red">
    <?php echo $error; ?>
</h3>
<h3 style="color: green">
    <?php echo $result; ?>
</h3>