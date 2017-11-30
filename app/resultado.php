<?php
ini_set("display_error",1);
//Capturamos la operación
$var_operacion  =    $_GET["op"];
//incluimos archivo resultado.inc.php
include("../plantillas/resultado.inc.php");
//Mostramos el titulo del mensaje
?>
<h2><?php echo $var_titulo?></h2><br>
<a href="<?php echo $var_destino?>"><img src="<?php echo $var_url_imagen?>"></a>
<h4><?php echo $var_mensaje?><h4>
<a href="<?php echo $var_destino?>"><?php echo $var_enlace?></a> 






