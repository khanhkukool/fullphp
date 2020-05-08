<?php
require_once 'models/Model.php';

class Product extends Model
{
    public function delete($id)
    {
        //cbi truy vấn
        $obj_delete = $this->connection
            ->prepare("DELETE FROM products WHERE id=:id");
        //gắn giá trị cho tham số
        $arr_params = [
            ":id" => $id
        ];

        //thực thi truy vấn
        return $obj_delete->execute($arr_params);
    }


    public function insert($arr_params = [])
    {
        //1 - chuẩn bị câu truy vấn
        $obj_insert = $this
            ->connection
            ->prepare("INSERT INTO
products(category_id, title, price, avatar, summary, content, status)
VALUES(:price, :category_id, :title, :avatar, :summary, :content, :status)
");
//        2 - thực thi bằng cách truyền tham số
        $is_insert = $obj_insert->execute($arr_params);

        return $is_insert;
    }

    public function getAll()
    {
//        1 - chuẩn bị truy vấn
        $obj_select = $this->connection
            ->prepare("SELECT products.*,
                      categories.name AS category_name,
                      categories.status AS category_status
                      FROM products
 INNER JOIN categories ON products.category_id = categories.id 
 WHERE products.status = :id AND categories.status = :id
 ");

        //2 - truyền giá trị cho tham số và
        $arr_params = [
            ":id" => 1
        ];
        // thực thi truy vấn
        $obj_select->execute($arr_params);

        //debug câu truy vấn, chỉ làm việc khi truyền tham
        // số trong câu truy vấn
//        echo "<pre>";
//        $obj_select->debugDumpParams();
//        echo "</pre>";
//        die;
        //3 - lấy dữ liệu trả về dưới dạng mảng
        $products = $obj_select->fetchAll(PDO::FETCH_ASSOC);

        return $products;
    }

    public function getProductCartById($id)
    {
        //chuẩn bị câu truy vấn
        $obj_select = $this
            ->connection
            ->prepare("SELECT id, title, price, avatar FROM products
WHERE id = :id
");
        //gán giá trị cho các param trong câu truy vấn nếu có
        $arr_params = [
          ":id" => $id
        ];

        //thực thi
        $obj_select->execute($arr_params);
//        echo $obj_select->rowCount();
//        die;
//        debugDumParams()
        $products = $obj_select->fetchAll(PDO::FETCH_ASSOC);
        //do lấy theo id nên có thể trả về phần tử đầu tiên
//        của mảng $products vừa tìm đc
        return $products[0];
    }


    public function getById($id)
    {
        //cbi kết nối
        $obj_select = $this
            ->connection
            ->prepare("SELECT * FROM products
 WHERE id = :id AND status = :status");
        //gắn params
        $arr_param = [
            ':id' => $id,
            ':status' => 1
        ];
        //thực thi
        $obj_select->execute($arr_param);
        //lấy ra dữ liệu từ việc execute
        $products = $obj_select->fetchAll(PDO::FETCH_ASSOC);

        return $products[0];
    }

    public function update($arr_params)
    {
        //cbi truy vấn
        $obj_update = $this
            ->connection
            ->prepare("UPDATE products 
SET category_id=:category_id, 
title=:title, 
price=:price,
avatar=:avatar,
summary=:summary,
content=:content,
status=:status,
updated_at=:updated_at
WHERE id=:id
");

        //truyền param và thực thi
        return $obj_update->execute($arr_params);
    }
}