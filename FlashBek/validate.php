
<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {

  //comprobamos si el usuario le ha dado login o registro
    if(isset($_POST['inicio'])){
        $usuario=$mysqli->real_escape_string($_POST['loginUs']);
        $pass=md5($_POST['passUs']);

        

        $resultado = $mysqli->query("SELECT * FROM usuarios WHERE username='$usuario'");
        if($resultado->num_rows==0){
            $_SESSION['message']="<strong>El usuario no existe</strong>";
        }else{
            $user = $resultado->fetch_assoc();

            if($user['password'] == $pass){
                $_SESSION['username']=$user['username'];
                $_SESSION['email']=$user['email'];
                $_SESSION['password']=$user['password'];
                $_SESSION['avatar']=$user['avatar'];
                $_SESSION['Nivel']=$user['Nivel'];
                $_SESSION['Rango']=$user['Rango'];



                $_SESSION['message']="Has iniciado sesion correctamente ".$usuario;
                header("location:plataformaN.php");
                

            }
        }


    }else{
        $usuariotmp=$_POST['username'];
        //comprobamos si el usuario existe, viendo si existe un usuario en las columnas mayor de 0
        $resultado=$mysqli->query("SELECT * FROM usuarios WHERE username='$usuariotmp'");
        if($resultado->num_rows>0){
            $_SESSION['message']="El usuario <strong>ya existe</strong>, no puede haber duplicados";

        }else{
        //comparamos si ambas contraseñas son iguales
            if ($_POST['password'] == $_POST['confirmpassword']) {

           //definir variables con valores enviados con el metodo POST
                $username = $mysqli->real_escape_string($_POST['username']);
                $email = $mysqli->real_escape_string($_POST['email']);

            //md5 para encriptar la contraseña
                $password = md5($_POST['password']);

            //lugar donde nuestra imagen estará guardada
                $avatar_path = $mysqli->real_escape_string('images/'.$_FILES['avatar']['name']);

            //asegurarse de que el archivo es imagen
                if (preg_match("!image!",$_FILES['avatar']['type'])) {

                //copiamos el archivo a la carpeta images
                    if (copy($_FILES['avatar']['tmp_name'], $avatar_path)){

                    //introducir valor a las variables de la sesion
                        $_SESSION['username'] = $username;
                        $_SESSION['avatar'] = $avatar_path;
                        $_SESSION['Nivel']='1';
                        $_SESSION['Rango']="Desconocido";

                    //insertar informacion del usuario en la base de datos
                        $sql = "INSERT INTO usuarios (username, email, password, avatar, Nivel, Rango) "
                        . "VALUES ('$username', '$email', '$password', '$avatar_path', '1', 'Desconocido')";

                    //comprobar si fue un exito
                        if ($mysqli->query($sql) === true){
                            $_SESSION['message'] = "Registro exitoso !"
                            . "El usuario $username fue añadido a la base de datos!";
                        //redirigir a la web 
                            header("location: plataformaN.php");
                        }else {
                            $_SESSION['message'] = 'Usuario no pudo ser añadido a la base de datos!';
                        }
                        $mysqli->close();  
                    }else {
                        $_SESSION['message'] = 'La subida del archivo falló!';
                    }
                }else {
                    $_SESSION['message'] = 'Porfavor solo suba JPEG, PNG o otros formas de Imagen!';
                }

            }else {
                $_SESSION['message'] = 'Las contraseñas no coinciden!';
            }
        }

    }
}

?>