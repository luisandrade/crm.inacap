<?php
switch($var_operacion){


    case 0:
    $var_titulo     = "GESTION REGISTRADO CORRECTAMENTE";
    $var_mensaje    = "GESTION REGISTRADA CORRECTAMENTE EN BASE DE DATOS";
    $var_url_imagen = '../img/ok.png';
    $var_destino    =  'gestiones/index.php';
    $var_enlace     = "ir a gestiones";

    break;
    case 1:
    $var_titulo     ="ERROR AL INGRESAR GESTION";
    $var_mensaje    ="PROBLEMA AL INGRESAR GESTION";
    $var_url_imagen ='../img/no.png';
    $var_destino    ='index.php';
    break;
    
    default: echo "No hay operacion";
} 
?>

