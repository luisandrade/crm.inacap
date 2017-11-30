<?php
ini_set("display_errors",1);
include("../../clases/tipoGestion.class.php");
$obj_tipo_gestion       = new tipoGestion();
$ARR_TIPOS_GESTION      = $obj_tipo_gestion->obtenerTiposGestion();
$ARR_CANTIDAD_DATOS     = count($ARR_TIPOS_GESTION);

?>
<html>
<head>
<title>Tipo de Gestión</title>
</head>
<body>
<h1>Tipo de Gestión</h1>
<hr>

<table border="1">
<tr>
    <td>ID</td>
    <td>Nombre Tipo de Gestión</td>
    <td>Opciones</td>
</tr>
<?php 
$i=0;
while($i < $ARR_CANTIDAD_DATOS){
?>
<tr>
    <td><?php echo $ARR_TIPOS_GESTION[$i][0]  ;?></td>
    <td><?php echo utf8_encode($ARR_TIPOS_GESTION[$i][1])  ;?></td>
    <td>
    <a href="eliminar-dml.php?id_tipo=<?php echo $ARR_TIPOS_GESTION[$i][0]  ;?>">Eliminar</a>
     <a href="actualizar.php?id_tipo=<?php echo $ARR_TIPOS_GESTION[$i][0]  ;?>&nombre=<?php echo $ARR_TIPOS_GESTION[$i][1]  ;?>">Actualizar</a>
    </td>

</tr>
<?php
$i++;
 };?>


</table>

</body>
</html>