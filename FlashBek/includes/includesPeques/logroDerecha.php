<?php 

echo '
<div class="col-md-6">
<img src="'.$logro_encontrado['imagen_path'].'" style="width:90px;height:90px;padding:5px;border-radius:50%;margin-top:10px;float:right;" data-toggle="tooltip"
data-placement="top" title="'.$logro_encontrado['nombre'].'">
<br>
<a tabindex="0" class="btn btn-lg btn-dark" role="button"
data-toggle="popover" data-trigger="focus" title="'.$logro_encontrado['nombre'].'"
data-content="'.$logro_encontrado['descripcion'].'" style="width:50%;float:right;">
<i style="color:orange" class="icon icon ion-fireball"></i>
'.$logro_encontrado['exp_logro'].' EXP
</a><br><br>
<span class="badge badge-info" style="float:right;margin-top:2px;"># '.($i+1).'</span><br>
</div>
'

;

?>