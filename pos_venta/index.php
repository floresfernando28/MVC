<?php

    require_once 'Config/Config.php';

    // echo $_GET['url'];
    // La función empty verifica si esta vacio el campo o es false,o no se cumple una condición
    $ruta = !empty($_GET['url']) ? $_GET["url"] : "Home/index"; 
    $array = explode("/",$ruta);
    $controller = $array[0];
    $metodo = "index";
    $parametro = "";
    
    if(!empty($array[1])){
        if(!empty($array[1] != "")){
            $metodo = $array[1];
        }
    }

    if(!empty($array[2])){
        if(!empty($array[2] != "")){
            for($i=2; $i<count($array); $i++){
                $parametro .= $array[$i]. ',';
            }
            $parametro = trim($parametro, ",");
        }
    }

    // Traemos el método de la clase requerida a tráves de una instanciación de Objetos

    require_once('Config/App/autoload.php');

    $dircontrollers = 'Controllers/'.$controller.'.php';
    if(file_exists($dircontrollers)){
        require_once $dircontrollers;

        $controller = new $controller();
        if(method_exists($controller, $metodo)){
            $controller->$metodo($parametro);
        }else{
            echo '¡Error!, No existe el método';
        }
    }else {
        echo '¡Error!, No existe el controlador';
    }

?>




