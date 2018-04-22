<div class="modal" id="exampleModalVertical" tabindex="-1" role="dialog" aria-labelledby="exampleModalVerticalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalVerticalLabel">Nuevo titulo conseguido!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="style/goal.png" style="margin-left: 20%;"><br>
        <h4 style="padding: 5px;text-align: center;">Conseguiste el logro <?php echo $infoTitulo['nombre'] ?></h4><br>
        
        <h3 ><span class="badge badge-secondary" style="width: 100%;margin-top: 5px;">Descripcion:</span></h3>
        <h3 style="text-align: center;"><?php echo $infoTitulo['descripcion'] ?></h3><hr>
        <h3 ><span class="badge badge-secondary" style="width: 100%;margin-top: 5px;overflow: hidden;">Estadisticas:</span></h3>
        <div class="alert alert-warning" role="alert" style="margin-bottom: 0px;">
          <div class="row">
            <div class="col-md-2" style="font-size: 25px;color:white;""><span class="badge badge-warning" style="margin-right: 5px;color:white;"><i class="ion-flag" "></i>EXP </span></div>
            <div class="col-md-10"><h3 style="font-size: 18px;">Sumas <strong><?php echo $infoTitulo['EXP'] ?></strong> de experencia.</h3></div>
          </div>
        </div>
        <div class="alert alert-info" role="alert">
          <div class="row">
            <div class="col-md-10"><h3 style="font-size: 18px;">Con este titulo tienes <?php echo contarTitulos($listaTitulos); ?> titulos en total</h3></div>
            <div class="col-md-2" style="font-size: 25px;width: 100%;"><span class="badge badge-info">+1 <i class="ion-paper-airplane"></i></span></div>
          </div>
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary"><i class="ion-android-share-alt"></i></button>
      </div>
    </div>
  </div>
</div>