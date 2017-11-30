<?php

ini_set("display_errors",1);
//incluimos la clase cliente
include("../clases/cliente.class.php");
//Creamos el objeto de la clase cliente
$obj_cliente = new cliente();
//invocamos el metodo obtenerDatosCliente
$var_rut     =   $_GET["p_rut"];
$RT_DATOS    =  $obj_cliente->obtenerClientes($var_rut);
$var_cantidad =count($RT_DATOS);
//Concatenamos resultados
if($var_cantidad==1){
    $var_nombre_completo    =       $RT_DATOS[0][1]." ".$RT_DATOS[0][2];
    }else{
    $var_nombre_completo    = "No se encontró información paral el RUT ingresado";
    }
    ?>
    <b><?php echo $var_nombre_completo;?></b>
