<?php 
class tipoGestion {

function obtenerTiposGestion(){
   
        include("/var/www/html/crm/conexiones/mysql.inc.php");
        $consultaSql    = "select * from tipo_gestion";
        if($resultado = $objetoMYSQL->query($consultaSql)){
            if($objetoMYSQL->affected_rows>0){
                $i=0;
                while($fila = $resultado->fetch_assoc()){
                    $arreglo[$i]=array($fila['id_tipo_gestion'],$fila['nombre_tipo_gestion']);
                    $i++;
                }
                return $arreglo;
            }else{
                echo"No se encontrarón datos.";
            }
        }else{
            echo"No fué posible ejecutar la consulta".$objetoMYSQL->error;
        }
        $objetoMYSQL->close();
    }

function eliminarTipoGestion($id_tipo){

$var_tipo_gestion   = $id_tipo;
include("/var/www/html/crm/conexiones/mysql.inc.php");
$eliminar    = "delete from tipo_gestion where id_tipo_gestion='$var_tipo_gestion'";
 if($objetoMYSQL->query($eliminar)==TRUE){
    return 1;

    }else{
        return 0;
      
    
    }

}
function actualizarTipoGestion($id_tipo,$nombre_tipo_gestion){

$var_tipo_gestion           = $id_tipo;
$var_nombre_tipo_gestion    = $nombre_tipo_gestion;
include("/var/www/html/crm/conexiones/mysql.inc.php");
$actualizar    = "update tipo_gestion set nombre_tipo_gestion = '$var_nombre_tipo_gestion' 
where id_tipo_gestion='$var_tipo_gestion'";
 if($objetoMYSQL->query($actualizar)==TRUE){
    return 1;

    }else{
        return 0;
      
    
    }

}
}

?>