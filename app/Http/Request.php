<?php


namespace App\Http;


class Request
{
    /**
     * Método de http
     * @var Array
     */
    private $httpMethod;

    /**
     * Url da requisição
     * @var String
     */
    private $url;

    /**
     * Header da requisição
     * @var Array
     */

    /**
     * Parâmetros da url
     *@var Array
     */
    private $queryParams;

    /**
     * Parâmetros da requisição POST
     * @var Array
     */
    private $postParams;

    /**
     * CONSTRUTOR
     * @method
     */
    public function __construct()
    {
        $this->queryParams = $_GET ?? [];
        $this->postParams = $_POST ?? [];
        $this->header = getallheaders();
        $this->httpMethod = $_SERVER["REQUEST_METHOD"] ?? '';
        $this->url = $_SERVER["REQUEST_URI"] ?? '';
    }
}
