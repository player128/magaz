<?php
class Controller_Product extends Controller
{
    function __construct()
	{
		// $this->model = new Model_Main();
		$this->view = new View();
		session_start();
	}

	function action_index($param = "")
	{	
		$this->view->generate('product_view.php', 'template_view.php');
	}
}