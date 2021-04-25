<?php
    namespace Sts\Controllers;

    if(!defined('URL')) {
        header("Location: /");
        exit();
    }

    class Home {

        private $Data;

        public function index() {
            
            $showImages = new \Sts\Models\HomeModel();
            $this->Data['imagens'] = $showImages->listImages();  

            $imgProdutos = new \Sts\Models\ImagensProdutos();
            $this->Data['imagens_produtos'] = $imgProdutos->listImages();

            $loginView = new \Core\ConfigView(Home, $this->Data);
            $loginView->Render();
        }
    }