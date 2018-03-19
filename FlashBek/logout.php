<?php
/* Log out process, unsets and destroys session variables */
session_start();
session_unset();
session_destroy(); 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Saliendo...</title>
	<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<link rel="stylesheet" href="style/estiloLogout.css">
</head>

<body>
	<div class="form">
		<h1>Has cerrado session exitosamente</h1>

		<p><?= 'En breves seras redirigido...'; ?></p>

		<a href="login.php"><button class="button button-block"/>Inicio</button></a>
		<?php 
		header("refresh:5;url=login.php");
		?>
	</div>
</body>
</html>
