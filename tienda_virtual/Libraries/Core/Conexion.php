<?php

    class Conexion{

        private $connect; //Creamos una variable privada para que no sea modoficada fuera de la clase

        function __construct(){ //Constructor
            $connectionstring = 'mysql:host='.DB_HOST.';dbname='.DB_NAME.';.DB_CHARSET.';

            try{

                $this->connect = new PDO($connectionstring, DB_USER,DB_PASS);
                $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //Reporte de los errores para el catch
            }catch(PDOException $e){
                $this->connect = 'Error de la Conexión con la BD';
                echo 'Error'.$e->getMessage();

            }
        }

        // Con este método accedemos ala conexión de la BD
        public function connect(){
            return $this->connect;
        }
    }


?>