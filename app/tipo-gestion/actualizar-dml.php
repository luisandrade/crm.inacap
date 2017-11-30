<?php 
ini_set("display_errors",1);
include("../../clases/tipoGestion.class.php");
$obj_tipo_gestion = new tipoGestion();
//Capturamos los valores del formulario
$var_id_tipo_gestion        = $_POST["hdn_id_tipo_gestion"];
$var_nombre_tipo_gestion    = $_POST["txt_nombre_tipo_gestion"];
//Invocamos el método de actualizacion
$var_resultado          = $obj_tipo_gestion->actualizarTipoGestion($var_id_tipo_gestion,$var_nombre_tipo_gestion);
if($var_resultado==1){
header("Location:index.php");
}else{
echo "Se ha producido un problema al actualizar";
}
?>