<?php
class Controller_Reg extends Controller
{
    function __construct()
	{
        $this->model = new Model_Reg();
		$this->view = new View();
	}

	function action_index()
	{	
        $data = "NULLSS";
        if (isset($_POST['login']) && isset($_POST['password'])) {
            if (!empty($_POST['login']) && !empty($_POST['password'])) {
                $login = $_POST['login'];
                $password = $_POST['password'];
                if (!$this->model->check($login)) {
                    $this->model->create($login, $password);
                    $data = 'Аккаунт зарегистрирован!';
                    header('Location: /magaz');
                }
                else {
                    $data = 'Аккаунт с таким имменем уже зарегистрирован!';
                }
            }
            else {
                $data = 'Поля не должны быть пустыми!';
            }
        }

        $this->view->generate('reg_view.php', 'template_view.php', $data);
	}
}