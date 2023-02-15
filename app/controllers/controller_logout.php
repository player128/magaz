<?php
class Controller_Logout extends Controller
{
    function __construct()
	{
		$this->view = new View();
		session_start();
	}

	function action_index()
	{	
        session_destroy();
        header('Location: /magaz');
	}
}