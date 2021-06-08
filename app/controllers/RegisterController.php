<?php


// namespace app\controllers;

use app\core\Controller;

class RegisterController extends Controller
{
    public function index()
    {
        $this->view->generate('register.php', 'template.php');
    }

    public function reg() {
//        модель с регистрацией

        $this->model = new RegisterModel();
        $err = $this->model->insert($_POST['email'], $_POST['login'], $_POST['password'], $_POST['repeatPassword']);

    }

}