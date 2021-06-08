<?php


//namespace app\controllers;

use app\core\Controller;

class UploadController extends Controller
{
    protected $videoName;

    public function setVideoName($name)
    {
        $this->videoName = $name;
    }

    public function getVideoName()
    {
        return $this->videoName;
    }

    public function __construct()
    {
        $this->model = new UploadModel();
        $this->view = new \app\core\View();
    }

    public function index()
    {
        $file = $_FILES['video'];
        $data = $this->model->extract($file);
        $this->setVideoName($data);
        $this->view->generate('upload.php', 'template.php', $data);
    }

    public function send()
    {
        $this->model->upload($_POST, $_FILES);
    }
}