<!--<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags 
        <title>Bootstrap 101 Template</title>

         Bootstrap 
        <link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet">

         HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries 
         WARNING: Respond.js doesn't work if you view the page via file:// 
        [if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <?php echo form_open('Usuario/login'); ?>
                    <div class="form-group">
                        <label for="username">Usuario:</label>    
                        <input type="text" class="form-control" name="username"><br>
                    </div>
                    <div class="input-group">
                        <samp class="input-group-addon glyphicon glyphicon-lock"></samp>
                        <input type="text" name="password" placeholder="contraseña">
                    </div>
                    <button type="submit" class="btn btn-info" name="btnEnviar"><span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span> Iniciar Sesión</button>
                    </form>
                </div>
                <div class="col-xs-12 col-md-6">
                    Hola mundo
                </div>
            </div>
        </div>

         jQuery (necessary for Bootstrap's JavaScript plugins) 
        <script src="<?php echo base_url(); ?>js/jquery-2.1.4.js"></script>
         Include all compiled plugins (below), or include individual files as needed 
        <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
    </body>
</html>-->
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset="UTF-8" /> 
    <title>
        HTML Document Structure
    </title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style2.css" />
</head>
<body>

<?php echo form_open('Usuario/login'); ?>
  <h1>BIENVENIDO</h1>
  <div class="inset">
  <p>
    <label for="username">Administrador</label>
    <input type="text" name="username" id="username">
  </p>
  <p>
    <label for="password">Contraseña</label>
    <input type="password" name="password" id="password">
  </p>

  </div>
  <p class="p-container">
    <input type="submit" name="go" id="go" value="Login">
    <a href="<?php echo base_url();?>index.php/controlador/index">Regresar</a>
  </p>

<?php echo form_close(); ?>


</body>
</html>