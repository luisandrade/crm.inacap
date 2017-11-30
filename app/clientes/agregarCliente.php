<?php 
    session_start();
    ini_set("display_errors",1);
?>    

<html>
    <head>
    <!--se cargan los archivo necesarios en el proyecto-->
        <script src="../../js/jquery-3.2.1.min.js"></script>
        <script src="../../semantic/semantic.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../../semantic/semantic.min.css">
        <link rel="stylesheet" type="text/css" href="../../css/estilos.css">
      <title>Agregar Cliente</title>
    </head>
  <body>


  <?php include("../../plantillas/encabezado.inc.php");?>
              <p></p>
              <p></p>
        <!--formulario para que el usuario ingrese los datos a agregar del cliente-->
        <form name ="frm_agregar_cliente" action="agregarCliente-dml.php" method="post" class="ui form">
              <div class="ui grid centered">
                  <div class="ui segment">
                        <h3 class="ui top attached header">Agregar Cliente</h3>
                  <table class="ui collapsing table" class="center aligned">
                        <thead>
                              <tr>
                                   <th>RUT CLIENTE</th>
                                   <th>NOMBRE CLIENTE</th>         
                                  <th>APELLIDO CLIENTE</th>               
                                  <th>EMAIL</th>       
                                  <th>CELULAR</th>
                                  <th>FONO FIJO</th>
                                  <th>OPCIONES</th>

                              </tr>
                        </thead>
                    </tbody>
    
                              <tr>
                              <!--campos que se llenan por el usuario-->
                                  <td><div class="field"><div class="ui mini input"><input type="text" name="rut_cliente"></td></div>
                                  <td><div class="field"><div class="ui mini input"><input type="text" name="nombre_cliente"></td></div>
                                  <td><div class="field"><div class="ui mini input"><input type="text" name="apellido_cliente"></td></div>
                                  <td><div class="field"><div class="ui mini input"><input type="text" name="mail_cliente"></td></div>
                                  <td><div class="field"><div class="ui mini input"><input type="text" name="celular_cliente"></td></div>
                                  <td><div class="field"><div class="ui mini input"><input type="text" name="fonofijo_cliente"></td></div>
                                  <td><button class="ui blue submit button">Agregar</button><div class="ui error message"></div></td></div>
                              </tr>
       
                  </table>
        </form>
     <!--codigo script de validacion por semantic-ui-->
    <script language="javascript">
          $('.ui.form')
            .form({
              on: 'blur',
                fields: {
                  rut_cliente: {
                    identifier  : 'rut_cliente',
                          rules: [
                        {
            type   : 'empty',
            prompt : 'Debe ingresar un Rut'
          }
        ]
      },
      nombre_cliente: {
        identifier  : 'nombre_cliente',
        rules: [
          {
            type   : 'empty',
            prompt : 'Debe ingresar nombre'
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
      celular_cliente: {
        identifier  : 'celular_cliente',
        rules: [
          {
            type   : 'empty',
            prompt : 'Debe ingresar N° celular'
          }
        ]
      },
      fonofijo_cliente: {
        identifier  : 'fonofijo_cliente',
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
