<?php


namespace App\Http;


class Response
{

    /**
     * código http da requisição
     * @var Integer
     */
    private $httpCode = 200;

    /**
     * headers da requisição
     * @var Array
     */
    private $headers = [];

    /**
     * conteudo da requisição
     * @var Mixed;
     */
    private $content;

    /**
     * tipo de conteudo da requisição
     * @var String
     */
    private $contentType = 'text/html';

    public function __construct($httpCode, $content, $contentType = 'text/html')
    {
        $this->httpCode =  $httpCode;
        $this->content = $content;
    }

    private function getContentType($contentType)
    {
        $this->contentType = $contentType;
        $this->addHeader('Content-Type:', $contentType);
    }

    private function addHeader($key, $value)
    {
        $this->header[$key] = $value;
    }
}
