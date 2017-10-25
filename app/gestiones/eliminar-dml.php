<?php
ini_set("display_errors",1);
$var_id_tipo        = $_GET["id_tipo"]; 
include("../../clases/gestion.class.php");
$obj_gestion        = new gestion();
$var_resultado      = $obj_gestion->eliminarGestion($var_id_tipo);                
 if ($var_resultado ==1){
    Header("Location:../gestiones/index.php");

 }else{
echo "se ha producido un error";

 }               
                

                        
?>




