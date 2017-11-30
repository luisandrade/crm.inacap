<?php
        ini_set("display_errors",1);
            $var_id_tipo        = $_GET["id_tipo"]; 
        // se incluye el archivo del tipo class necesario
            include("../../clases/cliente.class.php");
            $obj_cliente       = new cliente();
            $var_resultado      = $obj_cliente->eliminarCliente($var_id_tipo);                
                if ($var_resultado ==1){
                    // si var_resultado es correcto...se redirecciona ala pagina index
                    Header("Location:../clientes/index.php");
                }else{
                    // si es incorrecto aparece un error por pantalla
                    echo "se ha producido un error";

                }
?>