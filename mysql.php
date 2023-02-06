<?php
class Mysql
{
    public $link;

    function __construct($host, $user, $password, $db) {
        $this->link = mysqli_connect($host, $user, $password, $db);

        if ($this->link == false){
        print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
        } else {
            //print("Соединение установлено успешно");
        }

        mysqli_set_charset($this->link, "utf8");
    }

    function query($sql) {
        $result = mysqli_query($this->link, $sql);

        if ($result == false) {
           // print("Произошла ошибка при выполнении запроса");
        }

        return $result;
    }
}