<?php
    namespace Sts\Controllers;

    if(!defined('URL')) {
        header("Location: /");
        exit();
    }

    class NotFoundController {

        public function index() {      
            $loginView = new \Core\ConfigView(NotFound);
            $loginView->Render();
        }
    }