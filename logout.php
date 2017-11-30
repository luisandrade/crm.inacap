<?php
// habilitamos las sesiones en este archivo
session_start();
unset($_SESSION["ses_validado"]);
header('Location:../crm/index.php');


?>


