<?php
//Verificamos al valor de la variable ses_validado

if(!isset($_SESSION["ses_validado"])){

    Header("Location:http://192.168.91.129/crm");    
}

?>

<html>
<head>
        <script src="../../js/jquery-3.2.1.min.js"></script>
        <script src="../../js/load_content.js"></script>
        <script src="../../semantic/semantic.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../../semantic/semantic.min.css">
        <link rel="stylesheet" type="text/css" href="../../css/estilos.css">
        <title>Agregar gestion</title>
        
</head>
<body>

<div class="ui top fixed menu">
        <div class="item">
        
            <img src="/crm/img/inacap.png">
        </div>
            <a class="item" href="/crm/app/crm.php">Home</a>
            <a class="item" href="/crm/app/gestiones/index.php">Gestiones</a>
            <a class="item" href="/crm/app/clientes/index.php">Clientes</a>
            <div class="right menu">
            <a class="item"><div id="ctn_nombre_usuario">Bienvenido <?php echo $_SESSION["ses_nombres_usuario"];?></div></a>
        
            <a class="item" href="/crm/logout.php" >Logout</a>
                             
          </div>

  </div>

</body>
  </html>