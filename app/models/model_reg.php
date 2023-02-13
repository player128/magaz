<?php
require 'app/mysql/mysql.php';

class Model_Reg extends Model
{
	public function check($login)
	{	
        $mysql = new Mysql('localhost', 'root', '', 'magaz');

        $sql = "SELECT * FROM user WHERE login = '$login'";
        $result = $mysql->query($sql);
        $row = mysqli_fetch_array($result);
        print_r($row);
        if (isset($row) && $row != false) return true; // $row может быть false при ошибке

		return false;
	}

    public function create($login, $password)
    {
        $mysql = new Mysql('localhost', 'root', '', 'magaz');

        $sql = "INSERT INTO `user`(`login`, `password`) VALUES ('$login','$password')";
        $result = $mysql->query($sql);
    }
}