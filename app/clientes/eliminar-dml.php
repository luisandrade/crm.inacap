<?php
ini_set("display_errors",1);
$var_id_tipo        = $_GET["id_tipo"]; 
include("../../clases/cliente.class.php");
$obj_cliente       = new cliente();
$var_resultado      = $obj_cliente->eliminarCliente($var_id_tipo);                
 if ($var_resultado ==1){

    Header("Location:../clientes/index.php");

 }else{

echo "se ha producido un error";

 }
?>