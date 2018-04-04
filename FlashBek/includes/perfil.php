
<div class="box box-primary">
	<div class="box-body box-profile">
		<img class="img-fluid" src="<?= $_SESSION['avatar'] ?>" alt="foto de perfil usuario" style="width:150px;height: 150px;margin-left: 37%;border-radius: 50%;padding: 5px;">

		<h3 class="profile-username text-center"><a href=# >@<?= $_SESSION['username'] ?></a></h3>

		<p class="text-muted text-center"><i class="fa fa-book"></i>_<?= $_SESSION['Rango']?></p>
		<p style="text-align: center;font-style: italic;color: gray;"><?= $_SESSION['textArea_sobreti']?></p>




		<ul class="list-group list-group-unbordered">
			<li class="list-group-item">
				<i class="fa fa-group"></i><b> Seguidores</b> <a class="pull-right">1,322</a>
			</li>
			<li class="list-group-item">
				<i class="fa fa-group" style="color:#0074D9;"></i><b> Seguidos</b> <a class="pull-right">543</a>
			</li>
			<li class="list-group-item">
				<i class="fa fa-heart" style="color:#FF4136"></i><b> Amigos</b> <a class="pull-right">13,287</a>
			</li>
			<li class="list-group-item">
				<i class="fa fa-edit" style="color:#01FF70"></i><b> Relatos</b> <a class="pull-right">13</a>
			</li>
			<li class="list-group-item">
				<i class="fa fa-paper-plane" style="color:#FF851B"></i><b> Nivel</b> <a class="pull-right"><?= $_SESSION['Nivel']?></a>
			</li>
		</ul>

		<a href="#" class="btn btn-primary btn-block"><b>Seguir</b></a>
	</div>
	<!-- /.box-body -->
</div>





<!--<?php 

echo '<h4>'.$_SESSION['libros_leidos'].'</h4>';
echo '<h4>'.$_SESSION['gusta_escribir'].'</h4>';
?>

-->