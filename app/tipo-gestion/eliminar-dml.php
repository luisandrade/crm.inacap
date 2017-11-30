<?php 
ini_set("display_errors",1);
$var_id_tipo            = $_GET["id_tipo"];
include("../../clases/tipoGestion.class.php");
$obj_tipo_gestion       = new tipoGestion();
$var_resultado          = $obj_tipo_gestion->eliminarTipoGestion($var_id_tipo);
if($var_resultado==1){
header("Location:index.php");
}else{
echo "Se ha producido un problema al eliminar";
}

?>