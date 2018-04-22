


<!DOCTYPE html>
<html>
<head>
	<title>Forja</title>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/aes.js"></script>
	
	<?php 
	include 'includes/importarBootstrap.html';
	?>
	<link rel="stylesheet" href="style/stylePlatform.css">
	<link rel="stylesheet" href="style/loginStyle2.css" class="style">
	<link rel="stylesheet" type="text/css" href="style/estiloForja.css">
</head>
<body>
	<?php 
	session_start();
	$mysqli = new mysqli("localhost", "root", "", "registroflashback");
	$usuario=$_SESSION['username'];

	$resultado=$mysqli->query("SELECT * FROM usuarios WHERE username='$usuario'");
$user = $resultado->fetch_assoc(); //Tengo el usuario, ahora buscamos el perfil_usuario
$idUsuario=$user['idUsuarios'];


$resultado=$mysqli->query("SELECT * FROM perfil_usuario WHERE idUsuario='$idUsuario'");
$perfil_usuario=$resultado->fetch_assoc();//Tengo el perfil del usuario
$listaIdTitulos=$perfil_usuario['idListaTitulos'];
function esNulo($idUsuario,$mysqli){

	$resultado=$mysqli->query("SELECT * FROM perfil_usuario WHERE idUsuario='$idUsuario'");
	$user = $resultado->fetch_assoc();

	if($user['idListaTitulos']==null){
		return true;
	}else{
		return false;
	}

}
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
function contarTitulos($cadenaTitulos){
	if(strlen($cadenaTitulos)=='1'){
		return 1;
	}else{
		$arrayTitulos=explode(".", $cadenaTitulos);
		$longitud=count($arrayTitulos);
		return $longitud;
	}

}
function imprimirLogroConseguido($idlogro,$mysqli,$listaTitulos){
	$resultado=$mysqli->query("SELECT * FROM rangos WHERE idRangos='$idlogro'");
	$infoTitulo=$resultado->fetch_assoc();
	include "includes/mostrarTituloConseguido.php";
	echo "<script type='text/javascript'> $(window).on('load',function(){ $('#exampleModalVertical').fadeIn(1000).modal('show'); }); </script>";

}

if(isset($_GET['logr'])){
	$texto=$_GET['logr'];
	$arrayLogros=explode(".", $texto);
	$longitud=count($arrayLogros);
	$longitud=$longitud-1;
	$yaExiste=true;
	$esNulo=esNulo($idUsuario,$mysqli,$listaIdTitulos);
	if(in_array("7", $arrayLogros) && (in_array("8", $arrayLogros)) && $longitud=="2"){
		if($esNulo===true){
			$sql="UPDATE perfil_usuario SET idListaTitulos='1' WHERE idUsuario=$idUsuario";
			imprimirLogroConseguido('1',$mysqli,$listaIdTitulos); 
		}else{
			$yaExiste=yaExiste($listaIdTitulos,'1');
			if($yaExiste===true){
				echo '<h1 style="color:white;">Ya tienes este titulo fill de puta</h1>';
				$sql="";
			}else{
				$sql="UPDATE perfil_usuario SET idListaTitulos=concat(idListaTitulos,'.1') WHERE idUsuario=$idUsuario"; 
				imprimirLogroConseguido('1',$mysqli);

			}
		}
	}
	if($esNulo===true || $yaExiste===false){
		if($mysqli->query($sql)===true){
		}
	}else{
		echo '<h1 style="color:red;">Combinacion incorrecta o ya tienes el titulo</h1>';
	}

}
?>

