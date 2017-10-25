<html>
<head>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="semantic/semantic.min.js"></script>
<link rel="stylesheet" type="text/css" href="semantic/semantic.min.css">
<link rel="stylesheet" type="text/css" href="css/estilos.css">
<title>LOGIN</title>
</head>
<body>

  <form name="login" action="login.php" method="post" class="ui form">

  <div class="ui grid centered">
  <div class="ui blue compact segment">

  <h3 class="ui block header">
    Acceso Usuario <i class="user icon"></i>
  </h3>

  <div class="field"><label>USUARIO</label>
  <div class="field"><div class="ui left icon input">
  <input type="text" name="email" placeholder="Ingrese usuario" id="email"><i class="user icon"></i></div>
  <br>

  <div class="field"><label>CLAVE</label>
  <div class="field"><div class="ui left icon input">
  <input type="password" name="clave" placeholder="Ingrese clave" id="clave"><i class="lock icon"></i></div>
  <br><br>
  </div>


<button class="ui blue submit button">Ingresar</button>
<div class="ui error message"></div>

</div>
</script>
</form>

<script language="javascript">
$('.ui.form')
  .form({
    on: 'blur',
    fields: {
      email: {
        identifier  : 'email',
        rules: [
          {
            type   : 'empty',
            prompt : 'Debe ingresar un email'
          }
        ]
      },
      clave: {
        identifier  : 'clave',
        rules: [
          {
            type   : 'empty',
            prompt : 'Debe ingresar una clave'
          }
        ]
      }
    }
  })
;

</script>

</body>

</html>