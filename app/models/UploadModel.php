<?php


use app\core\Model;

class UploadModel extends Model
{
    public function extract($file)
    {
        if ($file['name'] == '') {
            return 'Вы не выбрали файл.';
        }

        if ($file['size'] == 0) {
            return 'Файл слишком большой.';
        }

        if ($this->checkExpansion($file)) {
            return;

        }

        return $this->makeHashName($file);
    }

    public function getExpansion($file)
    {
        $getMime = explode('.', $file['name']);
        return $expansion = strtolower(end($getMime));
    }

    public function checkExpansion($file)
    {
        $types = array('mp4', 'avi', 'mov');
        $expansion = $this->getExpansion($file);
        if (!in_array($expansion, $types)) {
            return 'Недопустимый тип файла.';
        }
    }

    public function makeHashName($file)
    {
        $expansion = $this->getExpansion($file);
        $name = uniqid() . '.' . $expansion;
        if ($expansion == 'mp4' || $expansion == 'mov' || $expansion == 'avi') {
            move_uploaded_file($file['tmp_name'], 'resources/videos/' . $name);
        }
        if ($expansion == 'png' || $expansion == 'jpg' || $expansion == 'jpeg') {
            move_uploaded_file($file['tmp_name'], 'resources/imgs/' . $name);
        }
        return $name;
    }

    public function upload($data, $file)
    {
        if (empty($data['title'])) {
            return 'Введите название видео';
        }

        $videos = R::dispense('videos');
        $id = $_SESSION['id'];
        $file = $file['preview'];
        $videos->title = $data['title'];

        if (!empty($data['desc'])) {
            $videos->desc = $data['desc'];
        }

        if ($file['name'] == "") {
            $sec = 10;
            $movie = 'resources/videos/' . $data['video'];
            $name = uniqid() . '.png';
            $path = 'resources/imgs/' . $name;
            $this->getFrame($path, $movie, $sec);
            $videos->preview = $name;
        }

        if ($file['name'] !== "") {
            $name = $this->makeHashName($file);
            $videos->preview = $name;
        }

        $videos->video = $data['video'];
        $videos->users = R::load('users', $id);
        R::store($videos);
        print_r($file['preview']);
        header('Location: /');
    }

    public function getFrame($path, $movie,$sec)
    {
        $ffmpeg = FFMpeg\FFMpeg::create();
        $video = $ffmpeg->open($movie);
        $frame = $video->frame(FFMpeg\Coordinate\TimeCode::fromSeconds($sec));
        $frame->save($path);
    }
}