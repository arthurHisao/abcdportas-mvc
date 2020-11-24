<?php
    ini_set('display_errors', 1);
    
    require './core/Config.php';
    require './vendor/autoload.php';
    
    // adicionando um alias apelido 
    use Core\ConfigController as loadController;

    if(isset($_POST['dados'])) {
        $dados = $_POST['dados'];

        $class = new loadController();
        $class->ajaxController($dados);
    } else {
        $Url = new loadController();
        $Url->loadController();    
    }
  