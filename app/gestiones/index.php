<?php
        session_start();
        ini_set("display_errors",1);
        include("../../clases/gestion.class.php");
            $obj_gestion        = new gestion();    
            $ARR_GESTION        =$obj_gestion->obtenerGestion();
            $ARR_CANTIDAD_DATOS =count($ARR_GESTION);

?>

<html>
        <head>
                <script src="../../js/jquery-3.2.1.min.js"></script>
                <script src="../../semantic/semantic.min.js"></script>
                <link rel="stylesheet" type="text/css" href="../../semantic/semantic.min.css">
                <link rel="stylesheet" type="text/css" href="../../css/estilos.css">
                <title>Lista de Gestiones</title>
        </head>
    <body>

    <?php include("../../plantillas/encabezado.inc.php");?>
                    <p></p>
                    <p></p>


                    <div class="ui grid centered">
                        <div class="ui segment">
                            <h3 class="ui top attached header">Lista Gestiones</h3>
                                    <table class="ui celled very compact table" class="center aligned">
                                        <thead>
                                            <tr>
                                                <th class="center aligned">ID</th>
                                                <th class="center aligned">RUT CLIENTE</th>
                                                <th class="center aligned">RUT USUARIO</th>
                                                <th class="center aligned">RESULTADO GESTION</th>
                                                <th class="center aligned">TIPO GESTION</th>
                                                <th class="center aligned">COMENTARIOS</th>
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
                                                <td><?php echo $ARR_GESTION[$i][0];?></td>
                                                <td><?php echo $ARR_GESTION[$i][1];?></td>
                                                <td><?php echo $ARR_GESTION[$i][2];?></td>
                                                <td><?php echo $ARR_GESTION[$i][3];?></td>
                                                <td><?php echo $ARR_GESTION[$i][4];?></td>
                                                <td><?php echo $ARR_GESTION[$i][5];?></td>
                                                <td><?php echo $ARR_GESTION[$i][6];?></td>
                                                <td><button class="ui red submit button" type="button" id="test"><font color="FFFFFF">Eliminar</font></a></button>
                                                <button class="ui blue submit button"><a  href="actualizar.php?id_tipo=<?php echo $ARR_GESTION[$i][0] ;?>&rut_cliente=<?php echo $ARR_GESTION[$i][1]  ;?>&rut_usuario=<?php echo $ARR_GESTION[$i][2]  ;?>&resultado_gestion=<?php echo $ARR_GESTION[$i][3]  ;?>&tipo_gestion=<?php echo $ARR_GESTION[$i][4]  ;?>&comentarios=<?php echo $ARR_GESTION[$i][5]  ;?>"><font color="FFFFFF">Actualizar</font></a></button></td>
                                                    <?php
                                                        $i++;
                                                    };?>
                                            </tr>
    
                                        </tbody>
                                     </table>
                                        <hr>           
                                        
                                        <button class="ui button blue create_btn" type="button"><a href="agregar.php"><font color="FFFFFF">  Agregar Gestion</font></a></button>
                                                                              
                                               
                                                <div class="ui basic modal test">
                                                    <div class="ui icon header">
                                                        <i class="archive icon"></i>
                                                        ¿ Esta usted seguro que desea eliminar la gestion ?
                                                    </div>
                                                    <div class="content">
                                                        <p>Your inbox is getting full, would you like us to enable automatic archiving of old messages?</p>
                                                    </div>
                                                    <div class="actions">
                                                        <div class="ui red basic cancel inverted button">
                                                        <i class="remove icon"></i>
                                                        No
                                                        </div>
                                                        <div class="ui green ok inverted button">
                                                        <i class="checkmark icon"></i>
                                                        
                                                    
                                            
                                                                                                                         
                                                    <a href="eliminar-dml.php?id_tipo=<?php echo $ARR_GESTION[$i][0];?>">SI</a>
                                               
                                                        
                                                    </div>
                                                    </div>
                                            </div>
                                     

                                    
  
  
                        
    </body>

    <script>
$(function(){
	$("#test").click(function(){
		$(".test").modal('show');
	});
	$(".test").modal({
		closable: true
	});
});
</script>
</html>


