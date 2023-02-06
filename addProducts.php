<?php
require 'mysql.php';

echo 'THere';
$mysql = new Mysql('localhost', 'root', '', 'magaz');
//conmm
$name = $_POST['name'];
$cost = $_POST['cost'];
$weight = $_POST['weight'];
$description = $_POST['description'];
echo $_POST['cost'];
$sql = "INSERT INTO `product`(`name`, `cost`, `weight`, `description`) VALUES ('$name', '$cost', '$weight', '$description')";
echo $sql;
$result = $mysql->query($sql);

print_r($result);