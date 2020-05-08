<?php
//require_once 'models/Product.php';
require_once 'models/Category.php';
require_once 'models/Product.php';

class ProductController
{
    public $error;
    /**
     * Liệt kê sản phẩm trong hệ thống
     */
    public function index()
    {
        require_once 'views/products/index.php';
    }

    public function create()
    {
        //xử lý lưu dữ liệu khi submit form
        if (isset($_POST['submit'])) {
            $category_id = $_POST['category_id'];
            $title = $_POST['title'];
            $price = $_POST['price'];
            $summary = $_POST['summary'];
            $content = $_POST['content'];
            $status = $_POST['status'];

            $avatar_arr = $_FILES['avatar'];

            //check validate
            //check trường hợp không nhập tên sản phẩm
            if (empty($title)) {
                $this->error = "Không được để trống tên sản phẩm";
            }
            else {
                //lưu file upload lên nếu có

                //gọi model thực hiện insert data vào CSDL
                //sử dụng cơ chế PDO
                $arr_params = [
                    ":category_id" => $category_id,
                    ":title" => $title,
                    ":price" => $price,
                    ":summary" => $summary,
                    ":content" => $content,
                    ":status" => $status,
                ];

                $product_model = new Product();
                $is_insert = $product_model->insert($arr_params);

                if ($is_insert) {
                    $_SESSION['success'] = 'Thêm sản phẩm thành công';
                }
                else {
                    $_SESSION['error'] = 'Thêm sản phẩm thất bại';
                }

                header("Location: index.php?controller=product");
                exit();

            }
        }

        //lấy ra tất cả danh mục đang có trên hệ thống
        $category_model = new Category();
        $categories = $category_model->index();

        //gọi view
        require_once 'views/products/create.php';
    }
}