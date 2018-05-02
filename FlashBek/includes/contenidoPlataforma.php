 <div class="title">
    Dashboard
</div>

<div class="row">
    <?php
    include 'barraExp.php';
    ?>
</div>

<div class="main">
    <div class="widget" style="height: 100%;padding:5px;">
        <div class="title" style="border-bottom: 2px solid #0074D9;">Perfil</div>
        <?php
        echo '<br>';
        include 'includes/perfil.php';
        ?>
    </div>
    <div class="widget" style="height: 100%;padding:5px;">
        <div class="title" style="border-bottom: 2px solid #FF851B;">Sobre mi</div>
        <?php
        echo '<br>';
        include 'includes/sobremi.php';
        ?>
    </div>
    <div class="widget" style="height: 100%;padding:5px;">
        <div class="title" style="border-bottom: 2px solid #01FF70">Logros</div>
        <?php 
        include 'includes/imprimirLogros.php'; 
        ?>
        <br>
        <hr>
        <div>
           <div class="title" style="border-bottom: 2px solid #3D9970;padding:5px;">Publicaciones</div>
           <?php include 'includes/publicaciones.php' ?>

       </div>
   </div>

</div>