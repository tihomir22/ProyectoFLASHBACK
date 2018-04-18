

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
       
   <!--
   <div class="row">
    <div class="col-md-9" id=divChart3 style="width: 50%;margin-top: 100px;">
    </div>
    <div class="col-md-3" id=divChart4 style="width: 50%;margin-top: 100px;">
    </div>
-->
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
  <!--
  <script type="text/javascript">

    Highcharts.chart('divChart3', {

        title: {
            text: 'Solar Employment Growth by Sector, 2010-2016'
        },

        subtitle: {
            text: 'Source: thesolarfoundation.com'
        },

        yAxis: {
            title: {
                text: 'Number of Employees'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },

        plotOptions: {
            series: {
                label: {
                    connectorAllowed: false
                },
                pointStart: 2010
            }
        },

        series: [{
            name: 'Installation',
            data: [43934, 52503, 57177, 69658, 97031, 119931, 137133, 154175]
        }, {
            name: 'Manufacturing',
            data: [24916, 24064, 29742, 29851, 32490, 30282, 38121, 40434]
        }, {
            name: 'Sales & Distribution',
            data: [11744, 17722, 16005, 19771, 20185, 24377, 32147, 39387]
        }, {
            name: 'Project Development',
            data: [null, null, 7988, 12169, 15112, 22452, 34400, 34227]
        }, {
            name: 'Other',
            data: [12908, 5948, 8105, 11248, 8989, 11816, 18274, 18111]
        }],

        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }

    });
</script>
<script type="text/javascript">
 Highcharts.chart('divChart4', {

    title: {
        text: 'Solar Employment Growth by Sector, 2010-2016'
    },

    subtitle: {
        text: 'Source: thesolarfoundation.com'
    },

    yAxis: {
        title: {
            text: 'Number of Employees'
        }
    },
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle'
    },

    plotOptions: {
        series: {
            label: {
                connectorAllowed: false
            },
            pointStart: 2010
        }
    },

    series: [{
        name: 'Installation',
        data: [43934, 52503, 57177, 69658, 97031, 119931, 137133, 154175]
    }, {
        name: 'Manufacturing',
        data: [24916, 24064, 29742, 29851, 32490, 30282, 38121, 40434]
    }, {
        name: 'Sales & Distribution',
        data: [11744, 17722, 16005, 19771, 20185, 24377, 32147, 39387]
    }, {
        name: 'Project Development',
        data: [null, null, 7988, 12169, 15112, 22452, 34400, 34227]
    }, {
        name: 'Other',
        data: [12908, 5948, 8105, 11248, 8989, 11816, 18274, 18111]
    }],

    responsive: {
        rules: [{
            condition: {
                maxWidth: 500
            },
            chartOptions: {
                legend: {
                    layout: 'horizontal',
                    align: 'center',
                    verticalAlign: 'bottom'
                }
            }
        }]
    }
});
</script>
-->
</footer>
<script src="aos/dist/aos.js"></script>
<script type="text/javascript">
    AOS.init({
        easing: 'ease-in-out-sine'
    });
</script>
</html>