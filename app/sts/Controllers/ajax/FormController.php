<?php 
    namespace Sts\Controllers\ajax;
    
    if(!defined('URL')) {
        header("Location: /");
        exit();
    }

    class FormController {

        public function enviarDados($dados) {
            $Formulario = new \Sts\Models\ajax\Formulario($dados);
            $Formulario->enviarEmail();
        }
    }
        
        
    //$data = json_decode(file_get_contents('php://input'), true);
    //echo '<pre>';
    //print_r($data);
    //echo '</pre>';

    /*namespace Sts\Controllers;

    if(!defined('URL')) {
        header("Location: /");
        exit();
    }
    
    class FormController {
        public function index() {      
            echo "irei carregar o model";
            //$loginView = new \Core\ConfigView(NotFound);
            //$loginView->Render();
        }
     }*/