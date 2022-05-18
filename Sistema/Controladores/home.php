
<!-- Clase principal donde se va a acceder si no existen controladores ============== -->
<?php
    class home extends Controladores{

        public function __construct(){
            parent::__construct();  //Cuando entra al home -> ejecuta el contructor de la clase heredad o la clase padre
        }

        public function home(){
            echo 'Mensaje desde el Método que esta en el controlador';
        }

        public function datos($parametros){
            echo 'Hola Fernando'.$parametros;
        }

        public function mostrarSaludo($parametros){
            $saludo = $this->modelo->mostrarSaludo($parametros);
            echo $saludo;
        }
    }

?>