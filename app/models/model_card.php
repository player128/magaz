<?php
require 'app/config/config.php';
require 'app/mysql/mysql.php';

class Model_Card extends Model
{
	public function get_data_by_id($id)
	{	
        $mysql = new Mysql('localhost', 'root', '', 'magaz');
        //conmm
        $sql = 'SELECT * FROM product WHERE id = '.$id;
        $result = $mysql->query($sql);
        $data = [];
        while ($row = mysqli_fetch_array($result)) {
            $data = $row;
        }    
		return $data;
	}
}