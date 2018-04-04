<?php 
$busquedaDuplica=$mysqli->query("SELECT * FROM perfil_usuario WHERE idUsuario='$idUsuario'");
$perfil_usuario=$busquedaDuplica->fetch_assoc();
$mira=$perfil_usuario['modal'];
?>