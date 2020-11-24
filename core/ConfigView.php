<?php
    namespace Core;

    class ConfigView {
        private $Route;
        private $Data;

        //construct metodo magico ira receber dois parametros Nome da view e dados direto do banco
        // $Dados = null significa que é opcional
        public function __construct($Route, $Data = null) {
            $this->Route = (String) $Route;
            $this->Data = $Data;
        }

        public function Render(){      
            switch($this->Route) {
                case Home:
                    include 'app/sts/Views/include/header.php';
                    include 'app/sts/Views/include/menu.php';
                    include $this->Route;
                    include 'app/sts/Views/include/footer.php'; 
                break;

                case Servicos:
                    include 'app/sts/Views/include/header.php';
                    include 'app/sts/Views/include/menu.php';
                    include $this->Route;
                    include 'app/sts/Views/include/footer.php'; 
                break;
          
                case Sobre:
                    include 'app/sts/Views/include/header.php';
                    include 'app/sts/Views/include/menu.php';
                    include $this->Route;
                    include 'app/sts/Views/include/footer.php'; 
                break;
                
                case Contato:
                    include 'app/sts/Views/include/header.php';
                    include 'app/sts/Views/include/menu.php';
                    include $this->Route;
                    include 'app/sts/Views/include/footer.php'; 
                break;
                
                case NotFound:
                    include 'app/sts/Views/include/header.php';
                    include 'app/sts/Views/include/menu.php';
                    include  $this->Route;
                    include 'app/sts/Views/include/footer.php'; 
            }
        }
    }