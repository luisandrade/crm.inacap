<?php
ini_set("display_errors",1);
//incluimos la clase tipo gestion
//Activamos la sesion 
session_start();
include("../../clases/tipoGestion.class.php");
include("../../clases/resultadoGestion.class.php");
include("../../clases/cliente.class.php");
//Creamos un objeto de la clase
$obj_tipo_gestion  = new tipoGestion();
$obj_resultado_gestion  = new ResultadoGestion();
$obj_clientes  = new cliente();

//mediante el objeto invocamos un metodo para invocar todo los tipos de gestion
$ARR_TIPOS_GESTION        = $obj_tipo_gestion->obtenerTiposGestion(); 
$ARR_RESULTADO_GESTION    = $obj_resultado_gestion->obtenerResultadoGestion();
//$ARR_CLIENTES             = $obj_clientes->obtenerClientes(0); 
//contamos cuantas filas tiene el arreglo
$cantidad_datos             = count($ARR_TIPOS_GESTION);
$cantidad_datos_resultado   = count($ARR_RESULTADO_GESTION);
//$cantidad_clientes          = count($ARR_CLIENTES);
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

  <?php include("../../plantillas/encabezado.inc.php");?>

  
    <p></p>
    <p></p>
          <form name ="frm_agregar_gestion" action="agregar-dml.php" method="post" class="ui form">
              <div class="ui grid centered">
                    <div class="ui segment">
                          <h3 class="ui top attached header">Agregar Gestion</h3>
                            <table class="ui collapsing table" class="center aligned">
                                <thead>
                                    <tr>
                                        <th>RUT CLIENTE</th>         
                                        <th>RESULTADO GESTION</th>               
                                        <th>TIPO GESTION</th>       
                                        <th >COMENTARIOS</th>
                                        <th >OPCIONES</th>
                                    </tr>
                                </thead>
                                </tbody>
                                    <tr>
                                        <td>
                                        <div class="field"><div class="ui mini input"><input type="text" name="rut_cliente" id="txt_rut_cliente"  onblur="buscarNombre();"></div>
                                       <div id='cnt_nombre_cliente'></div>
                                        </td>
                                        
                                        <td>
                                        <select name="sel_resultado_gestion">
                                        <?php
                                        $i=0;
                                        while($i < $cantidad_datos_resultado){
                                        ?>
                                          <option value="<?php echo $ARR_RESULTADO_GESTION[$i][0];?>"><?php echo $ARR_RESULTADO_GESTION[$i][1];?></option>
                                          <?php
                                          $i++;
                                        }?>                        
                                       </select>
                                       </div></td>
                                        <td>
                                       
                                        <select name="sel_tipo_gestion">
                                        <?php
                                        $i=0;
                                        while($i < $cantidad_datos){
                                        ?>
                                          <option value="<?php echo $ARR_TIPOS_GESTION[$i][0];?>"><?php echo $ARR_TIPOS_GESTION[$i][1];?></option>
                                          <?php
                                          $i++;
                                        }?>                        
                                       </select>
                                       </div></td>
                                        <td><div class="field"><div class="ui form">
                                        <div class="field"><textarea name="txt_comentarios" rows="2"></textarea></div></div></td>
                                        <td><button class="ui blue submit button">Guardar Gestión</button><div class="ui error message"></div></td>
                    </div>
              </div>
                                    </tr>
                             </table>
            </form>
      <script language="javascript">
          $('.ui.form')
            .form({
                on: 'blur',
                  fields: {
                            txt_rut_cliente: {
                            identifier  : 'txt_rut_cliente',
                            rules: [
                          {
                            type   : 'empty',
                            prompt : 'Debe ingresar un Rut'
                          }
                        ]
                    },
                  txt_tipo_gestion: {
                          identifier  : 'txt_tipo_gestion',
                          rules: [
                      {
                          type   : 'empty',
                          prompt : 'Debe ingresar tipo de gestion'
                      }
                    ]
                  },
                  txt_resultado_gestion: {
                          identifier  : 'txt_resultado_gestion',
                         rules: [
                 {
                         type   : 'empty',
                        prompt : 'Debe ingresar tipo de resultado gestion'
                  }
                ]
              }
            }
          })
        ;

      </script>
  </body>
</html>