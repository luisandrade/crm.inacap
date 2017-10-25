<html>
<head>
<script src="../../js/jquery-3.2.1.min.js"></script>
<script src="../../semantic/semantic.min.js"></script>
<link rel="stylesheet" type="text/css" href="../../semantic/semantic.min.css">
<link rel="stylesheet" type="text/css" href="../../css/estilos.css">
<title>Agregar gestion</title>
</head>
<body>

<div class="ui top fixed menu">
  <div class="item">
    <img src="../../img/inacap.png">
  </div>
  <a class="item">Home</a>
  <a class="item">Gestiones</a>
  <a class="item">Clientes</a>
  <div class="right menu">
  <a href="/crm/index.php" class="ui item">
      Logout
    </a>
    <a class="ui item">
    <?php
session_start();

echo "Bienvenido ".$_SESSION["ses_nombres_usuario"]." ".$_SESSION["ses_apellidos_usuario"];

?>
    
</div>

</div>
<p></p>
<p></p>
<form name ="frm_agregar_gestion" action="agregar-dml.php" method="post" class="ui form">
    <div class="ui grid centered">
        <div class="ui segment">
             <h3 class="ui top attached header">
                   Agregar Gestion
             </h3>
    <table class="ui collapsing table" class="center aligned">
<thead>
            <tr>
                <th>RUT CLIENTE</th>         
                <th>TIPO GESTIÓN</th>               
                <th>RESULTADO</th>       
                <th >COMENTARIOS</th>
                <th >OPCIONES</th>
            </tr>
</thead>
    </tbody>
            <tr>
                <td><div class="field"><div class="ui input"><input type="text" name="txt_rut_cliente"></div></td>
                <td><div class="field"><div class="ui input"><input type="text" name="txt_tipo_gestion"></div></td>
                <td><div class="field"><div class="ui input"><input type="text" name="txt_resultado_gestion"></div></td>
                <td><div class="field"><div class="ui form">
                <div class="field"><textarea name="txt_comentarios" rows="2"></textarea></div></div></td>
                <td><button class="ui blue submit button">Guardar Gestión</button><div class="ui error message"></div></td>
                 </div></div>
            </tr>
         </table>
      </form>
      <script language="javascript">
$('.ui.form')
  .form({
    on: 'blur',
    fields: {
        txt_rut_cliente: {
        identifier  : 'txt_rut_cliente',
        rules: [
          {
            type   : 'empty',
            prompt : 'Debe ingresar un Rut'
          }
        ]
      },
      txt_tipo_gestion: {
        identifier  : 'txt_tipo_gestion',
        rules: [
          {
            type   : 'empty',
            prompt : 'Debe ingresar tipo de gestion'
          }
        ]
      },
      txt_resultado_gestion: {
        identifier  : 'txt_resultado_gestion',
        rules: [
          {
            type   : 'empty',
            prompt : 'Debe ingresar tipo de resultado gestion'
          }
        ]
      }
    }
  })
;

</script>
</body>
</html>