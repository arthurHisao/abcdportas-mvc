<?php
    namespace Sts\Controllers;

    if(!defined('URL')) {
        header("Location: /");
        exit();
    }

    class Servicos  {

        public function index() {
            $loginView = new \Core\ConfigView(Servicos);
            $loginView->Render(); 
        }
        

    }