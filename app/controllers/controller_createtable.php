<?php
class Controller_Createtable extends Controller
{
    function __construct()
	{
		$this->model = new Model_Createtable();
		$this->view = new View();
		session_start();
	}

	function action_index()
	{	
        $data = "";
        if (isset($_POST['name']) && isset($_POST['field']) && isset($_POST['type']) && isset($_POST['field-length'])) {
            if(!empty($_POST['name']) && !empty($_POST['field']) && !empty($_POST['type']) && !empty($_POST['field-length'])) {
                if ($this->model->create($_POST)) {
                    header("Location:\magaz");
                }
                else {
                    $data = "Произошла обшибка про создании таблицы, возможно таблица с таким именем уже есть!";
                }
            }
            else {
                $data = "Поля не должны быть пустыми";
            }

        }
        $this->view->generate('createtable_view.php', 'template_view.php', $data);
	}
}