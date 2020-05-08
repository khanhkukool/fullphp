<?php
//Liệt kê các danh mục có trên hệ thống
require_once 'config.php';
//Thực hiện truy vấn từ bảng categories
$sqlselect = "select * from employees";
$results = mysqli_query($connection,$sqlselect);
$employees = [];
if (mysqli_num_rows($results) >  0){
    $employees = mysqli_fetch_all($results,MYSQLI_ASSOC);
}
?>
<a href="create.php">THêm mới thành viên</a><br/>
<table border="1" cellspacing="0" cellpadding="8">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>Gender</th>
        <th>Salary</th>
        <th>Birthday</th>
        <th>Action</th>
    </tr>
    <?php if (empty($employees)): ?>
        <tr>
            <td colspan="2">Không có bản ghi nào</td>
        </tr>
    <?php else: ?>
        <?php foreach ($employees AS $employee): ?>
            <tr>
                <td>
                    <?php echo $employee['id']; ?>
                </td>
                <td>
                    <?php echo $employee['name']; ?>
                </td>
                <td>
                    <?php echo $employee['description']; ?>
                </td>
                <td>
                    <?php echo $employee['gender']; ?>
                </td>
                <td>
                    <?php echo $employee['salary']; ?>
                </td>
                <td>
                    <?php echo $employee['birthday']; ?>
                </td>
                <td>
                    <a href="update.php?id=<?php echo $employee['id'] ?>">
                        Sửa
                    </a>
                    <a onclick="return confirm('Bạn có chắc chắn muốn xóa chứ')"
                       href="delete.php?id=<?php echo $employee['id'] ?>">Xóa
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php endif; ?>
</table>
