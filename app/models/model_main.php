<?php
require 'app/mysql/mysql.php';

class Model_Main extends Model
{
	public function get_data()
	{	
        $mysql = new Mysql('localhost', 'root', '', 'magaz');

        $sql = 'SELECT * FROM product';
        $result = $mysql->query($sql);
        $data = [];
        $i = 0;
        while ($row = mysqli_fetch_array($result)) {
            $data[$i] = $row;
            $i++;
        }
		return $data;
	}
}