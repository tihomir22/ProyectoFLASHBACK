
<?php
	//Comprobamos de que el metodo de envio es post

$usuariotmp=$_SESSION['username'];
$resultado=$mysqli->query("SELECT * FROM usuarios WHERE username='$usuariotmp'");
$user = $resultado->fetch_assoc();
$idUsuario=$user['idUsuarios'];

$busquedaDuplica=$mysqli->query("SELECT * FROM perfil_usuario WHERE idUsuario='$idUsuario'");
$perfil_usuario=$busquedaDuplica->fetch_assoc();
$mira=$perfil_usuario['modal'];
//echo $mira;


if($busquedaDuplica->num_rows==0){ //comprobamos si es la primera vez que se insertan datos
	//Si es asi los datos se insertan

	include_once 'includes/comproModal1.php';

	$sql = "INSERT INTO perfil_usuario (libros_leidos, gusta_escribir, definicion_chkbox, estudios_chkbox, lugar_estudio, textArea_sobreti, idUsuario) "
	. "VALUES ('$cuantosLibros', '$opinionEscritura', '$resultadoArray', '$resultadoArray2', '$lugarEstudio', '$descripcion','$idUsuario')";
	if ($mysqli->query($sql) === true){
		//echo "Fue añadido exitosamente";
	}
}

$busquedaDuplica=$mysqli->query("SELECT * FROM perfil_usuario WHERE idUsuario='$idUsuario'");
$perfil_usuario=$busquedaDuplica->fetch_assoc();
$mira=$perfil_usuario['modal'];

$_SESSION['libros_leidos']=$perfil_usuario['libros_leidos'];
$_SESSION['gusta_escribir']=$perfil_usuario['gusta_escribir'];
$_SESSION['definicion_chkbox']=$perfil_usuario['definicion_chkbox'];
$_SESSION['estudios_chkbox']=$perfil_usuario['estudios_chkbox'];
$_SESSION['lugar_estudio']=$perfil_usuario['lugar_estudio'];
$_SESSION['textArea_sobreti']=$perfil_usuario['textArea_sobreti'];





?>