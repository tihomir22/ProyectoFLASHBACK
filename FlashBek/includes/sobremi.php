   <!-- About Me Box -->
   <div class="box box-primary">
    <div class="box-header with-border">

    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <strong><i class="fa fa-book margin-r-5"></i> Libros leidos</strong>

      <p class="text-muted">
        <?= $_SESSION['libros_leidos']?>
      </p>

      <hr>


      <strong><i class="fa fa-building"></i>Estudios</strong>
      <p class="text-muted"><?php 
      $cadenaDB=$_SESSION['estudios_chkbox'];
      if(strlen($cadenaDB)<40){

        $arrayEstudios=explode(".", $cadenaDB);
        $longitud=count($arrayEstudios);
        for ($i=1; $i <$longitud ; $i++) { 

          if($arrayEstudios[$i]=='primaria'){
            echo '<span class="badge badge-primary">Estudios primaria</span>';
          }else if($arrayEstudios[$i]=='secundaria'){
            echo '<span class="badge badge-success">Estudios secundaria</span>';
          }else if($arrayEstudios[$i]=='nouni'){
            echo '<span class="badge badge-info">Estudios no universitarios</span>';
          }else if($arrayEstudios[$i]=='uni'){
            echo '<span class="badge badge-secondary">Estudios universitarios</span>';
          }
        }
      }else{
        echo $cadenaDB;
      }

      ?></p>

      <hr>

      <strong><i class="fa fa-map-marker margin-r-5"></i> Localizacion </strong>

      <p class="text-muted"><?=$_SESSION['lugar_estudio']?></p>

      <hr>

      <strong><i class="fa fa-pencil margin-r-5"></i> Habilidades</strong><br>
      <?php 
      $cadenaHabilidad=$_SESSION['definicion_chkbox'];
      if (strlen($cadenaHabilidad)<=20) {

        $arraySkills=explode(".", $cadenaHabilidad);
        $longitud=count($arraySkills);

        for ($i=1; $i <$longitud ; $i++) { 
          if($arraySkills[$i]=='val1'){
            echo '
            <div class="card" style="width:25%;float:left;">
            <img class="card-img-top" src="style/iconos/IconPack/128128/tools.png" alt="Card image cap" style="width:45%;margin-left:27%;margin-bottom:-10%;">
            <div class="card-body" style="text-allign:center;padding-left:27%;background-color:#0074D9;margin-top:5%;color:white;height:65px;"> Manitas </div>
            </div>

            ';
          }
          if($arraySkills[$i]=='val2'){
           echo '
           <div class="card" style="width:25%;float:left;">
           <img class="card-img-top" src="style/iconos/IconPack/128128/helmet2.png" alt="Card image cap" style="width:45%;margin-left:27%;margin-bottom:-10%;">
           <div class="card-body" style="text-allign:center;padding-left:27%;background-color:#01FF70;margin-top:5%;color:white;height:65px;"> Hereje </div>
           </div>

           ';
         }
         if($arraySkills[$i]=='val3'){
           echo '
           <div class="card" style="width:25%;float:left;">
           <img class="card-img-top" src="style/iconos/IconPack/128128/armor 2.png" alt="Card image cap" style="width:45%;margin-left:27%;margin-bottom:-10%;">
           <div class="card-body" style="text-allign:center;padding-left:27%;background-color:#FF4136;margin-top:5%;color:white;font-size:13px;height:65px;"> Conversador </div>
           </div>

           ';
         }
         if($arraySkills[$i]=='val4'){
           echo '
           <div class="card" style="width:25%;float:left;">
           <img class="card-img-top" src="style/iconos/IconPack/128128/axeDouble2.png" alt="Card image cap" style="width:45%;margin-left:27%;margin-bottom:-10%;">
           <div class="card-body" style="text-allign:center;padding-left:27%;background-color:#FF851B;margin-top:5%;color:white;height:65px;"> Astuto </div>
           </div>

           ';
         }

       }
       echo '<br><br><br><br><br>';
     }else{
      echo $cadenaHabilidad;
    }

    ?>


    <hr>

    <strong><i class="fa fa-file-text-o margin-r-5"></i> Escritura</strong>
    <p><?=$_SESSION['gusta_escribir']?></p>
    <form action="plataformaN.php" method="POST">
      <button class="btn btn-primary btn-block" id="ajustesPers" name="reiniciarModal">Modificar datos</button>
    </form>
  </div>
  <!-- /.box-body -->
</div>