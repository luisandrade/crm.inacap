<?php 
        ini_set("display_errors",1);
        session_start();
        // se toman las variables por get
            $var_id_tipo                = $_GET["id_tipo"];
            $var_rut_cliente            = $_GET["rut_cliente"];
            $var_rut_usuario            = $_GET["rut_usuario"];
            $var_tipo_gestion           = $_GET["tipo_gestion"];    
            $var_resultado_gestion      = $_GET["resultado_gestion"];
            $var_comentarios            = $_GET["comentarios"];
?>
    <html>
            <head>
            <!-- se cargan los archivos al proyecto-->
                <title>Actualizar gestión</title>
                <script src="../../js/jquery-3.2.1.min.js"></script>
                <script src="../../semantic/semantic.min.js"></script>
                <link rel="stylesheet" type="text/css" href="../../semantic/semantic.min.css">
                <link rel="stylesheet" type="text/css" href="../../css/estilos.css">
            </head>

        <body>
        <?php include("../../plantillas/encabezado.inc.php");?>

            <!--formulario con el cual se muestran los datos a actualizar -->
            <form name="actualizar" action="actualizar-dml.php" method="post" class="ui form">
                    <div class="ui grid centered">
                        <div class="ui segment">
                            <h3 class="ui top attached header">Actualizar gestión</h3>
                        <!--primera columna con los datos a actualizar-->
                        <table class="ui collapsing table" class="center aligned" >
                <thead>
                        <tr>
                            <th>RUT CLIENTE</th>
                            <th>RESULTADO GESTION</th>
                            <th>TIPO GESTION</th>
                            <th>COMENTARIOS</th>
                            <th>OPCIONES</th>
                        </tr>
                </thead>
                <tbody>

                         <tr>
                          <!-- Campo oculto para almacenar el ID y rut usuario gestión-->
                            <input type="hidden" name="hdn_id_tipo" value="<?php echo $var_id_tipo;?>">
                            <!-- Campos normales de gestión-->
                            <td ><div class="field"><div class="ui disabled input"><input type="text" name="rut_cliente" value="<?php echo $var_rut_cliente;?>"></div></td>
                            <td><div class="field"><div class="ui input"><input type="text" name="resultado_gestion" value="<?php echo $var_resultado_gestion;?>"></div></td>
                            <td><div class="field"><div class="ui input"><input type="text" name="tipo_gestion" value="<?php echo $var_tipo_gestion;?>"></div></td>
                            <td><div class="field"><div class="ui input"><input type="text" name="comentarios" value="<?php echo $var_comentarios;?>"></div></td>
                            <td><button class="ui blue submit button">Actualizar</button><div class="ui error message"></div></td>
                        </tr>    
            </form>
            <script language="javascript">
          $('.ui.form')
            .form({
              on: 'blur',
                fields: {
                  resultado_gestion: {
                    identifier  : 'resultado_gestion',
                          rules: [
                        {
            type   : 'empty',
            prompt : 'Debe ingresar resultado gestion'
          }
        ]
      },
      tipo_gestion: {
        identifier  : 'tipo_gestion',
        rules: [
          {
            type   : 'empty',
            prompt : 'Debe ingresar tipo gestion'
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

