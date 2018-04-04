<?php 
if(isset($_POST['radio1'])){
	if($_POST['radio1']=="option1"){
		$cuantosLibros="0-2 libros en mi vida";
	}
	else if($_POST['radio1']=="option2"){
		$cuantosLibros="2-10 libros en mi vida";
	}
	else if($_POST['radio1']=="option3"){
		$cuantosLibros="Más de 10 !";
	}
	else if($_POST['radio1']=="option4"){
		$cuantosLibros="Me leo uno a la semana :D";
	}

}else{
	$cuantosLibros="Me leo 1 alguna vez, otra 20 en un mes, quien sabe, soy una incognita";
}
		//Tratamiento del segundo apartado del form, del raido 2
if(isset($_POST['radio2'])){
	if($_POST['radio2']=="option1"){
		$opinionEscritura="Lo he intentado pero me cansé.";
	}
	else if($_POST['radio2']=="option2"){
		$opinionEscritura="Tengo un libro listo para su publicacion.";
	}
	else if($_POST['radio2']=="option3"){
		$opinionEscritura="He publicado y vendido varios.";
	}
	else if($_POST['radio2']=="option4"){
		$opinionEscritura="Nunca lo he hecho pero me gustaria empezar.";
	}

}else{
	$opinionEscritura="Quizas me guste escribir, pero depende del momento, si se alineasen las lunas y los astros...";
}
		//Tratamiento del tercer apartado del form, del checkbox que devuelve un array
if(isset($_POST['chk1'])){
	$arrayChecks=$_POST['chk1'];
	$lenght=count($arrayChecks);
	$resultadoArray="";
	for ($i=0; $i <$lenght ; $i++) { 
		$resultadoArray=$resultadoArray.".".$arrayChecks[$i];
	}

}else{
	$resultadoArray="Soy una persona dificil encasillar, nadie me marca el ritmo ni la direccion, nadie maneja mi timonel, yo soy mi propio capitan...";

}
		//Tratamiento del cuarto apartado del form, del checkbox sobre estudios actuales
if(isset($_POST['checkPers'])){
	$arrayChecks=$_POST['checkPers'];
	$lenght=count($arrayChecks);
	$resultadoArray2="";
	for ($i=0; $i <$lenght ; $i++) { 
		$resultadoArray2=$resultadoArray2.".".$arrayChecks[$i];
	}

}else{
	$resultadoArray2="Los estudios no son necesarios, y muchos menos obligatorios, una mente inteligente evita perder el tiempo en enseñanzas prefabricadas y prefiere invertirlo de una forma más sutil, siendo autodidacta";

}
		//Tratamiento del quinto apartado del form, del texto que es la universidad/lugar de estudio
if(isset($_POST['nombreC'])){
	$lugarEstudio=$_POST['nombreC'];
}else{
	$lugarEstudio="Estudio en mi cama mientras la lluvia retumba en la ventanas semiabiertas junto a la brisa de la tormenta";
}
		//Tratamiento del sexo apartado del form, del textArea que pretende describir al usuario
if(isset($_POST['textoArea'])){
	$descripcion=$_POST['textoArea'];

}else{
	$descripcion="Siento que describirse es autolimitarse, por eso dejo esto asi, con una pencellada de amor y otra de odio, no me busques porque me habre desvanecido en la penumbra";
}


?>