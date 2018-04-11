<?php 

$usuariotmp=$_SESSION['username'];
$resultado=$mysqli->query("SELECT * FROM usuarios WHERE username='$usuariotmp'");
$user = $resultado->fetch_assoc();
$idUsuario=$user['idUsuarios'];

$resultadoPubli=$mysqli->query("SELECT * FROM publicaciones WHERE autor='$idUsuario'");
if($resultadoPubli->num_rows==0){
	
	echo '<h1 style="margin:0 auto;max-width:600px;position:absolute;bottom:160px;left:40%;">Vaya! <i style="opacity:0.7;" class="ion-sad-outline"></i></h1>';
	echo '<h4 style="margin:0 auto;max-width:600px;position:absolute;bottom:110px;left:10%;text-align:center;">Parece que todavia no tienes ninguna publicacion!</h4>';
	echo '<button type="button" class="btn btn-outline-dark" style="margin:0 auto;max-width:600px;position:absolute;bottom:60px;left:40%;">Te lo ponemos facil</button>';
	echo '<img src="style/skulls.png" style="width:100%;height:220px;" class="img-fluid" alt="Responsive image">';

}else{
	echo 'algo tienes we';
}








 ?>