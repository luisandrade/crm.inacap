<?php
            class cliente{
                    function agregarCliente($rutCliente,$nombreCliente,$apellidoCliente,$mailCliente,$celularCliente,$fonoFijo){
                    date_default_timezone_set('America/Santiago');
                    $var_rut_cliente            =   $rutCliente;
                    $var_tipo_nombreCliente     =   $nombreCliente;     
                    $var_tipo_apellidoCliente   =   $apellidoCliente;
                    $var_tipo_mail              =   $mailCliente;
                    $var_tipo_celularCliente    =   $celularCliente;
                    $var_fono_fijo              =   $fonoFijo;
                    $var_fecha_actualizacion    =   Date("Y-m-d H:i:s");
                            
                    include("/var/www/html/crm/conexiones/mysql.inc.php");  // se incluye la conexion a la base de datos
                    // se insertan los valores en los atributos de la tabla cliente
                    $insertar="INSERT INTO cliente(rut_cliente,nombres,apellidos,email,celular,fono_fijo,fecha_actualizacion)
                    VALUES('$var_rut_cliente','$var_tipo_nombreCliente','$var_tipo_apellidoCliente','$var_tipo_mail','$var_tipo_celularCliente','$var_fono_fijo','$var_fecha_actualizacion') ";
                            if($objetoMYSQL->query($insertar)==TRUE){
                                    return 1;
                                }else{
                                    return 0;
                                }
                                    $objetoMYSQL->close();
                                }

                                function mostrarClientes(){
                                
                                    
                                    include("/var/www/html/crm/conexiones/mysql.inc.php"); // se incluye la conexion a la base de datos
                                    $consultaSql    = " SELECT * FROM cliente "; // sentencia sql para seleccionar a todos los usuarios
                                                if($resultado = $objetoMYSQL->query($consultaSql)){
                                                        if($objetoMYSQL->affected_rows>0){
                                                            $i=0;
                                                            // arreglo donde se obtiene todos los usuarios
                                                                while($fila = $resultado->fetch_assoc()){
                                                                        $arreglo[$i]=array($fila['rut_cliente'],$fila['nombres'],$fila['apellidos'],$fila['email'],$fila['celular'],$fila['fono_fijo'],$fila['fecha_actualizacion']);
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

                    function obtenerClientes($rut){
                        $var_rut_cliente  = $rut;
                        
                        include("/var/www/html/crm/conexiones/mysql.inc.php"); // se incluye la conexion a la base de datos
                        $consultaSql    = " SELECT rut_cliente,nombres,apellidos  FROM cliente WHERE rut_cliente= '$var_rut_cliente'"; // sentencia sql para seleccionar a todos los usuarios
                                    if($resultado = $objetoMYSQL->query($consultaSql)){
                                            if($objetoMYSQL->affected_rows>0){
                                                $i=0;
                                                // arreglo donde se obtiene todos los usuarios
                                                    while($fila = $resultado->fetch_assoc()){
                                                            $arreglo[$i]=array($fila['rut_cliente'],$fila['nombres'],$fila['apellidos']);
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


                    function eliminarCliente($id_tipo){
                    $var_cliente = $id_tipo;
                    include("/var/www/html/crm/conexiones/mysql.inc.php");
                    // sentencia para eliminar la tupla de la tabla clientes segun su id
                    $eliminarSql    = "DELETE FROM cliente WHERE rut_cliente='$var_cliente'";
                    if($objetoMYSQL->query($eliminarSql)==TRUE){
                        return 1;

                        }else{
                            echo $objetoMYSQL->error;
                                    return 0;
                                   
                            }
                        }
                        
                    function actualizarCliente($rut_cliente,$nombre_cliente,$apellido_cliente,$email_cliente,$celular_cliente,$fono_fijo,$fecha_actualizacion){
                    $var_rut_cliente            =$rut_cliente;
                    $var_nombre_cliente         =$nombre_cliente;
                    $var_apellido_cliente       =$apellido_cliente;
                    $var_email_cliente          =$email_cliente;
                    $var_celular_cliente        =$celular_cliente;
                    $var_fono_fijo              =$fono_fijo;
                    $var_fecha_actualizacion    =$fecha_actualizacion;
                    include("/var/www/html/crm/conexiones/mysql.inc.php"); // se incluye la conexion a la base de datos
                    // sentencia sql para reliazar la actualizacion de los valores agregados por el usuario a la tabla cliente
                    $actualizar    = "UPDATE cliente SET nombres='$nombre_cliente',apellidos='$apellido_cliente',email='$email_cliente',celular='$celular_cliente',fono_fijo='$fono_fijo' WHERE rut_cliente='$var_rut_cliente'";  
                       if($objetoMYSQL->query($actualizar)==TRUE){
                            return 1;
                            }else{
                                echo $objetoMYSQL->error; //return 0;
                             }
                            
                        }
                
                }
?>