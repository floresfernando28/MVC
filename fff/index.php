<?php
        // ==================CONECTAR A SQL SERVER DESDE PHP=======================


        // Creamos unas constantes para la Conexión a una Base de Datos

        const DB_HOST = 'localhost,';
        const DB_NAME = 'Supermercado';
        const DB_USER = 'fernando';
        const DB_PASS = '28032002fer.28';
        const puerto = 1433;

        // Clase
        class Conexion{

            public $connect; //Creamos una variable privada para que no sea modoficada fuera de la clase
    
            function __construct(){ //Constructor
                $connectionstring = 'sqlsrv:Server='.DB_HOST.puerto.';Database='.DB_NAME;
    
                try{
                    $this->connect = new PDO($connectionstring, DB_USER,DB_PASS);
                    $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //Reporte de los errores para el catch
                    echo 'Conectado exitosamente! ala Base de datos '.DB_NAME;
                }catch(PDOException $e){
                    $this->connect = 'Error de la Conexión con la BD';
                    echo 'Error al conectar con la base de datos'.$e->getMessage();
                }
            }
            public function connect(){
                return $this->connect;
            }

        }

        $conec = new Conexion();
        $conec->connect();
    ?>


<!-- =========================== CONECTAR MYSQL CON PHP =================================== -->
    <!-- const DB_HOST = 'localhost';
    const DB_NAME = 'sistema';
    const DB_USER = 'root';
    const DB_PASS = '';
    const DB_CHARSET = 'charset=utf8';
    const DB_CHARSET = 'charset=utf8'; -->



    <!-- class Conexion{

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

    //Con este método accedemos ala conexión de la BD
    public function connect(){
        return $this->connect;
    }
    } -->
