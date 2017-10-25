<?php
ini_set("display_errors",1);
include("../../clases/cliente.class.php");
$obj_cliente        = new cliente();
$ARR_CLIENTES        =$obj_cliente->obtenerClientes();
$ARR_CANTIDAD_DATOS =count($ARR_CLIENTES);
?>

<html>
    <head>
        <script src="../../js/jquery-3.2.1.min.js"></script>
        <script src="../../semantic/semantic.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../../semantic/semantic.min.css">
        <link rel="stylesheet" type="text/css" href="../../css/estilos.css">
    <title>Lista de Clientes</title>
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
<p></p>
<p></p>



<div class="ui grid centered">
    <div class="ui segment">
        <h3 class="ui top attached header">
                    Lista Clientes
        </h3>
        <table class="ui celled very compact table" class="center aligned">
        <thead>
            <tr><th class="center aligned">RUT</th>
                <th class="center aligned">NOMBRE CLIENTE</th>
                <th class="center aligned">APELLIDO USUARIO</th>
                <th class="center aligned">EMAIL</th>
                <th class="center aligned">CELULAR</th>
                <th class="center aligned">FONO FIJO</th>
                <th class="center aligned">FECHA</th>
                <th class="center aligned">OPCIONES</th>
            </tr>
        </thead>
    <tbody>
    <?php
$i=0;
while($i<$ARR_CANTIDAD_DATOS){
?>
<tr>

      <td><?php echo $ARR_CLIENTES[$i][0];?></td>
      <td><?php echo $ARR_CLIENTES[$i][1];?></td>
      <td><?php echo $ARR_CLIENTES[$i][2];?></td>
      <td><?php echo $ARR_CLIENTES[$i][3];?></td>
      <td><?php echo $ARR_CLIENTES[$i][4];?></td>
      <td><?php echo $ARR_CLIENTES[$i][5];?></td>
      <td><?php echo $ARR_CLIENTES[$i][6];?></td>
      <td><button class="ui red submit button" id="eliminar"><a  href="eliminar-dml.php?id_tipo=<?php echo $ARR_CLIENTES[$i][0];?>"><font color="FFFFFF">Eliminar</font></a></button>
      <button class="ui blue submit button"><a  href="actualizar.php?rut_cliente=<?php echo $ARR_CLIENTES[$i][0] ;?>&nombre_cliente=<?php echo $ARR_CLIENTES[$i][1]  ;?>&apellido_cliente=<?php echo $ARR_CLIENTES[$i][2]  ;?>&email_cliente=<?php echo $ARR_CLIENTES[$i][3]  ;?>&celular_cliente=<?php echo $ARR_CLIENTES[$i][4]  ;?>&fono_fijo=<?php echo $ARR_CLIENTES[$i][5]  ;?>&fecha_actualizacion=<?php echo $ARR_CLIENTES[$i][6]  ;?>"><font color="FFFFFF">Actualizar</font></a></button></td>
      <?php
$i++;
};?>
     </tr>
    
     </tbody>
    </table>
    <hr>
    <div class="ui center floated small primary labeled icon button">
    <i class="user icon"></i> 
     <a href="agregarCliente.php"><font color="FFFFFF">Agregar Cliente</font></a>
   </div>
  
  
</div>
</body>




</html>


