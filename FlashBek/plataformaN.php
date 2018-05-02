

<?php 
session_start(); 
$mysqli = new mysqli("localhost", "root", "", "registroflashback");
$usuario=$_SESSION['username'];

$resultado=$mysqli->query("SELECT * FROM usuarios WHERE username='$usuario'");
$user = $resultado->fetch_assoc();
$idUsuario=$user['idUsuarios'];

if(isset($_POST['reiniciarModal'])){
    $mysqli->query("UPDATE perfil_usuario SET modal='0' WHERE idUsuario='$idUsuario'" );
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>POET</title>
    <?php 
    include 'includes/importarBootstrap.html';
    ?>
    <link rel="stylesheet" type="text/css" href="aos/dist/aos.css">
    <script src="js/main.js"></script>
    <link rel="stylesheet" href="style/stylePlatform.css">
    <link rel="stylesheet" href="style/loginStyle2.css" class="style">
    <script type="text/javascript" src="ckeditor/ckeditor.js"></script>

    <?php
    include 'modalSeparado.php';
    ?>
</head>
<body>
    <?php 
    include 'includes/conseguirLogros.php';

    ?>
    <?php 
    include 'includes/detectarEnvioModal.php';
    ?>
    <div class="header">
        <div class="logo">
            <i class="fa fa-hashtag"></i>
            <span>FLASHBACK</span>
        </div>
        <a href="#" class="nav-trigger"><span></span></a>
    </div>
    <div class="side-nav">
        <div class="logo">
            <i class="fa fa-hashtag"></i>
            <span>FLASHBACK</span>
        </div>

        <nav id="barraMenu">
            <?php
            include 'listaNav.php';
            ?>
        </nav>
    </div>
    <div class="main-content" id="wrapper">
        <div class="alert alert-success "><?= $_SESSION['message']." Y has conseguido ".'<strong>10 puntos de experencia</strong>' ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <!-- INTRODUCCION DEL CONTENIDO DEPENDIENDO DE LA SECCION-->
        <?php 
        if(isset($_GET['seccion'])){
            if($_GET['seccion']=="escribir"){
                include "includes/contenidoEscribir.php";

            }

        }else{
            include "includes/contenidoPlataforma.php";

        }

        ?>


    </div>
</div>
</body>
<footer>
    <script src="js/comprobarForm2.js"></script>
    <script type="text/javascript">
        $(function () {
          $('[data-toggle="popover"]').popover()
      })

  </script>
  
</footer>
<script src="aos/dist/aos.js"></script>
<script type="text/javascript">
    AOS.init({
        easing: 'ease-in-out-sine'
    });
</script>
<script type="text/javascript">
    CKEDITOR.replace('editor');

</script>


</html>