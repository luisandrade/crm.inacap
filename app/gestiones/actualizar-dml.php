<?php 
ini_set("display_errors",1);
include("../../clases/gestion.class.php");
$obj_gestion        = new gestion();

$var_id_tipo                = $_POST["hdn_id_tipo"];
$var_resultado_gestion      = $_POST["resultado_gestion"];
$var_tipo_gestion           = $_POST["tipo_gestion"];
$var_comentarios            = $_POST["comentarios"];

$var_resultado          = $obj_gestion->actualizarGestion($var_id_tipo,$var_resultado_gestion,$var_tipo_gestion,$var_comentarios );
if($var_resultado==1){
    header("Location:index.php");
    }else{
    echo "Se ha producido un problema al actualizar";
    }
    ?>