<?php


//namespace app\controllers;

use app\core\Controller;

class SubsController extends Controller
{
    public function index()
    {
        $this->view->generate('subs.php', 'template.php');
    }
}