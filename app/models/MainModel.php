<?php

use app\core\Model;
class MainModel extends Model
{
    public function getData()
    {
        $videos = R::findAll('videos', 'ORDER BY title DESC LIMIT 6');

        print_r($videos[1]->users->login);
        return $videos;
    }
}