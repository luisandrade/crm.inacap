<?php 
    session_start();
    ini_set("display_errors",1);
  // se toman las variables por get de los formularios
        $var_rut_cliente            = $_GET["rut_cliente"];
        $var_nombre_cliente         = $_GET["nombre_cliente"];
        $var_apellido_cliente       = $_GET["apellido_cliente"];
        $var_email_cliente          = $_GET["email_cliente"];
        $var_celular_cliente        = $_GET["celular_cliente"];
        $var_fono_fijo              = $_GET["fono_fijo"];
        $var_fecha_actualizacion    = $_GET["fecha_actualizacion"];
?>

<html>
        <head>
            <title>Actualizar gestión</title>
            <!--se cargan los archivos necesarios para el proyecto-->
                <script src="../../js/jquery-3.2.1.min.js"></script>
                <script src="../../semantic/semantic.min.js"></script>
                <link rel="stylesheet" type="text/css" href="../../semantic/semantic.min.css">
                <link rel="stylesheet" type="text/css" href="../../css/estilos.css">
            </title>    
        </head>
    <body>
    <?php include("../../plantillas/encabezado.inc.php");?>

      <!--formulario con los datos mostrados que luego iran al dml para ser actualizados-->
        <form name="actualizar" action="actualizarCliente-dml.php" method="post" class="ui form">
                <div class="ui grid centered">
                    <div class="ui segment">
                        <h3 class="ui top attached header">Actualizar Clientes</h3>
            <table class="ui collapsing table" class="center aligned" >
                    <thead>
                        <tr>
                            <th>RUT CLIENTE</th>
                            <th>NOMBRE CLIENTE</th>
                            <th>APELLIDO CLIENTE</th>
                            <th>E-MAIL</th>
                            <th>CELULAR</th>
                            <th>FONO</th>
                            <th>OPCIONES</th>
                        </tr>
                    </thead>
            <tbody>
                    <tr>
                     <!-- Campos CLIENTE que se muestran los datos obtenidos de la base de datos-->
                        <td><div class="field"><div class="ui mini disabled input"><input type="text" name="rut_cliente" value="<?php echo $var_rut_cliente;?>"></div></td>
                        <td><div class="field"><div class="ui mini input"><input type="text" name="nombre_cliente" value="<?php echo $var_nombre_cliente;?>"></div></td>
                        <td><div class="field"><div class="ui mini input"><input type="text" name="apellido_cliente" value="<?php echo $var_apellido_cliente;?>"></div></td>
                        <td><div class="field"><div class="ui mini input"><input type="text" name="email_cliente" value="<?php echo $var_email_cliente;?>"></div></td>
                        <td><div class="field"><div class="ui mini input"><input type="text" name="celular_cliente" value="<?php echo $var_celular_cliente;?>"></div></td>
                        <td><div class="field"><div class="ui mini input"><input type="text" name="fono_fijo" value="<?php echo $var_fono_fijo;?>"></div></td>
                        <td><button class="ui blue submit button">Actualizar</button><div class="ui error message"></div></td>
                    </tr>    
        </form>
        <!-- script que realiza las validaciones al realizar la actualizacion de los datos-->
        <script language="javascript">
          $('.ui.form')
            .form({
              on: 'blur',
                fields: {
                  nombre_cliente: {
                    identifier  : 'nombre_cliente',
                          rules: [
                        {
            type   : 'empty',
            prompt : 'Debe ingresar un nombre'
          }
        ]
      },
      apellido_cliente: {
        identifier  : 'apellido_cliente',
        rules: [
          {
            type   : 'empty',
            prompt : 'Debe ingresar apellido'
          }
        ]
      },
      email_cliente: {
        identifier  : 'email_cliente',
        rules: [
          {
            type   : 'empty',
            prompt : 'Debe ingresar email'
          }
        ]
      },
      celular_cliente: {
        identifier  : 'celular_cliente',
        rules: [
          {
            type   : 'empty',
            prompt : 'Debe ingresar N° celular'
          }
        ]
      },
      fono_fijo: {
        identifier  : 'fono_fijo',
        rules: [
          {
            type   : 'empty',
            prompt : 'Debe ingresar N° fono'
          }
        ]
      }, 
      mail_cliente: {
        identifier  : 'mail_cliente',
        rules: [
          {
            type   : 'empty',
            prompt : 'Debe ingresar mail'
          }
        ]
      }, 
    }
  })
;

</script>
    </body>
</html>