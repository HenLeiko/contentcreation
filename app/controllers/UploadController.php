<?php


//namespace app\controllers;

use app\core\Controller;

class UploadController extends Controller
{
    public function index()
    {
        $this->view->generate('upload.php', 'template.php');
    }
}