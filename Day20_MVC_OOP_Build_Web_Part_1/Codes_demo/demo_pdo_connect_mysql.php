<?php
//Kết nối CSDL sử dụng cơ chê PDO - PHP Data Object
//B1 - Khởi tạo kết nối
//data source name
const DB_DSN = "mysql:host=localhost;dbname=bt1";
const DB_USERNAME = 'root';
const DB_PASSWORD = '';
try {
   $connection = new PDO(DB_DSN,
       DB_USERNAME, DB_PASSWORD);
}
catch (PDOException $e) {
    echo "Kết nối thất bại, thông tin lỗi: " . $e->getMessage();
}

//B2 - Thực thi các truy vấn
//1 - Truy vấn insert
//truyền theo kiểu bind param
$queryInsert = $connection
    ->prepare("INSERT INTO employees 
(`name`, `description`, `gender`) VALUES (?, ?, ?)");
//(`name`, `description`, `gender`) VALUES (:name, :description, :gender)");
//gán giá trị thật cho các param ở trên
$queryInsert->bindParam(1, $name);
$queryInsert->bindParam(2, $description);
$queryInsert->bindParam(3, $gender);
$name = "Manh";
$description = "Description";
$gender = 1;
//thực thi câu lệnh
$isInsert = $queryInsert->execute();
var_dump($isInsert);

//2 -Truy vấn UPDATE
//cbi truy vấn
$queryUpdate = $connection
    ->prepare("UPDATE employees
 SET `name` = ?, `gender` = ? WHERE id = ?");
//bind param và gán giá trị thật
//$queryUpdate->bindParam(1, $name);
//$queryUpdate->bindParam(2, $gender);
//$queryUpdate->bindParam(3, $id);
//$name = "New name";
//$gender = 1234;
//$id = 1;
//ko cần sử dụng bindParam, mà tạo 1 mảng tương đương với các param
//đã khai báo
$arr_params = [
    'ABC123',
    5,
    2
];
//thực thi câu truy vấn
$isUpdate = $queryUpdate->execute($arr_params);
var_dump($isUpdate);

//3 - DELETE
//cbi câu truy vấn
$objDelete = $connection
    ->prepare("DELETE FROM employees WHERE id > ?");
//bindparam và gán giá trị thật cho param
$arr_params = [3];
//thực thi câu truy vấn
$isDelete = $objDelete->execute($arr_params);
var_dump($isDelete);

//4 - SELECT
//cbi câu truy vấn
$objSelect = $connection
    ->prepare("SELECT * FROM employees WHERE id > ? ORDER BY id DESC");
//bind param va truyen gia tri
$arr_params = [1];
//thuc thi cau truy van
$objSelect->execute($arr_params);
//lay ra du lieu chuan
$employees = $objSelect->fetchAll(PDO::FETCH_ASSOC);
echo "<pre>";
print_r($employees);
echo "</pre>";

//dong ket noi
$connection = null;
