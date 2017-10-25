<?php
session_start();
ini_set("display_errors",1);
//Capturamos datos del formulario recibidos mediante post
$var_rut_usuario        =   $_SESSION["ses_rut_usuario"];  
$var_rut_cliente        =   $_POST["txt_rut_cliente"];
$var_tipo_gestion       =   $_POST["txt_tipo_gestion"];
$var_resultado_gestion  =   $_POST["txt_resultado_gestion"];
$var_comentarios        =   $_POST["txt_comentarios"];
//incorporamos la clase gestión

include("../../clases/gestion.class.php");
//creamos objeto de la clase
$obj_gestion = new gestion();
//invocamos el metodo agregar gestion
$var_resultado = $obj_gestion->agregarGestion($var_rut_usuario,$var_rut_cliente,$var_tipo_gestion,$var_resultado_gestion,$var_comentarios);
if($var_resultado==1){
    Header("Location:index.php");
}else{
  Header("Location:agregar.php");
}


?>