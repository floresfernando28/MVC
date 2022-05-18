<?php


    class homeModel{
        public function __construct(){
            echo 'Mensaje desde el controlador homeModel';
        }

        public function mostrarSaludo($parametros){
            return '<br> Los parametros son'.$parametros;
        }
    }

?>