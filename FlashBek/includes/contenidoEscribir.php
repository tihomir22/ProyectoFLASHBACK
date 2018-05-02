
<?php 
if(isset($_POST['enviarTxt'])){
	//echo '<h1>'.$_POST['inputTextoTitulo'].'</h1>';
	$archivo_path="null";
	$titulo=$_POST['inputTextoTitulo'];
	if($titulo!=""){
		$contenido=$_POST['content'];
		$autor=$idUsuario;
		//Preparacion de checkbox para insercion en SQL
		$opcionElegida=$_POST['opciones'];
		if($opcionElegida!=4){
			if (isset($_POST['checkboxCategoria'])) {
				$arrayChecks=$_POST['checkboxCategoria'];
				$lenght=count($arrayChecks);
				$resCadena="";
				for ($i=0; $i <$lenght ; $i++) { 
					if($resCadena==""){
						$resCadena=$arrayChecks[$i];
					}else{
						$resCadena=$resCadena.'.'.$arrayChecks[$i];
					}
				}	
			}
		}else{
			$resCadena="null";
		}


		$sql="INSERT INTO publicaciones(archivo_path,titulo,autor,tematica,tipo,contenido) VALUES ($archivo_path,'$titulo',$autor,'$resCadena','$opcionElegida','$contenido')";
		if($mysqli->query($sql)===true){
			echo '<div class="alert alert-success ">Malparit
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
			</div>';
		}else{
			echo $mysqli->connect_error;

		}
	}else{
		echo '<h1 style="color:red;">Usted debe introducir un titulo</h1>';
	}
}

?>

