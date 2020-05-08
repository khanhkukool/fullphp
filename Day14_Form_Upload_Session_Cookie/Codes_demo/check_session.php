<?php
session_start();
$name = isset($_SESSION['name']) ? $_SESSION['name'] : '';
echo "Tên của bạn là: " . $name;

?>