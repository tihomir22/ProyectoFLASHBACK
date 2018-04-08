

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
    <title>Bienvenido</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Responsive vertical menu navigation</title>
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:700, 600,500,400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="style/stylePlatform.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/series-label.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/data.js"></script>
    <script src="js/main.js"></script>
    <link rel="stylesheet" href="style/loginStyle2.css" class="style">
    <?php
    include 'modalSeparado.php';
    ?>
</head>
<body>
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
        <div class="widget" style="height: 100%;">
            <div class="title" style="border-bottom: 2px solid #0074D9;">Perfil</div>
            <?php
            echo '<br>';
            include 'includes/perfil.php';
            ?>
        </div>
        <div class="widget" style="height: 100%;"">
            <div class="title" style="border-bottom: 2px solid #FF851B;">Sobre mi</div>
            <?php
            echo '<br>';
            include 'includes/sobremi.php';
            ?>
        </div>
        <div class="widget" style="height: 100%;">
            <div class="title" style="border-bottom: 2px solid #01FF70">Logros</div>
            <?php include 'includes/imprimirLogros.php'; 
            include 'includes/conseguirLogros.php';
            ?>
            <br>
            <div>
               <div class="title" style="border-bottom: 2px solid #3D9970">Publicaciones</div>
               <?php include 'includes/publicaciones.php' ?>

           </div>
       </div>

   </div>
   <hr>
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
</html>