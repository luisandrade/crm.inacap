
<html>
<head>
<script src="../js/jquery-3.2.1.min.js"></script>
<script src="../semantic/semantic.min.js"></script>
<link rel="stylesheet" type="text/css" href="../semantic/semantic.min.css">
<link rel="stylesheet" type="text/css" href="../css/estilos.css">
</head>
<body>



<div class="ui top fixed menu">
  <div class="item">
    <img src="../img/inacap.png">
  </div>
  <a href="crm.php" class="item">Home</a>
  <a href="../app/gestiones/index.php" class="item">Gestiones</a>
  <a href="../app/clientes/index.php" class="item">Clientes</a>
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
