
<div class="col-md-12">
	<h2 style="text-align: center;">Experencia</h2>
	<?php
	$total=100*$_SESSION['Nivel'];
	
	if($_SESSION['Experencia']> ($total*0)  && $_SESSION['Experencia']<=($total*0.25)){
		$tipoB="";
	}
	else if($_SESSION['Experencia']>($total*0.25) && $_SESSION['Experencia']<=($total*0.50)){
		$tipoB="bg-success";
	}
	else if($_SESSION['Experencia']>($total*0.50) && $_SESSION['Experencia']<=($total*0.75)){
		$tipoB="bg-warning";
	}
	else if($_SESSION['Experencia']>($total*0.75) && $_SESSION['Experencia']<$total){
		$tipoB="bg-danger";
	}
	else if($_SESSION['Experencia']==$total || $_SESSION['Experencia']>$total){
		$usuario=$_SESSION['username'];

		$mysqli->query("UPDATE usuarios SET Experencia =10 , Nivel= Nivel+1 WHERE username='$usuario'"); //Se reinicia la experencia a 10 y se sube el nivel
	}
	else{
		$tipoB="";
	}



	?>


	<div class="progress" style="margin :5px;height: 25%;">
		<div class="progress-bar progress-bar-striped <?php echo $tipoB ?> progress-bar-animated" role="progressbar" aria-valuenow="<?= $_SESSION['Experencia']?>" aria-valuemin="0" aria-valuemax="100" style="width:<?= $_SESSION['Experencia']/$_SESSION['Nivel']."%"?>;"></div>
	</div>
	<h4 style="float:left;margin: 5px;">Actual : <?= $_SESSION['Experencia']?></h4>
	<h4 style="float:right;margin: 5px;">Restante para siguiente nivel : <?= 
	( $total - $_SESSION['Experencia'] );
	?></h4>
	<br><br><br>
</div>