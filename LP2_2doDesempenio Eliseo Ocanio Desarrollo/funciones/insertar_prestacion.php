<?php 
require_once "funciones/guardar_log.php";
function insertar_prestacion($vConexion, $sesion, $precio, $porcentaje, $esCompleja, $activa,$email){
    

    $SQL = "INSERT INTO `prestaciones`(`sesiones`, `precio`, `porcentaje`, `es_compleja`, `activa`)
         VALUES ('{$sesion}','{$precio}','{$porcentaje}','{$esCompleja}','{$activa}')";
    // retorna true cuando hay errores
    if(!$activa){
        guardar_log($sesion,$email);
    }
    if(!mysqli_query($vConexion, $SQL)){        
        return true;
    }
    //retorna false cuando no hay errores
   
    return false;
}

?>