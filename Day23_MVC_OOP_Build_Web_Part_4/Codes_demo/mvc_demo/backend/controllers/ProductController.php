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
        //gọi model để lấy tất cả dữ liệu
        $product_model = new Product();
        $products = $product_model->getAll();
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
            } else {
                $avatar = '';
                //lưu file upload lên nếu có
                if ($avatar_arr['error'] == 0) {
                    //kiểm tra file upload lên có phải định dạng ảnh
//                hay không
                    $extension = pathinfo($avatar_arr['name'],
                        PATHINFO_EXTENSION);
                    $extension = strtolower($extension);
                    $arr_extension_image = ['jpg', 'jpeg', 'gif', 'png'];
                    if (!in_array($extension, $arr_extension_image)) {
                        $this->error = "Cần upload file dạng ảnh: jpg, jpeg, png, gif";
                        require_once 'views/products/create.php';
                        return false;
                    }
                    //trường hợp upload ảnh > 2Mb thì báo lỗi
                    else if ($avatar_arr['size'] > 2 * 1024 * 1024){
                        $this->error = "Cần upload ảnh dung lượng < 2Mb";
                        require_once 'views/products/create.php';
                        return false;
                    } else {
                        //thực hiện upload ảnh
                        $dir_upload = __DIR__ . "/../assets/uploads";
                        if (!file_exists($dir_upload)) {
                            mkdir($dir_upload);
                        }

                        $avatar = time() . $avatar_arr['name'];

                        move_uploaded_file($avatar_arr['tmp_name'],
                            $dir_upload . '/' . $avatar);
                    }
                }

                //gọi model thực hiện insert data vào CSDL
                //sử dụng cơ chế PDO
                $arr_params = [
                    ":category_id" => $category_id,
                    ":title" => $title,
                    ":price" => $price,
                    ":avatar" => $avatar,
                    ":summary" => $summary,
                    ":content" => $content,
                    ":status" => $status,
                ];

                $product_model = new Product();
                $is_insert = $product_model->insert($arr_params);

                if ($is_insert) {
                    $_SESSION['success'] = 'Thêm sản phẩm thành công';
                } else {
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