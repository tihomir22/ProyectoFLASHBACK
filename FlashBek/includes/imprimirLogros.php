
<?php 
include 'includesPeques/obtenerPerfilUsuario.php';

$logrosArray=explode(".", $logros);
$longitud=count($logrosArray);
$autocompletado=false;




echo '<div class="row" style="margin-bottom:-3%;">';
if($longitud>0){ //Si detectamos que el usuario tiene logros se imprimen
  for ($i=0; $i <$longitud && $i<2; $i++) { 
    $busquedaLogro=$mysqli->query("SELECT * FROM logros WHERE idlogros='$logrosArray[$i]'");
    $logro_encontrado=$busquedaLogro->fetch_assoc();
    if($logro_encontrado==true){
      if(($i%2)==0){
       include 'includesPeques/logroDerecha.php';
     }
     if(($i%2)!=0){
       include 'includesPeques/logroIzquierda.php';
     }
   }
 }
}else{
  include 'includesPeques/botonTodosLogros.php';
}

echo '</div>';
echo '<hr>';

if($longitud>1 && $longitud <4){
  echo '<div class="row" style="margin-bottom:-3%;">';
  for ($i=2; $i<$longitud ; $i++) { 

   $busquedaLogro=$mysqli->query("SELECT * FROM logros WHERE idlogros='$logrosArray[$i]'");
   $logro_encontrado=$busquedaLogro->fetch_assoc();
   if(($i%2)==0){
    include 'includesPeques/logroDerecha.php';
  }
  if(($i%2)!=0){
   include 'includesPeques/logroIzquierda.php';
 }
}
echo '</div>';
echo '<hr>';
}else{
  include 'includesPeques/botonTodosLogros.php';
}


if($longitud>3 && $longitud <6){
  echo '<div class="row" style="margin-bottom:-3%;">';
  for ($i=4; $i<$longitud ; $i++) { 
   $busquedaLogro=$mysqli->query("SELECT * FROM logros WHERE idlogros='$logrosArray[$i]'");
   $logro_encontrado=$busquedaLogro->fetch_assoc();
   if(($i%2)==0){
    include 'includesPeques/logroDerecha.php';
  }
  if(($i%2)!=0){
   include 'includesPeques/logroIzquierda.php';
 }
}
echo '</div>';
echo '<hr>';
}else{
  include 'includesPeques/botonTodosLogros.php';
}

if($longitud>5 && $longitud <8){
  echo '<div class="row" style="margin-bottom:-3%;">';
  for ($i=6; $i<$longitud ; $i++) { 
   $busquedaLogro=$mysqli->query("SELECT * FROM logros WHERE idlogros='$logrosArray[$i]'");
   $logro_encontrado=$busquedaLogro->fetch_assoc();
   if(($i%2)==0){
    include 'includesPeques/logroDerecha.php';
  }
  if(($i%2)!=0){
   include 'includesPeques/logroIzquierda.php';
 }
}
echo '</div>';
echo '<hr>';
}else{
  include 'includesPeques/botonTodosLogros.php';
}


if($longitud>7 && $longitud <10){
  echo '<div class="row" style="margin-bottom:-3%;">';
  for ($i=8; $i<$longitud ; $i++) { 
   $busquedaLogro=$mysqli->query("SELECT * FROM logros WHERE idlogros='$logrosArray[$i]'");
   $logro_encontrado=$busquedaLogro->fetch_assoc();
   if(($i%2)==0){
    include 'includesPeques/logroDerecha.php';
  }
  if(($i%2)!=0){
   include 'includesPeques/logroIzquierda.php';
 }
}
echo '</div>';
echo '<hr>';
}else{
  include 'includesPeques/botonTodosLogros.php';
}


?>





