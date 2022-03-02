<?php

namespace app\Controllers\Pages;

use App\Utils\View;

class HomeController
{

    public static function getHome()
    {
        return View::render('home', [
            "name" => "Estrutura MVC com php",
            "description" =>  "Uma estrutura MVC com php puro do zero"
        ]);
    }
}
