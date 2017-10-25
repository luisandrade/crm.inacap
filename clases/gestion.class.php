<?php
class gestion{

function agregarGestion($usuario,$cliente,$tipo_gestion,$resultado_gestion,$comentarios){
date_default_timezone_set('America/Santiago');    
$var_usuario            =   $usuario;
$var_cliente            =   $cliente;
$var_tipo_gestion       =   $tipo_gestion;
$var_resultado_gestion  =   $resultado_gestion;
$var_comentarios        =   $comentarios;
$var_fecha_actualizacion=   Date("Y-m-d H:i:s");
include("/var/www/html/crm/conexiones/mysql.inc.php");
$insertar="INSERT INTO gestion(rut_usuario,rut_cliente,id_tipo_gestion,id_resultado_gestion,comentarios,fecha_actualizacion)
VALUES('$var_usuario','$var_cliente','$var_tipo_gestion','$var_resultado_gestion','$var_comentarios','$var_fecha_actualizacion') ";

    if($objetoMYSQL->query($insertar)==TRUE){
        return 1;

        }else{
            return 0;
    }
$objetoMYSQL->close();
}

    
        function obtenerGestion(){
    
            include("/var/www/html/crm/conexiones/mysql.inc.php");
            $consultaSql    = " SELECT * FROM gestion";
            if($resultado = $objetoMYSQL->query($consultaSql)){
                if($objetoMYSQL->affected_rows>0){
                    $i=0;
                    while($fila = $resultado->fetch_assoc()){
                        $arreglo[$i]=array($fila['id_gestion'],$fila['rut_usuario'],$fila['rut_cliente'],$fila['id_tipo_gestion'],$fila['id_resultado_gestion'],$fila['comentarios'],$fila['fecha_actualizacion']);
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
        
    
        

        function eliminarGestion($id_tipo){
            $var_gestion = $id_tipo;
            include("/var/www/html/crm/conexiones/mysql.inc.php");
           $eliminarSql    = "DELETE FROM gestion WHERE id_gestion='$var_gestion'";
            if($objetoMYSQL->query($eliminarSql)==TRUE){
                return 1;

                        }else{
                                    return 0;
                                   
                            }
                        }
       
       
        function actualizarGestion($id_tipo,$resultado_gestion,$tipo_gestion,$comentarios){
            $var_id_tipo                =$id_tipo;
            $var_resultado_gestion      =$resultado_gestion;
            $var_tipo_gestion           =$tipo_gestion;
            $var_comentarios            =$comentarios;
            include("/var/www/html/crm/conexiones/mysql.inc.php");
            $actualizar    = "UPDATE gestion SET id_resultado_gestion ='$resultado_gestion'
            ,id_tipo_gestion='$tipo_gestion',comentarios ='$comentarios' WHERE id_gestion='$var_id_tipo'";  
            if($objetoMYSQL->query($actualizar)==TRUE){
                return 1;
            
                }else{
                   echo $objetoMYSQL->error; //return 0;
                  
                
                }
            
            }


        }
                    

?>