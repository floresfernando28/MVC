<?php
      // Hacemos la conexión con el controlador

      $direccionControlador = 'Controladores/'.$controlador.'.php';

      if(file_exists($direccionControlador)){
          require_once($direccionControlador);
          if(method_exists($controlador, $metodo)){
              $Objcontrolador = new $controlador();  //Hacemos una instanciación de Objeto de la clase
              $Objcontrolador->{$metodo}($parametros);
          }else{
              echo '¡Lo sentimos!, No existe el método';
          }
  
      }else{
          echo '¡Lo sentimos!, No existe el controlador';
      }
  
  
?>