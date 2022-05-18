<?php

    $controllerFile = 'Controllers/'.$controller.'.php';
    if(file_exists($controllerFile)){
        require_once($controllerFile);
        $controller = new $controller();

        if(method_exists($controller,$method)){  //Le pasamos el controlador Home y el métod home
            $controller->{$method}($params); //Al método que tenemos le pasamos los parametros que van desde la posicion 2 -> a más
        }else{
            require_once('Controllers/Error.php');
        }
    }else{
        require_once('Controllers/Error.php');
    }
?>