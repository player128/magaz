<?php
require 'app/config/config.php';
require 'app/mysql/mysql.php';

class Model_Auth extends Model
{
    public $admin = 0;
	public function login($login, $password)
	{	
        $mysql = new Mysql('localhost', 'root', '', 'magaz');
        //conmm
        $sql = "SELECT * FROM user WHERE login = '$login' and password = '$password'";
        $result = $mysql->query($sql);
        $row = mysqli_fetch_array($result);
        if (isset($row) && $row != false) {
            $this->$admin = $row['admin'];
            return true;
        }
		return false;
	}

    public function isAdmin()
    {
        if ($this->admin == 1) return 1;
        return 0;
    }
}