<?php
    namespace Sts\Models;

    class ImagensProdutos {
        private $Result;

        public function listImages() {
            $list = new \Sts\Models\Connection\Read();
            $list->fullRead("SELECT `coluna_um`, `coluna_dois`, `coluna_tres`, `coluna_quatro` from `imagens_produtos`");       
            $this->Result = $list->getResult();
            return $this->Result;
        }
    }