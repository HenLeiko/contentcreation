<?php


//namespace app\controllers;

use app\core\Controller;

class ViewController extends Controller
{
    public function __construct()
    {
        $this->model = new ViewModel();
        $this->view = new \app\core\View();
    }

//    public function index()
//    {
//        $this->view->generate('view.php', 'template.php');
//    }

    public function video()
    {

        $data = $this->model->getData();
        $this->view->generate('view.php', 'template.php', $data);
    }

    public function comment()
    {
        $this->model->sendComment();
    }
}