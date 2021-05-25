<?php


namespace app\core;


class View
{
    function generate($content, $template, $data = null)
    {

        // в дату буду пихать данные из модели, которые нужно отрисовать в виде

        include 'app/views/'.$template;
    }
}