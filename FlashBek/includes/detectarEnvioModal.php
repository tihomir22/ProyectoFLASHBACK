<?php  

   //Este codigo es usa para que el modal de la fase 2 salga solo una vez y luego a peticio del usuario
    include_once 'includes/validarModal.php';
    $resultadoPerfil=$mysqli->query("SELECT modal FROM perfil_usuario WHERE idUsuario='$idUsuario'");
    $perfil_usuario_obj=$resultadoPerfil->fetch_assoc();
    $mira=$perfil_usuario_obj['modal'];

    if(isset($_POST['enviarModal'])){
        $mysqli->query("UPDATE perfil_usuario SET modal='1' WHERE idUsuario='$idUsuario'" );

        include_once 'includes/comproModal1.php';

        $mysqli->query("UPDATE perfil_usuario SET libros_leidos='$cuantosLibros', gusta_escribir='$opinionEscritura',definicion_chkbox='$resultadoArray',estudios_chkbox='$resultadoArray2',lugar_estudio='$lugarEstudio',textArea_sobreti='$descripcion' WHERE idUsuario='$idUsuario'");

        $busquedaDuplica=$mysqli->query("SELECT * FROM perfil_usuario WHERE idUsuario='$idUsuario'");
        $perfil_usuario=$busquedaDuplica->fetch_assoc();
        $mira=$perfil_usuario['modal'];
        
        $_SESSION['libros_leidos']=$perfil_usuario['libros_leidos'];
        $_SESSION['gusta_escribir']=$perfil_usuario['gusta_escribir'];
        $_SESSION['definicion_chkbox']=$perfil_usuario['definicion_chkbox'];
        $_SESSION['estudios_chkbox']=$perfil_usuario['estudios_chkbox'];
        $_SESSION['lugar_estudio']=$perfil_usuario['lugar_estudio'];
        $_SESSION['textArea_sobreti']=$perfil_usuario['textArea_sobreti'];


    }else{

        $_SESSION['libros_leidos']=$perfil_usuario['libros_leidos'];
        $_SESSION['gusta_escribir']=$perfil_usuario['gusta_escribir'];
        $_SESSION['definicion_chkbox']=$perfil_usuario['definicion_chkbox'];
        $_SESSION['estudios_chkbox']=$perfil_usuario['estudios_chkbox'];
        $_SESSION['lugar_estudio']=$perfil_usuario['lugar_estudio'];
        $_SESSION['textArea_sobreti']=$perfil_usuario['textArea_sobreti'];

    }
    if($mira=='0'){
        include 'includes/cargarModal.js';
            //include 'includes/validarModal.php';
    }

    
?>