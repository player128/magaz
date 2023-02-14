<?php
class Controller_Main extends Controller
{
    function __construct()
	{
		$this->model = new Model_Main();
		$this->view = new View();
		session_start();
	}

	function action_index($param = "")
	{	
        $data = $this->model->get_data();
		$this->view->generate('main_view.php', 'template_view.php', $data);
	}
}