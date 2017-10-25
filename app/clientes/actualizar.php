<?php 
ini_set("display_errors",1);
  
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


    <form name="actualizar" action="actualizarCliente-dml.php" method="post" class="ui form">
    <div class="ui grid centered">
        <div class="ui segment">
            <h3 class="ui top attached header">
                        Actualizar Clientes
            </h3>
            <table class="ui collapsing table" class="center aligned" >
            <thead>
                <tr>
                    <th>RUT CLIENTE</th>
                    <th>NOMBRE CLIENTE</th>
                    <th>APELLIDO CLIENTE</th>
                    <th>E-MAIL</th>
                    <th>CELULAR</th>
                    <th>FONO</th>
                    <th>FECHA</th>
                    <th>OPCIONES</th>
                </tr>
            </thead>
        <tbody>
                    <tr>
<!-- Campo oculto para almacenar el ID y rut usuario gestión-->

<!-- Campos normales de CLIENTE-->
<td><div class="ui disabled input"><input type="text" name="rut_cliente" value="<?php echo $var_rut_cliente;?>"></div></td>
<td><div class="ui input"><input type="text" name="nombre_cliente" value="<?php echo $var_nombre_cliente;?>"></div></td>
<td><div class="ui input"><input type="text" name="apellido_cliente" value="<?php echo $var_apellido_cliente;?>"></div></td>
<td><div class="ui input"><input type="text" name="email_cliente" value="<?php echo $var_email_cliente;?>"></div></td>
<td><div class="ui input"><input type="text" name="celular_cliente" value="<?php echo $var_celular_cliente;?>"></div></td>
<td><div class="ui input"><input type="text" name="fono_fijo" value="<?php echo $var_fono_fijo;?>"></div></td>
<td><div class="ui input"><input type="text" name="fecha_actualizacion" value="<?php echo $var_fecha_actualizacion;?>"></div></td>
<td><button class="ui blue submit button">Actualizar</button><div class="ui error message"></div></td>
</form>
</body>
</html>