<?php
    session_start();

    //limpa o buffer para redirecionar
    ob_start();

    //definindo o url     
    define('URL', 'http://localhost/abcdportas-mvc/');

    //definindo rotas do view
    define('Home', 'app/sts/Views/home/home.php');
    define('Servicos', 'app/sts/Views/servicos/servicos.php');
    define('Sobre', 'app/sts/Views/sobre/sobre.php');
    define('Contato', 'app/sts/Views/contato/contato.php');

    define('Logout', 'app/sts/Views/user/Logout.php');
    define('NotFound', 'app/sts/Views/error/NotFound.php');

    //definindo a rota controller
    define('controllerHome', 'Home');
    define('controllerNotFound','NotFoundController');
    define('controllerForm','FormController');
