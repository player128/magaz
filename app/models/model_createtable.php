<?php
require 'app/mysql/mysql.php';

class Model_Createtable extends Model
{
	public function create($data)
	{	
        $mysql = new Mysql('localhost', 'root', '', 'magaz');

        $name = $_POST['name'];
        $field = $_POST['field'];
        $type = $_POST['type'];
        $length = $_POST['field-length'];

        $request = "";

        // echo "<pre>";
        // print_r($type);
        // echo "</pre>";

        for ($i = 0; $i < sizeof($field); $i++) {
            $request .= $field[$i] . " " . $type[$i][0] . "(" . $length[$i]  . ")";
            if ($i < sizeof($field) - 1) {
                $request .= ", ";
            } 
        }

        $sql = <<<END
        Create Table $name
        (
            $request
        );    
        END;
        $result = $mysql->query($sql);
		//return $data;
	}

    public function gettype()
    {
        return [
            "VARCHAR",
            "INT",
            "DATE"
        ];
    }
}