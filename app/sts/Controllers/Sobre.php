<?php
    namespace Sts\Controllers;

    if(!defined('URL')) {
        header("Location: /");
        exit();
    }

    class Sobre  {

        public function index() {
            $loginView = new \Core\ConfigView(Sobre);
            $loginView->Render(); 
        }
        

    }