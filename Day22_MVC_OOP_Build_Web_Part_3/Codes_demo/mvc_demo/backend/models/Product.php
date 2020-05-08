<?php
require_once 'models/Model.php';
class Product extends Model
{
    public function insert($arr_params = []) {
        //1 - chuẩn bị câu truy vấn
        $obj_insert = $this
            ->connection
            ->prepare("INSERT INTO
products(category_id, title, price, summary, content, status)
VALUES(:category_id, :title, :price, :summary, :content, :status)
");
//        2 - thực thi bằng cách truyền tham số
        $is_insert = $obj_insert->execute($arr_params);

        return $is_insert;
    }
}