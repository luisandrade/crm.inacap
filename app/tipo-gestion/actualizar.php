<?php 
ini_set("display_errors",1);
$var_id_tipo_gestion        = $_GET["id_tipo"];
$var_nombre_tipo_gestion    = $_GET["nombre"];

?>
<html>
<head>
<title>Actualizar</title>
</head>

<body>
<h1>Actualizar Tipo</h1>
<hr>
<form name="frm_actualizar" action="actualizar-dml.php" method="post">
<!-- Campo oculto para almacenar el ID del tipo de gestión-->
<input type="hidden" name="hdn_id_tipo_gestion" value="<?php echo $var_id_tipo_gestion;?>">
<label>Nombre Tipo Gestión</label>
<input type="text" name="txt_nombre_tipo_gestion" value="<?php echo $var_nombre_tipo_gestion; ?>">
<input type="submit" value="Actualizar">
</form>
</body>

</html>