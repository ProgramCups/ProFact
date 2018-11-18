<!doctype html>
<html lang="es">
    <head>
        <link rel="icon" type="image/png" href="./assets/img/logo.png" />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
         <!--  comienzan los archivos tipo JavaScript!-->
        <script src="./assets/js/jquery-3.2.1.min.js"></script>
        <script src="./assets/alertifyjs/alertify.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
        <!-- Finaliza archivos JS !-->
        <!-- LLamado de librerias CSS !-->
        <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="./assets/alertifyjs/css/alertify.min.css">
        <link rel="stylesheet" href="./assets/alertifyjs/css/themes/bootstrap.min.css">
       <!-- Termina el css!-->
        <title>Profact</title>
        <link rel="shortcut icon" type="image/x-icon" href="./assets/img/icono.png">
        
    </head>
    <body style="background-image:url('./assets/img/login-background.jpg')">
           <?php 
            if(isset($_GET['status'])){
                echo "<script>alertify
  .alert('Error al Iniciar Sesion','La contraseña y el usuario no coinciden en la base de datos, por favor revise los datos e intente de nuevo.');
  </script>";
            }
            ?>
        <div class="d-none d-sm-block" style="padding-top:220px;"> 
        </div><!-- Relleno de la parte superior para centrar el menu, cuando la pantalla tiene un tamaño "SM"!-->
        <div class= "d-sm-block d-md-none" style="padding-top:20px;"><!-- Relleno de la parte superior para centrar el menu, cuando la pantalla tiene un tamaño de "SM" a "MD"!-->
        </div>
        <center>
            <div class="col-md-5 col-lg-3 col-sm-5 ">
            <!-- Formulario de Inicio de sesion!-->
            <form class="form-signin" method="POST" action="./validate.php">
                   <!-- Aqui comienza el logo y el nombre del programa!-->
                    <img src="./assets/img/logo.png" style="max-width:100px;max-height:auto;">
                    <h1 class="mb-3 font-weight-normal text-light">Profact</h1>
                    <!-- Aqui terminan el logo y y el nombre del programa!-->
                    <br>
                    <label for="inputEmail" class="sr-only">Usuario</label>
                    <input type="text" id="usuario" name="usuario" class="form-control" placeholder="Usuario" required autofocus>
                    <label for="inputPassword" class="sr-only">Clave</label>
                    <br>
                    <input type="password" id="clave" name="clave" class="form-control" placeholder="Contraseña" required>
                    <br>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar Sesion</button>

                    <p class="mt-5 mb-3 text-white">&copy;Anonimo</p>
            </form>
            <!-- Final del formulario para iniciar sesion !-->
            </div>
        </center>
    </body>
</html>