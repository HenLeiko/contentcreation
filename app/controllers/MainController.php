<?php

//namespace app\controllers;

use app\core\Controller;
class MainController extends Controller
{
    public function index()
    {
        $this->view->generate('main.php', 'template.php');
    }

    public function exit()
    {
        session_unset();
        header('Location: /');
    }
}