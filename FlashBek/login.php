<?php

session_start();
$_SESSION['message'] = 'Haga click en <strong>Registrarse</strong> para empezar!';
$mysqli = new mysqli("localhost", "root", "", "registroflashback");
require 'validate.php';


?>


<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Poet login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style/loginStyle.css" class="style">
    <link rel=icon href="style/iconos/IconPack/6464/gem.png">
</head>
<body>
    <a id=flotador target="_blank" href=https://www.behance.net/unknownbeing>Wallpaper por Nicolas Monin-Baroille
    </a>
    <div id=container-fluid>
        <div class=row>


            <div class="col-md-9 col-sm-6 col-xs-0 " id=bait>
            </div>
            <!--LOGIN-->
            <div class="col-md-3 col-sm-6 col-xs-12" id=login>

                <h1>Poet Platform</h1>

                <form method="post" action="login.php" nctype="multipart/form-data" autocomplete="off" onsubmit="return comprobarLogin()">
                    <label>Introduzca sus datos para acceder a Poet!</label><br><br>
                    <div class="form-group">
                        <label for="nombre">Nombre de usuario__</label><i class="fa fa-users"></i>
                        <input type="text" name=loginUs class="form-control" id="nombre" placeholder="Introduzca su nombre de usuario" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password__</label><i class="fa fa-key"></i>
                        <input type="password" name=passUs class="form-control" id="password" placeholder="Introduzca su contraseña" required>
                    </div>
                    <div class="form-group">
                        <label for="checkRecuerda">Recuerdame</label>
                        <input type="checkbox" name="checkRecuerdaN" id="checkRecuerda">
                    </div>
                    <button type="submit" class="btn btn-primary" id="iniciar" name="inicio">Iniciar sesion</button>
                    <button  type="button" id=registro class="btn btn-outline-primary">Registrarse</button><br><br>
                   

                    <a href=passOlvidada.php target="_blank">No puede acceder a su cuenta?</a>
                    <div id=alertInfo class="alert alert-warning" style="margin-right:30px;margin-top:10px;"><?= $_SESSION['message'] ?></div>
                </form>
                <!--REGISTRO PARTE1-->
                <form method="post"  class="md-form" action="login.php"  style="display:none" id=form2 enctype="multipart/form-data" autocomplete="off">
                    <label>Registro en la plataforma</label><br><br>
                    <div class="stepwizard" id=stepwizard1 >
                        <div class="stepwizard-row">
                            <div class="stepwizard-step">
                                <button type="button" class="btn btn-primary btn-circle">1</button>
                                <p>Basic</p>
                            </div>
                            <div class="stepwizard-step">
                                <button type="button" class="btn btn-default btn-circle" disabled="disabled">2</button>
                                <p>Belleza</p>
                            </div>
                            <div class="stepwizard-step">
                                <button type="button" class="btn btn-default btn-circle" disabled="disabled">3</button>
                                <p>Utopia</p>
                            </div> 
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="nombre">Nombre de usuario__</label><i class="fa fa-users"></i>
                        <input type="text" class="form-control" id="nombre2" placeholder="Introduzca su nombre de usuario" name=username required>
                    </div>
                    <div class="form-group">
                        <label for="password2">Contraseña__</label><i class="fa fa-key"></i>
                        <input type="password" name="password"  autocomplete="new-password" class="form-control" id="password2" placeholder="Introduzca su contraseña" required>
                    </div>
                    <div class="form-group">
                        <label for="password3">Repita Contraseña__</label><i class="fa fa-key"></i>
                        <input type="password" name="confirmpassword" autocomplete="new-password" class="form-control" id="password3" placeholder="Introduzca su contraseña" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Correo electronico__</label><i class="fa fa-envelope-o"></i>
                        <input type="email" class="form-control" id="email2" placeholder="Introduzca su correo electronico" name="email" required>
                    </div>
                    <div class="col-md-12">
                        <label class="btn btn-danger btn-responsive">
                            <img src="style/iconos/attachment.png" width=25px height=25px>
                            Adjuntar avatar <input type="file" id=imagenF name="avatar" accept="*/image" required style="display:none;">
                        </label>
                        <label class="btn btn-danger btn-responsive" style="padding-bottom: 7px;margin-left: 5px;">Registrarse
                         <i class="fa fa-diamond" style="font-size: 19px;margin-left: 5px;"></i>
                         <input type="submit" value="Registrarse" name="register" id=botonregistro class="btn btn-outline-primary" style="float:right;display: none;">
                     </label>
                 </div>
             </form>

             <label id=abajo>Asegurese de estar accediendo a nuestra pagina web, poet.com , de no ser asi puede que este entrenando en un site de phishing y su cuenta puede correr peligro. Si es asi no dude en reportarlo y contactar con nosotros en el siguiente email: <a>flashbackcompany@gmail.com</a></label>
         </div>
     </div>
 </div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>    </body>

 <footer>
    <script src="js/comprobarForm.js"></script>



</footer>
</html>