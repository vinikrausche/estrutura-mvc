<?php

namespace App\Controllers\Pages;

use App\Utils\View;
use App\Controllers\Pages\PageController;

class HomeController extends PageController
{

    public static function getHome()
    {
        $content =  View::render('home', [
            "name" => "Estrutura MVC com php",
            "description" =>  "Uma estrutura MVC com php puro do zero"
        ]);

        return parent::getPage("MVC com php", $content);
    }
}
