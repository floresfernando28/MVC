<?php

    
    spl_autoload_register(function($clase){
        if(file_exists('Librerias/'.'Core/'.$clase.'.php')){  //La palabra LIBS es una constante del archivo Cnfiguraciones.php
            require_once('Librerias/'.'Core/'.$clase.'.php');
        }
    });

?>