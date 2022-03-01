<?php

namespace app\Controllers\Pages;

use App\Utils\View;

class HomeController
{

    public static function getHome()
    {
        return View::render('home');
    }
}
