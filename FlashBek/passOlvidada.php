<?php

session_start();
$_SESSION['message'] = 'Haga click en <strong>reset</strong> para reiniciar!';
$mysqli = new mysqli("localhost", "root", "", "registroflashback");
//Comprobamos que el metodo sea de tipo post
if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {   
    $email = $mysqli->escape_string($_POST['email']);
    $result = $mysqli->query("SELECT * FROM usuarios WHERE email='$email'");

    if($result->num_rows==0){
    	$_SESSION['message']="El usuario no existe por lo que no se puede reiniciar la contraseña";
    }else{ //El usuario existe porque num_rows > 0

    	 $usuario = $result->fetch_assoc(); // $user becomes array with user data

    	 $email = $usuario['email'];
    	 $hash = $usuario['password'];
    	 $username = $usuario['username'];

        // Session message to display on success.php
    	 $_SESSION['message'] = "<p>Porfavor compruebe su email <span>$email</span>"
    	 . " para un link de confirmacion sobre su reinicio de contraseña!</p>";

        // Send registration confirmation link (reset.php)
    	 $para      = $email;
    	 $asunto = 'Reinicio de contraseña en Flashback';
    	 $mensaje = '
    	 Hola '.$username.',

    	 Usted ha solicitado un reinicio de su contraseña!

    	 Su contraseña es'.$usuario['password'].'Recomendamos la discrecion

    	 Sin más, le deseamos un buen dia

    	 El equipo de FLASHBACK.';

    	 mail($para, $asunto, $mensaje);
    	
    	 header("location: passOlvidada.php");

    }

}



?>


<!DOCTYPE html>
<html>
<head>
  <title>Reset Your Password</title>

</head>

<body>
    
  <div class="form">

    <h1>Reset Your Password</h1>

    <form action="passOlvidada.php" method="post">
     <div class="field-wrap">
      <label>
        Email Address<span class="req">*</span>
      </label>
      <input type="email"required autocomplete="off" name="email"/>
    </div>
    <p><?= $_SESSION['message']?></p>
    <button class="button button-block"/>Reset</button>
    </form>
  </div>
          
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/index.js"></script>
</body>

</html>