<?php

    require_once('Config/Config.php');
    require_once('Helpers/Helpers.php');

    // Configuración De la URL
    $url = !empty($_GET['url']) ? $_GET['url'] : 'home/home';
    $arraUrl = explode('/',$url);
    $controller = $arraUrl[0];
    $method = $arraUrl[0];
    $params = '';

    if(!empty($arraUrl[1])){
        if(($arraUrl[1] != '')){
            $method = $arraUrl[1];
        }
    }
    if(!empty($arraUrl[2])){
        if(($arraUrl[2] != '')){
            for($i=2; $i<count($arraUrl); $i++){
                $params .= $arraUrl[$i].',';
            }
            $params = trim($params,',');
        }
    }
    // Carga Automaticas de las clases
    require_once('Libraries/Core/Autoload.php');

    // Load
    require_once('Libraries/Core/Load.php');

?>
