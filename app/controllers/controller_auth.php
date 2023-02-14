<?php
class Controller_Auth extends Controller
{
    function __construct()
	{
		$this->model = new Model_Auth();
		$this->view = new View();
		session_start();
	}

	function action_index()
	{	
		$data = "";
        if (isset($_POST['login']) && isset($_POST['password'])) {
            if (!empty($_POST['login']) && !empty($_POST['password'])) {
                $login = $_POST['login'];
                $password = $_POST['password'];
				if ($this->model->login($login, $password)) {
					$_SESSION["name"] = $login;
					$_SESSION["admin"] = $this->model->isAdmin();
					//header('Location: /magaz');
				}
				else
				{
					$data = "Неверно введен логин или пароль";
				}
            }
            else {
                $data = 'Поля не должны быть пустыми!';
            }
        }
        $this->view->generate('auth_view.php', 'template_view.php', $data);
	}
}