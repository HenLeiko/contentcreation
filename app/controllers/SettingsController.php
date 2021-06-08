<?php


// namespace app\controllers;

use app\core\Controller;

class SettingsController extends Controller
{
    public function index()
    {
        $this->view->generate('settings.php', 'template.php');
    }
}