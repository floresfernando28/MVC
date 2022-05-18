<?php

    require_once('Configuraciones/Configuraciones.php'); //Traemos este archivo para obtener todas las constantes

    //Condición simple -> Si la url tiene datos los dejamos, si no tiene le ponemos 
    //defecto el controlador y método -> home/home

    $url = !empty($_GET['url']) ? $_GET['url'] : 'home/home';

    $arreglo = explode('/',$url); //Convertimos en arreglo la url
    $controlador = $arreglo[0]; //La posición [0] del arreglo es el controlador
    $metodo = $arreglo[0];      //La posición [0] tambien la dejamos para el método
    $parametros = '';   //Los parametros los dejamos vacios

    // Configuraciones Adicionales
    // Si la url tiene en método que no sea home, entonces que lo acumule en la variable método
   
    if(!empty($arreglo[1])){
        if($arreglo[1]  != ''){
            $metodo = $arreglo[1];
        }
    }

    // Tengamos en cuenta que el valor desde la posición [2] del arreglo es correspondiente
    // A todos los parametros que se le pasaran

    if(!empty($arreglo[2])){
        if($arreglo[2] != ''){
            for($i=2; $i<count($arreglo); $i++){ //La función count() -> cuenta todos los datos posibles
                $parametros .=$arreglo[$i].',';
            }
            $parametros = trim($parametros, ','); //La función trim() elimina carácteres o espacios en blanco al comienzo o final
        }
    }
    
    require_once('Librerias/Core/Autoload.php');  //->Requerimos este archivo que carga la clase automaticamente

    require_once('Librerias/Core/Load.php');  //Conectamos el controlador, lo buscamos en la carpeta controladores



?>