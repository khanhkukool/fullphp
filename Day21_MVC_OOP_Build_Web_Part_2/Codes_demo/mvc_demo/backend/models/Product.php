<?php
require_once 'models/Model.php';

class Product extends Model
{
    /**
     * Lấy danh sách sản phẩm từ bảng products
     */
    public function index() {
        //thực hiện truy vấn select
//        1 - chuẩn bị truy vấn
        $obj_select = $this
            ->connection
            ->prepare("SELECT * FROM products WHERE id > :id");
//          2 -  Gán giá trị cho các tham số trong câu truy vấn nếu có
            $arr_params = [
                ':id' => 1
            ];
//            3 - Thực thi truy vấn
            $obj_select->execute($arr_params);
//            4 - lấy dữ liệu thật
            $products = $obj_select->fetchAll(PDO::FETCH_ASSOC);

            return $products;
    }
}