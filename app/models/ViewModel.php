<?php

use app\core\Model;
class ViewModel extends Model
{
    public function getData()
    {
        $id = $_GET['id'];
        return R::load('videos', $id);
    }

    public function sendComment()
    {
        $comment = R::dispense('comments');
        $id = $_SESSION['id'];
        $comment->users = R::load('users', $id);;
        $comment->comment = $_POST['comment'];
        $video = $_POST['videoid'];
        $comment->videos = R::load('videos', $video);
        R::store($comment);
        header('Location: /');
    }
}