<?php

class usuario{

    function obtenerDatosUsuario($email){
        $var_email=$email;
        include("/var/www/html/crm/conexiones/mysql.inc.php");
        $consultaSql    = "select rut_usuario,nombres,apellidos from usuario where email='$var_email'";
        if($resultado = $objetoMYSQL->query($consultaSql)){
            if($objetoMYSQL->affected_rows>0){
                $i=0;
                while($fila = $resultado->fetch_assoc()){
                    $arreglo[$i]=array($fila['rut_usuario'],$fila['nombres'],$fila['apellidos']);
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

?>