

<head>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.5/js/mdb.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.5/css/mdb.min.css" />
	<meta charset="utf-8">
	<style type="text/css">
	img{
		width: 15%;
	}
	body{
		color:white;
		background: #232526; /* fallback for old browsers */
		background: -webkit-linear-gradient(to right, #232526, #414345); /* Chrome 10-25, Safari 5.1-6 */
		background: linear-gradient(to right, #232526, #414345); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
	}
</style>

</head>
<body>

	<?php 
	session_start(); 
	$con=mysqli_connect("localhost", "root", "", "registroflashback");

	if(mysqli_connect_errno()){
		echo 'Fallo al colectarse a la base de datos'.mysqli_connect_errno();
	}
	$resultado=mysqli_query($con,"SELECT * FROM logros");
	$i=0;

	echo '<table class="table table-responsive-md" style="width: 100%";">

	<!--Table head-->
	<thead class="cyan lighten-3">
	<tr>
	<th width="50px;">#</th>
	<th class="th-lg">Nombre</th>
	<th class="th-lg">Descripcion</th>
	<th class="th-lg">Experencia Logro</th>
	<th class="th-lg">Imagen</th>
	</tr>
	</thead>
	<!--Table head-->

	<!--Table body-->
	<tbody>
	';



	while ($row = mysqli_fetch_array($resultado)) {
		$i++;
		echo '<tr>
		<th scope="row" >'.$i.'</th>
		<td>'.$row['nombre'].'</td>
		<td>'.$row['descripcion'].'</td>
		<td>'.$row['exp_logro'].'</td>
		<td><img src="../'.$row['imagen_path'].'"></img></td>
		</tr>';


	}





	mysqli_close($con);
	?>


</tbody>

</table>
</body>