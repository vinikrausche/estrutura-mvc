<?php

namespace app\Utils;

class View
{
    private static function contentView($view)
    {


        $file = __DIR__ . "/../../resource/views/pages/" . $view . ".html";

        return file_exists($file) ? file_get_contents($file) :  'erro';
    }
    public static function render($view, $vars = array())
    {


        $contentView = self::contentView($view);

        $keys = array_keys($vars);
        $keys = array_map(function ($item) {
            return "{{" . $item . "}}";
        }, $keys);

        return str_replace($keys, array_values($vars), $contentView);
    }
}
