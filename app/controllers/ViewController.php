<?php


//namespace app\controllers;

use app\core\Controller;

class ViewController extends Controller
{
    public function index()
    {
        $this->view->generate('view.php', 'template.php');
    }
}