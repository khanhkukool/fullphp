<?php
$id = $_POST['id'];
$name = $_POST['name'];
$address = $_POST['address'];
$arr = [
  'id' => $id,
  'name' => $name,
  'address' => $address,
  'address111' => 'Trần Văn Mạnh',
];

$arr = json_encode($arr);
echo $arr;