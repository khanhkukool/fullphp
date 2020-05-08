<?php
echo "<pre>";
print_r($_GET);
echo "</pre>";
$result = "Thông tin bạn vừa nhập: <br />";
//khi user submit form
if (isset($_GET['submit'])) {
    $name = $_GET['name'];
    $gender = $_GET['gender'];
    $color = $_GET['color'];
    $information = $_GET['information'];
    $jobs = isset($_GET['jobs']) ? $_GET['jobs'] : [];
    //bỏ qua validate form

    //gán các giá trị vừa lấy được vào biến $result
    $result .= "Name: $name <br />";

    //với trường hợp gender, do giá trị đang là số, nên cần thêm
//    1 bước chuyển đổi thành text để user có thể hiểu được
    $genderText = '';
    switch ($gender) {
        case 1:
            $genderText = 'Nam';
            break;
        case 2:
            $genderText = 'Nữ';
            break;
        case 3:
            $genderText = 'Khác';
            break;
    }

    $colorText = '';
    switch ($color) {
        case 1:
            $colorText = 'Đỏ';
            break;
        case 2:
            $colorText = 'Trắng';
            break;
        case 3:
            $colorText = 'Xanh';
            break;
    }

    $result .= "Gender: $genderText <br />";
    $result .= "Color: $colorText <br />";
    $result .= "Information: $information <br />";

    //xử lý với checkbox jobs
    if (in_array(1, $jobs) == TRUE) {
        $result .= "Jobs: Technical Leader <br />";
    }
    if (in_array(2, $jobs) == TRUE) {
        $result .= "Jobs: Developer <br />";
    }
    if (in_array(3, $jobs) == TRUE) {
        $result .= "Jobs: Freelancer <br />";
    }
    if (in_array(4, $jobs) == TRUE) {
        $result .= "Jobs: Tester <br />";
    }
//    $result .= "Jobs: $jobs <br />";

}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Demo form</title>
</head>
<body>
<form action="" method="get">
    <table border="1" cellspacing="0" cellpadding="6">
        <tr>
            <th colspan="2">
                Thông tin cơ bản
            </th>
        </tr>
        <tr>
            <td>Name</td>
            <td>
                <input type="text" name="name" value=""/>
            </td>
        </tr>
        <tr>
            <?php
            $checkedMale = 'checked';
            $checkedFemale = '';
            $checkedAnother = '';
            if (isset($_GET['gender'])) {
                switch ($_GET['gender']) {
                    case 1:
                        $checkedMale = 'checked';
                        break;
                    case 2:
                        $checkedFemale = 'checked';
                        break;
                    case 3:
                        $checkedAnother = 'checked';
                        break;
                }
            }
            ?>
            <td>Giới tính</td>
            <td>
                <input type="radio" name="gender" value="1" <?php echo $checkedMale ?>/> Nam
                <br/>
                <input type="radio" name="gender" value="2" <?php echo $checkedFemale; ?> /> Nữ
                <br/>
                <input type="radio" name="gender" value="3" <?php echo $checkedAnother; ?> /> Khác
            </td>
        </tr>
        <tr>
            <td>Màu sắc yêu thích</td>
            <td>
                <!--                        <select name="color[]" multiple>-->
                <select name="color">
                    <option value="1">Đỏ</option>
                    <option value="2">Trắng</option>
                    <option value="3">Xanh</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Nghề nghiệp</td>
            <td>
                <input type="checkbox" name="jobs[]" value="1"/> Technical Leader
                <br/>
                <input type="checkbox" name="jobs[]" value="2"/> Developer
                <br/>
                <input type="checkbox" name="jobs[]" value="3"/> Freelancer
                <br/>
                <input type="checkbox" name="jobs[]" value="4"/> Tester
                <br/>
            </td>
        </tr>
        <tr>
            <td>Thông tin thêm</td>
            <td>
                <textarea cols="10" rows="5" name="information"></textarea>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" name="submit" value="Hiển thị thông tin"/>
            </td>
        </tr>
    </table>
</form>
<h3 style="color: green">
    <?php echo $result; ?>
</h3>
</body>
</html>