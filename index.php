<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Formulario PHP</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>
    <body>
      <div class="container">
      <h1>Enviar correo</h1>
        <div class="row">
          <div class="col-md-8">
          <form role="form" class="form-horizontal" action="enviar.php" method="POST">
              <div class="form-group">
                <label for="nombre" class="control-label col-md-4">Nombre</label>
                  <div class="col-md-8">
                    <input type="text" name="nombre" class="form-control">
                  </div>
              </div>
              <div class="form-group">
                <label for="apellidos" class="control-label col-md-4">Apellidos</label>
                  <div class="col-md-8">
                    <input type="text" name="apellidos" class="form-control">
                  </div>
              </div>
              <div class="form-group">
                <label for="sexo" class="control-label col-md-4">Sexo</label>
                  <div class="col-md-8">
                    <div class="radio">
                      <label>
                        <input type="radio" name="sexo" value="M" checked>
                        Masculino
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="sexo" value="F">
                        Femenino
                      </label>
                    </div>
                  </div>
              </div>
              <div class="form-group">
                <label for="usuario" class="control-label col-md-4">Nombre de usuario</label>
                  <div class="col-md-8">
                    <input type="text" name="usuario" class="form-control">
                  </div>
              </div>
              <div class="form-group">
                <label for="correo" class="control-label col-md-4">Correo</label>
                  <div class="col-md-8">
                    <input type="email" name="correo" class="form-control" required>
                  </div>
              </div>
              <div class="form-group">
                <label for="contrasena" class="control-label col-md-4">Contraseña</label>
                  <div class="col-md-8">
                    <input type="password" name="contrasena" class="form-control" required>
                  </div>
              </div>
              <div class="form-group">
                <label for="region" class="control-label col-md-4">Region</label>
                <div class="col-md-8">
                <select name="region">
                  <option value="1">I - Tarapacá</option>
                    <option value="2">II - Antofagasta</option>
                    <option value="3">III - Atacama</option>
                    <option value="4">IV - Coquimbo</option>
                    <option value="5">V - Valparaíso</option>
                    <option value="6">VI - O'Higgins</option>
                    <option value="7">VII - Maule</option>
                    <option value="8">VIII - Biobío</option>
                    <option value="9">IX - Araucanía</option>
                    <option value="10">X - Los Lagos</option>
                    <option value="11">XI - Aysén</option>
                    <option value="12">XII - Magallanes</option>
                    <option value="13" selected>RM - Metropolitana de Santiago</option>
                    <option value="14">XIV - Los Ríos</option>
                    <option value="15">XV - Arica y Parinacota</option>  
                </select>
                </div>
              </div>
              <div class="form-group">
                <label for="archivo" class="control-label col-md-4">Agregar una imagen al perfil</label>
                <div class="col-md-8">
                  <input type="file" name="archivo">
                </div>
              </div>
              <div class="form-group">
              <label for="newsletter" class="control-label col-md-4">Newsletter</label>
              <div class="col-md-8">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="newsletter"> Sí, deseo recibir noticias en mi correo mensualmente.
                  </label>
                </div>
              </div>
              </div>
              <div class="form-group">
                <label for="" class="control-label col-md-4">Descripción perfil</label>
                <div class="col-md-8">
                  <textarea name="descripcion" class="form-control" rows="10" placeholder="Escríbenos algo cerca de tí..."></textarea>
                </div>
              </div>
              <div class="form-group">
                  <div class="col-md-8 col-md-offset-4">
                    <button type="reset" class="btn btn-default">Resetear</button>
                    <input type="submit" class="btn btn-default" value="Enviar">
                    <input type="image" src="img/flecha.png" class="pull-right" alt="submit" height="34" width="40">
                  </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="js/bootstrap.min.js"></script>
    </body>
    </html>
