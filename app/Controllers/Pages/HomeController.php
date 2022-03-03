<?php

namespace App\Controllers\Pages;

use App\Utils\View;
use App\Controllers\Pages\PageController;
use App\Models\Entity\Organization;

class HomeController extends PageController
{

    public static function getHome()
    {
        $organization = new Organization();
        $content =  View::render('home', [
            "id" => $organization->id,
            "name" => $organization->name,
            "description" =>  $organization->description
        ]);

        return parent::getPage("MVC com php", $content);
    }
}
