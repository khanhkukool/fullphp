<?php
require_once 'views/layouts/header.php';
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <h1>Liệt kê sản phẩm</h1>
        <table class="table table-striped">
            <tr>
                <th>ID</th>
                <th>Category</th>
                <th>News id</th>
                <th>Title</th>
                <th>Created at</th>
            </tr>
            <?php foreach ($products AS $product): ?>
                <tr>
                    <td>
                        <?php echo $product['id']?>
                    </td>
                    <td>
                        <?php echo $product['category_id']?>
                    </td>
                    <td>
                        <?php echo $product['news_id']?>
                    </td>
                    <td>
                        <?php echo $product['title']?>
                    </td>
                    <td>
                        <?php
                        $created_at = date('d-m-Y H:i:s',
                            strtotime($product['created_at']));
                        echo $created_at;
                        ?>
                    </td>
                </tr>
            <?php endforeach; ?>


        </table>

    </section>
    <!-- /.content -->
</div>

<?php
require_once 'views/layouts/footer.php';
?>

