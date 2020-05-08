<?php
require_once 'models/Product.php';

class ProductController
{

    /**
     * Liệt kê sản phẩm trong hệ thống
     */
    public function index()
    {
        //gọi model truy vấn lấy tất cả dữ liệu từ bảng products
        $product_model = new Product();
        $products = $product_model->index();
//        echo "<pre>";
//        print_r($products);
//        echo "</pre>";
        //gọi view
        require_once 'views/products/index.php';
    }
}