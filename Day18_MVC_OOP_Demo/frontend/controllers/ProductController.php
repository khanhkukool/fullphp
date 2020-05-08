<?php
// require_once 'models/Category.php';
require_once '../models/Product.php';

class ProductController
{
    public $error;

    public function index() {
        
    }
    public function detail() {
        //có thể bỏ qua trường hợp validate mà id không phải số
//        do trong file .htacces phần regex [0-9]+ cho id đã làm rồi
        $id = $_GET['id'];
        $product_model = new Product();
        $product = $product_model->getById($id);
        require_once '../views/products/detail.php';
    }

}