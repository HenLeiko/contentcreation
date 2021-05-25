<?php


namespace app\controllers;


use app\core\Controller;

class MainController extends Controller
{
    function index()
    {
        $this->view->generate('main.php', 'template.php');
    }
}