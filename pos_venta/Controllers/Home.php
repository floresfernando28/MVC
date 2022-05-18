<?php
    // Clase principal
    class Home extends Controller{
        // Creamos un método
        public function index(){
            $this->views->getView($this, 'index');
        }
    }
?>