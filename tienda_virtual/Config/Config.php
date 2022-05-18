<?php
    // Podemos declarar constantes de dos formas
    // define('Base_url','http://localhost/tienda_virtual/');

    const BASE_URL = 'http://localhost/tienda_virtual/';
    const LIBS = 'Libraries/';
    const VIEWS = 'Views/';

    // Zona horaria de la región

    date_default_timezone_set('America/Managua');


    // Creamos unas constantes para la Conexión a una Base de Datos

    const DB_HOST = 'localhost';
    const DB_NAME = 'sistema';
    const DB_USER = 'root';
    const DB_PASS = '';
    const DB_CHARSET = 'charset=utf8';


    // Variables para la funcion formatMoney

    const SPD = '.';
    const SPM = ',';
    const SMONEY = '$';

?>