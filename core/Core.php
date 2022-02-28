<?php


namespace core;

class Core
{
    public function __construct()
    {

        //verificando se existe um query string na url chamada url
        if (!isset($_REQUEST['url']) || empty($_REQUEST['url'])) {
            //setando o controller,action e parametros como  padrão: HomeController, index, null caso não tenha url
            $currentController = $this->callHomeController();
            $action = $this->callActionIndex();
            $params = $this->callParamsNull();
        } else {

            $url = explode("/", $_REQUEST["url"]);

            //verificando se  o indice zero (controller) existe, caso não, seta o padrão
            if (!isset($url[0]) || empty($url[0])) {
                $currentController  = $this->callHomeController();
            } else {
                $currentController = ucfirst($url[0]) . "Controller";
            }

            //verificando se a action indice 1 existe, caso não seta como padrão
            if (!isset($url[1]) || empty($url[1])) {
                $action = $this->callActionIndex();
            } else {
                $action = $url[1];
            }

            //verificando se existe parâmetros
            if (isset($url[2])) {
                $params = $url;
            } else {
                $params = $this->callParamsNull();
            }
        }

        //instanciando o controller
        $c = new $currentController();
        //executando a função
        call_user_func_array(array($c, $action), $params);
    }

    protected  function callHomeController()
    {
        $currentController = "HomeController";;
        return $currentController;
    }

    protected function callActionIndex()
    {
        $action = "index";
        return $action;
    }

    protected function callParamsNull()
    {
        $params = [];
        return $params;
    }
}
