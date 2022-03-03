<?php

namespace App\Controllers\Pages;

use App\Utils\View;

class  PageController
{
    /** 
     *Método que retorna o header.html
     * @return String
     */
    public static function getHeader()
    {
        return View::render('header');
    }

    /**
     * Retorna o footer.html
     * @return String
     */
    public static function getFooter()
    {
        return View::render('footer');
    }

    /**
     * Método que retorna a página, seu conteúdo recebe as demais páginas do projeto
     * @param String
     * @return String
     */
    public function getPage($title, $content)
    {
        return View::render('page', [
            "title" =>  $title,
            "header" =>  self::getHeader(),
            "footer" =>  self::getFooter(),
            "content" => $content
        ]);
    }
}
