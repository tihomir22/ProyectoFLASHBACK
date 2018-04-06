<?php 

  if($autocompletado===false){
   echo '<div class="row" style="margin-bottom:-3%;">';
   echo '<div class="col-md-12">
   <a href="includes/listadoLogros.php" target="_blank" class="badge badge-success" style="font-size:20px;margin-left:7%;;"><i class="ion-android-open"></i> Haga click para ver todos los logros disponibles</a>
   </div>'; 
   echo '</div>';
   echo '<br>';
   $autocompletado=true;
 }


 ?>