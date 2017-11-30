<?php
session_start();
ini_set("display_errors",1);
?>

<html>
        <head>
                <script src="../js/jquery-3.2.1.min.js"></script>
                <script src="../semantic/semantic.min.js"></script>
                <link rel="stylesheet" type="text/css" href="../semantic/semantic.min.css">
                <link rel="stylesheet" type="text/css" href="../css/estilos.css">
        </head>
        <body>
        <?php include("../plantillas/encabezado.inc.php");?>
                                                              <p></p>
                                                              <p></p>

                <div class="ui grid centered">
                        <div class="ui center compact segment">
                                <h3 class="ui top attached header">
                                == Menu principal ==
                                </h3>
                                <div class="ui divider"></div>
                                <div class="ui horizontal segments">
                                        <div class="ui segment">
                                                <p><a href="gestiones/index.php">Ir a gestiones</a></p>
                                        </div>
                                        <div class="ui segment">
                                           <p><a href="clientes/index.php">Ir a clientes</a></p>
                                        </div>
                                </div>
        </body>
</html>
