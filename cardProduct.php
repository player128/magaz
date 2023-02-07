<?php
require 'mysql.php';
require 'config.php';

$url = $_SERVER['REQUEST_URI'];
$pieces = explode("/", $url);

$id = $pieces[3];

echo $id;

$mysql = new Mysql($host, $user, $password, $db);
//conmm
$sql = 'SELECT * FROM product WHERE id = '.$id;
$result = $mysql->query($sql);
while ($row = mysqli_fetch_array($result)) {
    print_r($row);
}    


