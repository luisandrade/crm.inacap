<?php 
ini_set("display_errors",1);
$var_id_tipo                = $_GET["id_tipo"];
$var_rut_cliente            = $_GET["rut_cliente"];
$var_rut_usuario            = $_GET["rut_usuario"];
$var_tipo_gestion           = $_GET["tipo_gestion"];
$var_resultado_gestion      = $_GET["resultado_gestion"];
$var_comentarios            = $_GET["comentarios"];
?>
<html>
<head>
<title>Actualizar gestión</title>
<script src="../../js/jquery-3.2.1.min.js"></script>
<script src="../../semantic/semantic.min.js"></script>
<link rel="stylesheet" type="text/css" href="../../semantic/semantic.min.css">
<link rel="stylesheet" type="text/css" href="../../css/estilos.css">
</head>

<body>

<div class="ui top fixed menu">
  <div class="item">
    <img src="../../img/inacap.png">
  </div>
  <a href="../crm.php" class="item">Home</a>
  <a href="../../app/gestiones/index.php" class="item">Gestiones</a>
  <a href="../../app/clientes/index.php" class="item">Clientes</a>
  <div class="right menu">
  <a href="/crm/index.php" class="ui item">
      Logout
    </a>
    <a class="ui item">
<?php
session_start();
echo "Bienvenido ".$_SESSION["ses_nombres_usuario"]." ".$_SESSION["ses_apellidos_usuario"];
?>
</a>

    </div>
</div>

<form name="actualizar" action="actualizar-dml.php" method="post" class="ui form">
<div class="ui grid centered">
    <div class="ui segment">
        <h3 class="ui top attached header">
                    Actualizar gestión
        </h3>
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
<td ><div class="ui disabled input"><input type="text" name="rut_cliente" value="<?php echo $var_rut_cliente;?>"></div></td>
<td><div class="ui input"><input type="text" name="resultado_gestion" value="<?php echo $var_resultado_gestion;?>"></div></td>
<td><div class="ui input"><input type="text" name="tipo_gestion" value="<?php echo $var_tipo_gestion;?>"></div></td>
<td><div class="ui input"><input type="text" name="comentarios" value="<?php echo $var_comentarios;?>"></div></td>
<td><button class="ui blue submit button">Actualizar</button><div class="ui error message"></div></td>
</form>
</body>
</html>

