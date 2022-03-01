<?php

namespace app\Utils;

class View
{
    private static function contentView($view)
    {


        $file = __DIR__ . "/../../resource/views/pages/" . $view . ".html";

        return file_exists($file) ? file_get_contents($file) :  'erro';
    }
    public static function render($view)
    {
        $contentView = self::contentView($view);
        return $contentView;
    }
}
