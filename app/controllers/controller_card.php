<?php
class Controller_Card extends Controller
{
    function __construct()
	{
		$this->model = new Model_Card();
		$this->view = new View();
		session_start();
	}

	function action_show($param)
	{	
        if (!empty($param)) {
            $id = $param;
            $data = $this->model->get_data_by_id($id);
            $this->view->generate('card_view.php', 'template_view.php', $data);
        }
	}
}