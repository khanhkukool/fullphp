<?php
require_once 'models/Product.php';
class HomeController
{
  public function index() {

      //đổ dữ liệu product ra trang chủ
    $product_model = new Product();
    $products = $product_model->getAll();

    require_once 'views/homes/index.php';
  }
}