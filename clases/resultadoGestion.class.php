<?php 
class ResultadoGestion {

function obtenerResultadoGestion(){
   
        include("/var/www/html/crm/conexiones/mysql.inc.php");
        $consultaSql    = "select * from resultado_gestion";
        if($resultado = $objetoMYSQL->query($consultaSql)){
            if($objetoMYSQL->affected_rows>0){
                $i=0;
                while($fila = $resultado->fetch_assoc()){
                    $arreglo[$i]=array($fila['id_resultado_gestion'],$fila['nombre_resultado_gestion']);
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

}
