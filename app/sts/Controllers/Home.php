<?php
    namespace Sts\Controllers;

    if(!defined('URL')) {
        header("Location: /");
        exit();
    }

    class Home {

        public function index() {
            $loginView = new \Core\ConfigView(Home);
            $loginView->Render();
        }
    }