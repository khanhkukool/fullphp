<?php
require_once 'config.php';
$sqlSelect = "SELECT * FROM employees";
$results = mysqli_query($connection, $sqlSelect);
$employees = [];
if(mysqli_num_rows($results) > 0 ){
    $employees = mysqli_fetch_all($results, MYSQLI_ASSOC);

}
?>
<a href="create.php" style="background: #1e7e34; color: white; border-radius: 2px;
height: 40px; padding: 7px;
    margin-left: 506px;">+ Add new employee</a>
<table border="1" cellspacing="0" cellpadding="8" style="margin-top: 10px;">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>Gender</th>
        <th>Salary</th>
        <th>Birthday</th>
        <th>Created at</th>
        <th>Action</th>
    </tr>
    <?php if (empty($employees)) : ?>
        <tr>
            <td colspan="7">Không có bản ghi nào</td>
        </tr>
    <?php else: ?>
        <?php foreach($employees AS $employee) : ?>
            <tr>
                <td>
                    <?php echo $employee['id']; ?>
                </td>
                <td>
                    <?php echo $employee['name']; ?>
                </td>
                <td>
                    <?php echo $employee['description']?>
                </td>
                <td>
                    <?php echo $employee['gender']?>
                </td>
                <td>
                    <?php echo $employee['salary']?>
                </td>
                <td>
                    <?php echo $employee['birthday']?>
                </td>
                <td>
                    <?php echo $employee['created_at']?>
                </td>

                <td>
                    <a href="index.php?id=<?php echo $employee['id']?>">
                        Xem
                    </a>
                    <a href="update.php?id=<?php echo $employee['id']?>">
                        Sửa
                    </a>
                    <a onclick="return confirm('Are you sure delete ? ')"
                       href="delete.php?id=<?php echo $employee['id']?>">
                        Xóa
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php endif; ?>
</table>
