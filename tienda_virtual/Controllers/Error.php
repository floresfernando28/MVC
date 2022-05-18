<?php

    class Errors extends Controllers{ //Controlador -> Clase Posicion [0]
        public function __construct()
        {
            parent::__construct();
        }

        public function notFound(){  //Método del Controlador [0]
            $this->views->getViews($this, 'error');
        }

        // MÉTODOS DEL CONTROLADOR HOME DE LA POSICIÓN [1]

    }

    $notFound = new Errors();
    $notFound->notFound();



?>