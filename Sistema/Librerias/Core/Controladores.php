<?php

    class Controladores{


        public function __construct()
        {
            $this->loadModel();
        }

        public function loadModel(){
            $modelo = get_class($this).'Model';
            $rutaModelo = 'Modelos/'.$modelo.'.php';

            if(file_exists($rutaModelo)){
                require_once($rutaModelo);
                $this->modelo = new $modelo;
            }
        }

    }
?>