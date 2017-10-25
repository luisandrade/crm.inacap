<?php
ini_set("display_errors",1);
//Capturamos datos del formulario recibidos mediante post 
$var_rut_cliente           =   $_POST["rut_cliente"];
$var_tipo_nombreCliente    =   $_POST["nombre_cliente"];
$var_tipo_apellidoCliente  =   $_POST["apellido_cliente"];
$var_tipo_email            =   $_POST["mail_cliente"];
$var_tipo_celularCliente   =   $_POST["celular_cliente"];
$var_fono_fijo              =  $_POST["fonofijo_cliente"];

//incorporamos la clase cliente

include("../../clases/cliente.class.php");
//creamos objeto de la clase
$obj_cliente = new cliente();
//invocamos el metodo agregar cliente
$var_resultado = $obj_cliente->agregarCliente($var_rut_cliente,$var_tipo_nombreCliente,$var_tipo_apellidoCliente,$var_tipo_email,$var_tipo_celularCliente,$var_fono_fijo);
if($var_resultado==1){
    Header("Location:index.php");
}else{
  Header("Location:agregarCliente.php");
}


?>