<div class=container>
	<div class="header">
		<div class="logo">
			<i class="fa fa-hashtag"></i>
			<span>FLASHBACK</span>
		</div>
		<a href="#" class="nav-trigger"><span></span></a>
	</div>
	<div class="side-nav">
		<div class="logo">
			<i class="fa fa-hashtag"></i>
			<span>FLASHBACK</span>
		</div>

		<nav id="barraMenu">
			<?php
			include 'listaNav.php';
			?>
		</nav>
	</div>
	<video autoplay muted loop id="videoBG">
		<source src="videos/blender.mp4" type="video/mp4">
		</video>
		<br><br>
		<div class="row">
			<div class="col-md-12" style="position:relative;top:10%;margin:0 auto;color:white;">
				<div class="typewriter">
					<h1>La forja de <?= $_SESSION['username'] ?></h1>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12" style="position: relative;color:white;top:20%;margin:0 auto;margin-left: 0%;width: 50%; text-align: center;">
				<p class="font-italic">Preparate para sumergirte en un mundo de posibilidades, forja tus titulos y experimenta, el numero de titulos es casi ilimitado y cada uno con sus ventajas! A que esperas?</p>
			</div>
		</div>
		<div class="row" id="forja">		

			<div id="conteForja" class="row" style="display:none;color:white;width: 100%;">

				<div id="drop_zone" class="col-md-6 card" style="display:inline-block;background-color: #57BC90;text-align: right;height: 95%;" ondrop="drag_drop(event)" ondragover="return false" >
					<div class="card-header"><h4 style="color: white;margin-top: -8px;" >La forja <i class="ion-fireball"></i></h4></div>
					<div class="card-body" id=eliminar1 style="margin-top: -8px;text-align: center;font-family: BakersfieldLight;"><br>
						<h3 class="card-subtitle mb-2">"Droppea" los logros aqui!</h3>
						<img src="style/76ec92c3-bouncing-arrow.gif" style="width:40px;height: 40px;">
					</div>
					<div id="escritura1"></div>

				</div>


				<div class="card col-md-6" id="contenedorLogros" style="background-color: #77C9D4;">
					<div class="card-header"><h4 style="color: white;text-align: right;" ><i class="ion-map"></i>Tus logros </h4></div>
					<div class="card-body" id="logros_zone">	
						<h3 class="card-subtitle mb-2" style="font-family: BakersfieldLight;">Arrastra un logro para forjarlo!</h3>
						<p class="card-text" >
							<?php 
							$array=explode(".", $perfil_usuario['logrosID']);
							$longitud=count($array);
							for ($i=0; $i <$longitud ; $i++) { 
								$busquedaLogro=$mysqli->query("SELECT * FROM logros WHERE idlogros='$array[$i]'");
								$logro_encontrado=$busquedaLogro->fetch_assoc();
								$imagen=$logro_encontrado['imagen_path'];


								echo '
								<div class="objects" id='.$logro_encontrado['idlogros'].' draggable="true" ondragstart="drag_start(event)" ondragend="drag_end(event)"><div style="width: 65px; height:65px;"></div><img src="'.$imagen.'" style="width:65px;height:65px;z-index:-1;"></div>
								';
							}
							?>	
						</p>
					</div>
				</div>
			</div>
			<button id="forjarBtn" class="btn btn-outline-danger btn-large" onclick="readDropZone()" style="display:none;">FORJAR</button>
			<div class="row">

				<div class="col-md-12" id="enano">
					<div class="bd-example" style="width: 100%;opacity: 0.7;">
						<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
							<ol class="carousel-indicators">
								<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
								<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
								<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
							</ol>
							<div class="carousel-inner" role="listbox">
								<div class="carousel-item active">
									<img class="d-block w-100" src="style/blacksmith.jpg" alt="First slide">
									<div class="carousel-caption d-none d-md-block">
										<h3>Forja como un enano</h3>
										<p>Consigue titulos y nuevas recompensas, combina logros con diferentes combinaciones.</p>
									</div>
								</div>
								<div class="carousel-item">
									<img class="d-block w-100" src="style/lucha.jpg" alt="Second slide">
									<div class="carousel-caption d-none d-md-block">
										<h3>Lucha como un enano</h3>
										<p>Alardea de tus nuevos titulos y llevalos al campo de batalla, cada uno te dará bonificaciones diferentes.</p>
									</div>
								</div>
								<div class="carousel-item">
									<img class="d-block w-100" src="style/376233-sepik_1920x1080.jpg" alt="Second slide">
									<div class="carousel-caption d-none d-md-block">
										<h3>Vence como un enano</h3>
										<p>El esfuerzo inquebrantable recompensa a los más atrevidos, serás uno de ellos?.</p>
									</div>
								</div>
							</div>
							<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
					</div>
				</div>
			</div>


		</div>
		<div class="row">
			<div class="col-md-12" style="margin:0 auto;margin-left: 30%;margin-top: 2%;">
				<button type="button" class="btn btn-outline-success btn-large" data-toggle="collapse" href="#colapsar2" role="button" aria-expanded="false" aria-controls="colapsar2">Que es la Forja?</button>
				<a href="plataformaN.php"><button type="button" class="btn btn-outline-secondary">Huir</button></a>
				<button type="button" id="btnEmpezar" class="btn btn-outline-danger btn-large" role="button">Empezar</button>
				<button type="button" class="btn btn-outline-primary" id="ejemplos" data-toggle="collapse" href="#colapsar" role="button" aria-expanded="false" aria-controls="colapsar">Ejemplos</button>



			</div>
		</div>

		<div class="row collapse" id="colapsar" style="color:white;width: 150%;margin-left: -7%;margin-top: 2%;">

			<div class="card text-white bg-primary mb-3 d-inline-block" style="max-width: 20rem;">
				<div class="card-header">Titulo: Iniciado</div>
				<div class="card-body">
					<h4 class="card-title">Receta <i class="ion-ios-book"></i></h4>
					<span class="badge badge-success">Preludio de una leyenda</span><span class="badge badge-danger">Salvaguarda</span>
					<p class="card-text"><br>Combinaste El preludio de una leyenda y Salvaguarda.</p>
				</div>
			</div>
			<div class="card text-white bg-dark mb-3 d-inline-block" style="max-width: 20rem;">
				<div class="card-header">Titulo: Leyenda</div>
				<div class="card-body">
					<h4 class="card-title">Receta <i class="ion-ios-book"></i></h4>
					<span class="badge badge-success">Camino del iniciado</span><span class="badge badge-primary">Chispa de esperanza</span><span class="badge badge-secondary">Luz al final del tunel</span><span class="badge badge-warning">Fe demoledora</span>
					<p class="card-text">Combinaste los 4 primeros logros de experencia.</p>
				</div>
			</div>
			<div class="card text-white bg-primary mb-3 d-inline-block" style="max-width: 20rem;">
				<div class="card-header">Titulo: Capataz</div>
				<div class="card-body">
					<h4 class="card-title">Receta <i class="ion-ios-book"></i></h4>
					<span class="badge badge-success">Camino del iniciado</span><span class="badge badge-info">Chispa de esperanza</span>
					<p class="card-text"><br>Combinaste los 2 primeros logros de experencia</p>
				</div>
			</div>
			<div class="card text-white bg-dark mb-3 d-inline-block" style="max-width: 20rem;">
				<div class="card-header">Titulo: Romantico</div>
				<div class="card-body">
					<h4 class="card-title">Receta <i class="ion-ios-book"></i></h4>
					<span class="badge badge-success">Rompe-Corazones</span>
					<span class="badge badge-danger"><i class="ion-heart-broken"></i></span>
					<p class="card-text"><br>Combinaste el logro Rompe-Corazones, menos es más! </p>
				</div>
			</div>


			<hr>
		</div>

		<div class="collapse" id="colapsar2" style="color:white;">
			<div class="row" style="height:300px;">
				<div class="col-md-5" style="background-image: url(style/blue_epic_symphony_by_billcreative-d7pl1wx.jpg);background-position:center;width: 200px;">

				</div>
				<div class="col-md-7">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>

			</div>
			<div class="row" style="height:300px;">
				<div class="col-md-7">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
				<div class="col-md-5" style="background-image: url(style/9PChQe5.jpg);background-position: center bottom;width: 200px;">

				</div>

			</div>
			<div class="row" style="height:300px;">
				<div class="col-md-5" style="background-image: url(style/e9c.jpg);background-position: top;width: 200px;">

				</div>
				<div class="col-md-7">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>

			</div>
			<div class="row" style="height:300px;">
				<div class="col-md-7">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
				<div class="col-md-5" style="background-image: url(style/The-Expanse-1200x675-800x450.jpg);background-position: top;width: 200px;">

				</div>

			</div>
			<div class="row">
				<div class="col-md-12" style="color:white;font-size: 20px;">
					<h3>Conecta con nosotros</h3>
					<a href=# class="fa fa-facebook"></a>
					<a href=# class="fa fa-twitter"></a>
					<a href=# class="fa fa-google"></a>
					<a href=# class="fa fa-linkedin"></a>
					<a href=# class="fa fa-youtube"></a>

				</div>

			</div>

		</div>
	</div>

</body>
</div>
<footer>
	<script type="text/javascript" src="js/sistemaForja.js"></script>

</footer>
</html>