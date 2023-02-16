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
        if (isset($_POST['name']) && isset($_POST['field']) && isset($_POST['type']) && isset($_POST['field-length'])) {
            if(!empty($_POST['name']) && !empty($_POST['field']) && !empty($_POST['type']) && !empty($_POST['field-length'])) {
                $this->model->create($_POST);
            }
            else {

            }

        }
        else {
            $this->view->generate('createtable_view.php', 'template_view.php');
        }
	}
}