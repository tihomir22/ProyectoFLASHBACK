<?php 
$busquedaDuplica=$mysqli->query("SELECT * FROM perfil_usuario WHERE idUsuario='$idUsuario'");
$perfil_usuario=$busquedaDuplica->fetch_assoc();
$mira=$perfil_usuario['modal'];
$logros=$perfil_usuario['logrosID'];
?>