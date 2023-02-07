<?php
require 'mysql.php';
require 'config.php';

echo 'THere';
$mysql = new Mysql($localhost, $user, $password, $db);
//conmm
$name = $_POST['name'];
$cost = $_POST['cost'];
$weight = $_POST['weight'];
$description = $_POST['description'];
echo $_POST['cost'];
$sql = "INSERT INTO `product`(`name`, `cost`, `weight`, `description`) VALUES ('$name', '$cost', '$weight', '$description')";
echo $sql;
$result = $mysql->query($sql);
$url = __DIR__;
header('Location: /magaz/index.php');
//print_r($result);
echo $url;