<?php 
//$idUsuario=$perfil_usuario['idUsuario'];
$usuariotmp=$_SESSION['username'];
$resultado=$mysqli->query("SELECT * FROM usuarios WHERE username='$usuariotmp'");
$user = $resultado->fetch_assoc();
include 'includesPeques/obtenerPerfilUsuario.php';

function yaExiste($cadena,$valor){
	
	$arrayCadena=explode(".", $cadena);
	$longitud=count($arrayCadena);
	
	for ($i=0; $i <$longitud ; $i++) { 
		if($arrayCadena[$i]==$valor){
			return true;
		}
	}
	return false;

}

		//Si el usuario se registra consigue el primer logro.
if($perfil_usuario['logrosID']==NULL){
	$sql="UPDATE perfil_usuario SET logrosID='7' WHERE idUsuario=$idUsuario";
	if($mysqli->query($sql)===true){
		$_SESSION['NumLogro']=1;
		$_SESSION['Nombre']="El preludio de una leyenda";
		$_SESSION['DescLogro']="Te has registrado con exito!";
		include 'includes/mostrarPopUpLogro.php';

	}
}
//Si el usuario consigue el nivel 5...
if($user['Nivel']=='5'){
	include 'includesPeques/obtenerPerfilUsuario.php';
	$cadena=$perfil_usuario['logrosID'];
	$yaExiste=yaExiste($cadena,'8');
	if($yaExiste===false){
		$sql="UPDATE perfil_usuario SET logrosID=concat(logrosID,'.8') WHERE idUsuario=$idUsuario";
		if($mysqli->query($sql)===true){
			//echo ' fue añadido';
			$_SESSION['NumLogro']=2;
			$_SESSION['Nombre']="El camino del iniciado";
			$_SESSION['DescLogro']="Llegaste al nivel 5 ! Eres una leyenda!";
			include 'includes/mostrarPopUpLogro.php';
		}
	}
	

}
//Si el usuario completa la segunda fase del registro, el modal
if($perfil_usuario['modal']=='1'){
	include 'includesPeques/obtenerPerfilUsuario.php';
	$cadena=$perfil_usuario['logrosID'];
	$yaExiste=yaExiste($cadena,'9');
	if($yaExiste===false){
		$sql="UPDATE perfil_usuario SET logrosID=concat(logrosID,'.9') WHERE idUsuario=$idUsuario";
		if($mysqli->query($sql)===true){
			//echo ' fue añadido';
			$_SESSION['NumLogro']=3;
			$_SESSION['Nombre']="Salvaguarda";
			$_SESSION['DescLogro']="Completaste el modal de la segunda y tercera parte del registro felicidades!";
			include 'includes/mostrarPopUpLogro.php';
		}
	}

}




?>