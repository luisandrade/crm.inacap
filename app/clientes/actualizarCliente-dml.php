<?php 
        ini_set("display_errors",1);
        include("../../clases/cliente.class.php");
           // se toman las variables del formulario por post  
        $obj_cliente        = new cliente();
        $var_rut_cliente            = $_POST["rut_cliente"];
        $var_nombre_cliente         = $_POST["nombre_cliente"];
        $var_apellido_cliente       = $_POST["apellido_cliente"];
        $var_email_cliente          = $_POST["email_cliente"];
        $var_celular_cliente        = $_POST["celular_cliente"];
        $var_fono_fijo              = $_POST["fono_fijo"];

        // se pasan las variables al metodo actualizarCliente
        $var_resultado              = $obj_cliente->actualizarCliente($var_rut_cliente,$var_nombre_cliente,$var_apellido_cliente,$var_email_cliente,$var_celular_cliente,$var_fono_fijo);
            if($var_resultado==1){
                header("Location:index.php");
            }else{
                echo "Se ha producido un problema al actualizar";
            }
?>