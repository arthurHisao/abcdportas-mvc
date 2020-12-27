<?php

namespace Core;

class ConfigController {

    private $url;
    private $urlConjunto;
    private $urlController;
    private $urlParametro;
    private static $Format;

    public function __construct() {
        $this->cleanUrl();
        $this->checkURL();
    }

    //Tratamento de Url
    private function cleanUrl() {
        //filtrando a url
        $this->url = filter_input(INPUT_GET, 'url', FILTER_DEFAULT);

        //Eliminar as tags
        $this->url = strip_tags($this->url);
        //Elimina os espacos
        $this->url = trim($this->url);
        //Elimina a ultima barra
        $this->url = rtrim($this->url, "/");

        self::$Format = array();

        //Caracteres que nao desejo
        self::$Format['a'] = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜüÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿRr"!@#$%&*()_-+={[}]?;:.,\\\'<>°ºª ';
        
        //Caracteres que desejo substituir
        self::$Format['b'] = 'aaaaaaaceeeeiiiidnoooooouuuuuybsaaaaaaaceeeeiiiidnoooooouuuyybyRr-------------------------------';

        //substituindo caracteres indesejado por caractere que desejo substituir
        $this->url = strtr(utf8_decode($this->url), utf8_decode(self::$Format['a']), self::$Format['b']);
    }

    private function checkURL() {
        //rota padrao 
        $this->urlController = controllerHome;
        $this->urlConjunto = explode("/", $this->url);

        if(!empty(filter_input(INPUT_GET, 'url', FILTER_DEFAULT))) {
            if(!empty($this->url) && isset($this->urlConjunto[0])) {
                $this->urlController = $this->slugController($this->urlConjunto[0]);                   
            }           
        }
    }

    //metodo que faz tratamentos de uma url exemplo: alterando para maiusculo "home"/Blog
    private function slugController($slugController) {
        $urlController = str_replace(" ", "", ucwords(implode(" ", explode("-", strtolower($slugController)))));
        return $urlController;
    }

    public function loadController() {
        if(class_exists($class = "\\Sts\\Controllers\\" .$this->urlController)) {
            $classLoad = new $class;
            $classLoad->index();
        } else {
            $this->urlController = controllerNotFound; 
            $class = "\\Sts\\Controllers\\".$this->urlController;
            $classLoad = new $class;
            $classLoad->index();
        }
    }

    public function ajaxController($dados) {
        $ajax = "\\Sts\\Controllers\\ajax\\".controllerForm;
        $ajaxLoad = new $ajax;
        $ajaxLoad->enviarDados($dados);
    }
}