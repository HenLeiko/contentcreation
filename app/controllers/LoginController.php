<?php


// namespace app\controllers;

use app\core\Controller;

class LoginController extends Controller
{
    public function index()
    {
        if (isset($_SESSION['id'])) {
            header('Location: /');
        }
        $this->model = new LoginModel();
        if (isset($_POST['login']))
        {
            $err = $this->model->login($_POST['login'], $_POST['password']);
        }
        $this->view->generate('login.php', 'template.php', $err);
    }

}