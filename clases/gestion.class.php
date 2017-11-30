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
        include("/var/www/html/crm/conexiones/mysql.inc.php"); // se incluye el archivo de tipo conexion 
        // se realiza la insercion de los regritos en los atributos de la tabla gestion 
        $insertar="INSERT INTO gestion(rut_usuario,rut_cliente,id_tipo_gestion,id_resultado_gestion,comentarios,fecha_actualizacion)
        VALUES('$var_usuario','$var_cliente','$var_tipo_gestion','$var_resultado_gestion','$var_comentarios','$var_fecha_actualizacion') ";
        // realiza la verificacion del objeto MYSQL 
            if($objetoMYSQL->query($insertar)==TRUE){
                return 1;

                    }else{
                return 0;
                }
                $objetoMYSQL->close();
                }

    
        function obtenerGestion(){
    
        include("/var/www/html/crm/conexiones/mysql.inc.php");
        // senetencia sql que realiza la seleccion de todos los registros de la tabla gestion
        $consultaSql    = " SELECT * FROM gestion";
        if($resultado = $objetoMYSQL->query($consultaSql)){
            if($objetoMYSQL->affected_rows>0){
                 $i=0;
                 // arreglo que recorre los atributos de la tabla 
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
            include("/var/www/html/crm/conexiones/mysql.inc.php"); // se incluye la conexion para luego verificar el objeto 
            // sentencia sql que elimina la tupla segun el id
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
            include("/var/www/html/crm/conexiones/mysql.inc.php"); // se incluye el archivo conexion
            // sentencia que actualiza los datos de la tabla gestion segun el id de la tupla
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