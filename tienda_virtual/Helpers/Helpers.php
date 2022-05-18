<?php

    // Con esta función Retornamos la url Base del proyecto
    function base_url(){
        return BASE_URL;
    }

    // Con esta funcion mostramos informacion formateada, más orden si queremos verificar algo
    function dep($data){
        $format = print_r('<prev>');
        $format = print_r($data);
        $format = print_r('</prev>');

        return $format;
    }

    // Elimina exceso de espacios entre comillas
    function strClean($strCadena){
        $string = preg_replace(['/\s+/','/^\s|\s$/'],[' ',''], $strCadena);
        $string = trim($string); //Elimina espacios en blanco al inicio y al final
        $string = stripslashes($string); // Elimina las \ invertidas
        $string = str_ireplace("<script>","",$string);
        $string = str_ireplace("</script>","",$string);
        $string = str_ireplace("<script src>","",$string);
        $string = str_ireplace("<script type=>","",$string);
        $string = str_ireplace("SELECT * FROM","",$string);
        $string = str_ireplace("DELETE FROM","",$string);
        $string = str_ireplace("INSERT INTO","",$string);
        $string = str_ireplace("SELECT COUNT(*) FROM","",$string);
        $string = str_ireplace("DROP TABLE","",$string);
        $string = str_ireplace("OR '1'='1","",$string);
        $string = str_ireplace('OR "1"="1"',"",$string);
        $string = str_ireplace('OR ´1´=´1´',"",$string);
        $string = str_ireplace("is NULL; --","",$string);
        $string = str_ireplace("in NULL; --","",$string);
        $string = str_ireplace("LIKE '","",$string);
        $string = str_ireplace('LIKE "',"",$string);
        $string = str_ireplace('LIKE ´',"",$string);
        $string = str_ireplace("OR 'a'='a","",$string);
        $string = str_ireplace('OR "a"="a',"",$string);
        $string = str_ireplace("OR ´a´=´a","",$string);
        $string = str_ireplace("OR ´a´=´a","",$string);
        $string = str_ireplace("--","",$string);
        $string = str_ireplace("^","",$string);
        $string = str_ireplace("[","",$string);
        $string = str_ireplace("]","",$string);
        $string = str_ireplace("==","",$string);

        return $string;
    }

    // Función generadora de Contraseñas

    function passGenerator($lenght = 10){
        $pass = '';
        $longitudPass = $lenght;
        $cadena = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890';
        $longitudCadena = strlen($cadena);

        for($i=1; $i<=$longitudPass; $i++){
            $pos = rand(0,$longitudCadena-1);
            $pass .= substr($cadena, $pos,1);
        }
        return $pass;
    }

    // Función Generadora de tokens -> Por si se le olvida el pass al usuario
    // y lo desea cambiar

    function token(){
        $r1 = bin2hex(random_bytes(10));
        $r2 = bin2hex(random_bytes(10));
        $r3 = bin2hex(random_bytes(10));
        $r4 = bin2hex(random_bytes(10));

        $token = $r1.'-'.$r2.'-'.$r3.'-'.$r4;

        return $token;
    }

    // Formato para valores monetarios -> Ejemplo 123,244,347.00

    function formatMoney($cantidad){
        $cantidad = number_format($cantidad,2,SPD,SPM);

        return $cantidad;
    }



?>