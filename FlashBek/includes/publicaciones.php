<?php 

$usuariotmp=$_SESSION['username'];
$resultado=$mysqli->query("SELECT * FROM usuarios WHERE username='$usuariotmp'");
$user = $resultado->fetch_assoc();
$idUsuario=$user['idUsuarios'];

$resultadoPubli=$mysqli->query("SELECT * FROM publicaciones WHERE autor='$idUsuario'");
if($resultadoPubli->num_rows==0){
	echo '<h1 style="position:absolute;left:32%;margin-top:2%;">Vaya! <i style="opacity:0.7;" class="ion-sad-outline"></i></h1>';
	echo '<h4 style="position:absolute;left:2%;font-size:22px;margin-top:15%;">Parece que todavia no tienes ninguna publicacion!</h4>';
	echo '<button type="button" class="btn btn-outline-dark" style="position:absolute;top:82%;left:32%;margin-top:2%;">Te lo ponemos facil</button>';
	echo '<img src="style/skulls.png" style="width:100%;height:220px;" class="img-fluid" alt="Responsive image">';

}else{
	echo 'algo tienes we';
}








 ?>