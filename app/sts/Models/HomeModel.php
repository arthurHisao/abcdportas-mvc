<?php
    namespace Sts\Models;

    class HomeModel {
        private $Result;

        public function listImages() {
            $list = new \Sts\Models\Connection\Read();
            $list->fullRead("SELECT `coluna_um`, `coluna_dois`, `coluna_tres` from `imagens_servicos`");       
            $this->Result = $list->getResult();
            return $this->Result;
        }
    }