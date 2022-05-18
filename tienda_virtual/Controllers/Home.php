<?php

    class home extends Controllers{ //Controlador -> Clase Posicion [0]
        public function __construct()
        {
            parent::__construct();
        }

        public function home(){  //Método del Controlador [0]
            $this->views->getViews($this, 'home');
        }

        // MÉTODOS DEL CONTROLADOR HOME DE LA POSICIÓN [1]


    }

?>