<?php
        session_start();
        ini_set("display_errors",1);
        include("../../clases/cliente.class.php"); // se incluye cliente.class
            // se crea el objeto de la clase cliente
            $obj_cliente        = new cliente();
        // se pasa la fucion obtenerClientes al arreglo que recorre la tabla
            $ARR_CLIENTES        =$obj_cliente->mostrarClientes(); 
            // realiza un conteo de el arreglo cientes y lo pasa a ARR_CANTIDAD_DATOS
            $ARR_CANTIDAD_DATOS =count($ARR_CLIENTES);
?>

<html>
    <head>
    <!-- se cargan los archivos necesarios de semnatic y estilo para el proyecto-->
        <script src="../../js/jquery-3.2.1.min.js"></script>
        <script src="../../semantic/semantic.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../../semantic/semantic.min.css">
        <link rel="stylesheet" type="text/css" href="../../css/estilos.css">
     <title>Lista de Clientes</title>
    </head>
    <body>
    <!-- se crea el menu superior con las redireccion y se muestra la sesion del usuario-->
    <?php include("../../plantillas/encabezado.inc.php");?>

            <p></p>
            <p></p>

<div class="ui grid centered">
    <div class="ui segment">
        <h3 class="ui top attached header">
                    Lista Clientes
        </h3>
        <!-- se crea la tabla con los datos con los campos de la tabla-->
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
    <!-- el arreglo que recorre los registro  -->
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
            <!-- boton eliminar que se le pasan los datos desde el arreglo que recorre los atributos para actualizar-->
            <!-- boton de eliminar que borra los registros utilizando el id de la tupla seleccionada-->
            <td><button class="ui red submit button" id="eliminar"><a  href="eliminar-dml.php?id_tipo=<?php echo $ARR_CLIENTES[$i][0];?>"><font color="FFFFFF">Eliminar</font></a></button>
            <button class="ui blue submit button"><a  href="actualizar.php?rut_cliente=<?php echo $ARR_CLIENTES[$i][0] ;?>&nombre_cliente=<?php echo $ARR_CLIENTES[$i][1]  ;?>&apellido_cliente=<?php echo $ARR_CLIENTES[$i][2]  ;?>&email_cliente=<?php echo $ARR_CLIENTES[$i][3]  ;?>&celular_cliente=<?php echo $ARR_CLIENTES[$i][4]  ;?>&fono_fijo=<?php echo $ARR_CLIENTES[$i][5]  ;?>&fecha_actualizacion=<?php echo $ARR_CLIENTES[$i][6]  ;?>"><font color="FFFFFF">Actualizar</font></a></button></td>
        
            <?php
            $i++;
            };?>
        </tr>
    
    </tbody>
            </table>
                <hr>
                <!-- boton para agregar al cliente con los datos incorporados previamente-->
                    <div class="ui center floated small primary labeled icon button">
                            <i class="user icon"></i> 
                                <a href="agregarCliente.php"><font color="FFFFFF">Agregar Cliente</font></a>
                    </div>
  
  
                    </div>
    </body>
</html>


