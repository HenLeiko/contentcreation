<?php

// namespace app\controllers;

use app\core\Controller;
class MainController extends Controller
{
    public function index()
    {
        $this->model = new MainModel();
        $data = $this->model->getData();
        $this->view->generate('main.php', 'template.php', $data);
    }

    public function exitfor()
    {
        session_unset();
        header('Location: /');
    }
}