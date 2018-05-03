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
	while ($row = mysqli_fetch_array($resultadoPubli)) {
		$letraInicial=$row['titulo'][0];
		$colorAleatorio1=rand(1,255);
		$colorAleatorio2=rand(1,255);
		$colorAleatorio3=rand(1,255);
		$rgb='rgb('.$colorAleatorio1.','.$colorAleatorio2.','.$colorAleatorio3.')';
		$resTipoPubli="null";
		if($row['tipo']!=null){
			if($row['tipo']==1){
				$resTipoPubli="Libro";
			}elseif ($row['tipo']==2) {
				$resTipoPubli="Capitulo";
			}elseif ($row['tipo']==3) {
				$resTipoPubli="Blog";
			}else{
				$resTipoPubli="Opinion";
			}

		}
		
		$i++;
		echo '<div class="row">';
		echo '<div class="col-md-1" style="background-color:'.$rgb.';text-align:center;font-size:30px;border-radius:50%;margin-left:3%;margin-top:1%;color:white;">'.$letraInicial.'</div>';
		echo '<div class="col-md-10"><h5 style="margin-bottom:4px;padding-left:2px;">'.$row['titulo'].'</h5><span class="badge badge-primary">'.$resTipoPubli.'</span></div>';
		echo '</div>';
		


	}
}








 ?>