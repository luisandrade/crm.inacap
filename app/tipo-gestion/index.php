<?php
ini_set("display_errors",1);
include("../../clases/gestion.class.php");
$obj_tipos_gestion              = new tipogestion();
$ARR_TIPOS_GESTION        =$obj_tipos_gestion->obtenerTiposGestion();
echo $ARR_CANTIDAD_DATOS  =count($ARR_TIPOS_GESTION);

?>
<html>
<head>
<script src="../../js/jquery-3.2.1.min.js"></script>
<script src="../../semantic/semantic.min.js"></script>
<link rel="stylesheet" type="text/css" href="../../semantic/semantic.min.css">
<title>Tipo Gestion</title>
</head>
<body>
<h1>Tipo Gestion</h1>
<hr>

<table border="1">
<tr>
    <td>ID </td>
    <td>Nombre tipo gestion</td>
    <td>Opciones</td>
</tr>

</table>


<?php
$i=0;
while($i<$ARR_CANTIDAD_DATOS){


?>
<tr>
    <td> <?php echo $ARR_TIPOS_GESTION[$i][0];?></td>
    <td> <?php echo utf8_decode($ARR_TIPOS_GESTION[$i][1]);?></td>

<td><a button class="ui negative basic button" href="eliminar-dml.php?id_tipo=<?php echo $ARR_TIPOS_GESTION[$i][0];?>"> Eliminar</a></td>

</tr>

<?php
$i++;
};?>




</table>
</body>
</html>

<a href="agregar.php">Agregar gestion</a>