<form method="POST" action="plataformaN.php?seccion=escribir">
	
	<div>
		<div class="col-md-12">
			<div class="typewriter" id="autoWriter" style="margin-bottom: 20px;">
				<h1>Introduce un titulo</h1>
			</div>
			<input type="text" class="form-control mb-2 mr-sm-2" id="input01text2" placeholder="Me gustan los patos, y a ti? " name="inputTextoTitulo"  style="display: none; width: 100%;font-size: 30px;">
		</div>
	</div>
	<div class="row" style="height: auto: ;">

		<textarea rows="2" cols="200" class="col-md-10" name="content" id="editor" style="width: 80%;height: 100%;">
			<h1>Soy un ejemplo!</h1>
			<h2 style="color:orange;">Soy una anomalia!</h2>
			<h3><strong>Que está pasando?!</strong></h3>
			<h4>Soy un ejemplo!</h4>
			<div class=row> 
				<div id=divRojo class="col-lg-3 col-md-3 col-sm-6 col-xs-12 " data-aos="fade-right" data-aos-duration="500">
					<p>Discusion de ideas y conceptos, se comparten ideas viables y se discuten entre el equipo y se llega a un acuerdo, se realizan estudios de viabilidad y requisitos de sistema.</p>
				</div>
				<div id=divNaranja class="col-lg-3 col-md-3 col-sm-6 col-xs-12 " data-aos="fade-right" data-aos-duration="1000">
					<p>El equipo pretende dar sus primeros coletazos, pasando del diseño a la codificación con herramientas como HTML,CSS, PHP. En esta fase la pagina web se someterá a muchos cambios diaramente. </p>
				</div>
				<div id=divYellow class="col-lg-3 col-md-3 col-sm-6 col-xs-12 " data-aos="fade-right" data-aos-duration="2000">
					<p>Se termina el diseño estatico de la pagina, se crearán base de datos para guardar la informacion de los usuarios y se implementará caracteristicas dinamicas en la pagina y plataforma.</p>
				</div>
				<div id=divCyan class="col-lg-3 col-md-3 col-sm-6 col-xs-12 " data-aos="fade-right" data-aos-duration="2000">

					<p>Se lanzará la pagina web, en un principio solamente la pagina hasta que se logre pulir la plataforma, una vez se compruebe la funcionalidad de la plataforma esta se lanzará junto a sus caracteristicas principales.</p>
				</div>
			</div>
			<div class="col-md-6">
				<img id=librorow1 src="style/book-rocket.png"  class="img-responsive"  data-aos="slide-up" data-aos-duration="1000" alt="foto1">
			</div>
			<div class="col-md-6" data-aos="fade-left" data-aos-duration="1000" id=textoBook >
				<h4>Resurgiendo de las cenizas</h4>
				<p>Flashback pretende modificar el significado y embellecerlo con un toque radiante, se desea que cuando un usuario elige utilizar la plataforma "FLASHBACK" se lleve a un nivel nuevo de escritura y que pueda llevar sus sueños a cabo. El usuario contará con un sistema de experiencia que irá aumentando a medida que este vayas publicando capítulos de su novela favorita.
					<br> También una vez hecha la subida, podrá recibir valoraciones, comentarios de los visitantes y incluso podrán recompensarle con la tecnologia de IOTA , una criptomoneda  destinada a satisfacer las necesidades de la plataforma a la vez que descentralizan el ecosistema digital</p>
					<p>El significado se podría entender como una visión del pasado que se vive en el presente, la mayoría de personas que escribieron alguna vez en su vida y lo dejan, a la hora de retomarlo les entra ese complejo, ese recuerdo p
					unzante, el miedo de que les vuelva a ocurrir lo mismo  y se vean frustrados de nuevo. </p>
				</div>

			</textarea>
			<div class="col-md-2" >		
				<div class="col-md-12">
					<select class="custom-select" name="opciones" id="opciones" style="width: 100%;">
						<option value="" selected>Tipo de publicacion</option>
						<option value="1">Libro</option>
						<option value="2">Capitulo</option>
						<option value="3">Blog</option>
						<option value="4">Opinion</option>
					</select>
				</div>
				<div id="categoriasTODAS">
					<div class="col-md-12" >
						<a tabindex="0" class="btn btn-outline-primary" role="button"
						data-toggle="popover" data-trigger="focus" title="Abajo tienes categorias"
						data-content="Cada categoria es hija de una seccion, y cada seccion ofrece unos bonuses diferentes!Que esperas a descubrirlos?" style="width: 100%;">
						Categorias
						<i class="ion-ios-help-outline"></i>
					</a>

					<div class="alert alert-primary" role="alert">
						<p><strong>Agudeza</strong></p>
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="customCheck1" name="checkboxCategoria[]" value="polithri">
							<label class="custom-control-label" for="customCheck1">Policial/Thriller</label>
						</div>
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="customCheck2" name="checkboxCategoria[]" value="roma">
							<label class="custom-control-label" for="customCheck2">Romantica</label>
						</div>
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="customCheck3" name="checkboxCategoria[]" value="aven">
							<label class="custom-control-label" for="customCheck3">Aventura</label>
						</div>

					</div>
					<div class="alert alert-success" role="alert">
						<p><strong>Perspicacia</strong></p>
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="customCheck4" name="checkboxCategoria[]" value="terr">
							<label class="custom-control-label" for="customCheck4">Terror</label>
						</div>
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="customCheck5" name="checkboxCategoria[]" value="ficc">
							<label class="custom-control-label" for="customCheck5">Ficcion</label>
						</div>
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="customCheck6" name="checkboxCategoria[]" value="cien">
							<label class="custom-control-label" for="customCheck6">Ciencia Ficcion</label>
						</div>

					</div>
					<div class="alert alert-warning" role="alert">
						<p><strong>Sagacidad</strong></p>
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="customCheck7" name="checkboxCategoria[]" value="biog">
							<label class="custom-control-label" for="customCheck7">Biografia</label>
						</div>
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="customCheck8" name="checkboxCategoria[]" value="soci">
							<label class="custom-control-label" for="customCheck8">Sociedad</label>
						</div>
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="customCheck9" name="checkboxCategoria[]" value="otro">
							<label class="custom-control-label" for="customCheck9">Otros temas/Varios</label>
						</div>

					</div>
					<div class="alert alert-danger" role="alert">
						<p><strong>Entereza</strong></p>
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="customCheck10" name="checkboxCategoria[]" value="depo">
							<label class="custom-control-label" for="customCheck10">Deportes</label>
						</div>
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="customCheck11" name="checkboxCategoria[]" value="viaj">
							<label class="custom-control-label" for="customCheck11">Viajes/Cultura</label>
						</div>
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="customCheck12" name="checkboxCategoria[]" value="auto">
							<label class="custom-control-label" for="customCheck12">AutoAyuda</label>
						</div>

					</div>
					<input type="submit" name="enviarTxt" class="btn btn-outline-dark" id="enviarTxt" style="width: 100%;"></input>
				</div>
			</div><br>
			<div class="col-md-12 alert alert-info" style="display: none;" id="publicacionID">
				<i class="ion-information" style="font-size: 30px;text-align: center;"></i>
				<p><strong>Opinion:</strong>
					Una publicacion de tipo opinion es un texto con las siguientes caracteristicas:
					<ul><hr>
						<li><span class="badge badge-pill badge-primary">500 caracteres maximo.</span></li><hr>
						<li>Proporciona <span class="badge badge-danger">EXP. Variable</span> en funcion del numero total de opiniones publicadas</li><hr>
						<li>Se usa para <strong>comunicarse</strong> con tus sequitos</li><hr>
						<li>Una vez enviada se publicará en la dashboard, ordenado por orden cronologico</li>
					</ul>
				</p>
			</div>

		</div>

	</div>
	
</div>
</form>


