<!DOCTYPE HTML>
<html>

    <head>
        <title>Be a Flash...</title>
        <link rel="icon" href="style/flashback_logo.png">
        <meta name="description" content="website description" />
        <meta name="keywords" content="website keywords, website keywords" />
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta http-equiv="refresh" content="222;url=plataforma.php">
        <link rel="stylesheet" type="text/css" href="../style/plataformaStyle.css" />
        <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
            google.charts.load("current", {packages:["corechart"]});
            google.charts.setOnLoadCallback(drawChart);
            function drawChart() {
                var data = google.visualization.arrayToDataTable([
                    ['Task', 'Hours per Day'],
                    ['Improvisador',     11],
                    ['Agil de mente',      2],
                    ['Formal',  2],
                    ['Sistematico', 2],
                    ['Imaginativo',    7]
                ]);

                var options = {

                    pieHole: 0.4,
                    backgroundColor:'white',
                };

                var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
                chart.draw(data, options);

            }
        </script>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
                var data = google.visualization.arrayToDataTable([
                    ['Dia', 'Seguidores', 'Visitantes'],
                    ['01',  10,      20],
                    ['02',  5,      76],
                    ['03',  22,       11],
                    ['05',  5,      4],
                    ['06',  25,      154],
                    ['07',  15,      34],
                    ['08',  12,      24],
                    ['09',  5,      14],
                    ['10',  44,      62],
                    ['11',  67,      84],
                    ['12',  96,      154],

                ]);


                var options = {
                    //title: 'Mi rendimiento',

                    hAxis: {title: 'Dias',  titleTextStyle: {color: '#333'}},
                    vAxis: {minValue: 0}

                };

                var chart = new google.visualization.AreaChart(document.getElementById('areachart'));
                chart.draw(data, options);
            }
        </script>
        

    </head>
    <body>
        <header>
            <div id="particles-js">
                <script type="text/javascript" src="style/particles.js"></script>
                <script type="text/javascript" src="style/app.js"></script>
            </div>
        </header>

        <div id=wrapper>

            <div id=menuVert>
                <div class=sub>
                    <img src="style/Flashback0102gris.png" width="40%">
                    <label class=fadeIn>FLASHBACK</label>
                </div>
                <!--<audio src="music/Relaxing Japanese Music - Moonlit Sky.mp3">

                </audio>
                <embed src="music/Relaxing Japanese Music - Moonlit Sky.mp3" width="180" height="0" loop="true" autostart="true" hidden="true" />-->
                <ul>
                    <br>
                    <span>Personal</span><br>
                    <div>
                        <li><a id="dashboardicon"  href="plataforma.php">Dashboard</a></li>
                    </div>
                    <span>Progreso</span><br>
                    <li ><a id="tendenciaicon" href="enconstruccion.html" >Tendencias</a></li>
                    <li ><a id="progressicon" href="enconstruccion.html">Experencia</a></li>
                    <span>Creacion</span><br>
                    <li ><a id="escribiricon" href="enconstruccion.html">Escribir</a></li>
                    <span>Finanzas</span><br>
                    <li ><a id="walleticon" href="enconstruccion.html">Wallet</a></li>
                    <span>Soporte</span><br>
                    <li ><a id="contactaricon" href="enconstruccion.html">Contactar</a></li>
                    <li ><a id="faqicon" href="enconstruccion.html">FAQ</a></li>
                    <span>Soportanos :)</span>
                    <li ><a id="donaricon" href="enconstruccion.html">Donar</a></li>


                </ul>
            </div>
            <br><br><br>
            <div id=perfil>
                <div>
                    <img id=imgPerfil src="style/FESiVv4.jpg" width="500px">
                </div>
                <div id=perfil1>
                    <img src="style/fotonoticia_20171117100545_640.jpg" width="110px">
                    <img id=imgSec1 src="style/iconos/IconPack/6464/axeDouble2.png">
                    <img id=imgSec2 src="style/iconos/IconPack/6464/axeDouble2.png">
                    <span id=sp1>Escritor : Gimli1488</span>
                    <legend>Seguidores : 143<img src="style/iconos/multiple-users-silhouette.png"></legend><br>
                    <span id=sp2>"Mi pluma es el hacha" </span>
                    <div id=perfil2>
                        <p>Business administrator and finance, blockchain enthusiast, future > present , learning computer enginering and programming.I started using this platform when i first saw it on the internet, it impacted so hard that i registered instantly, its fun and social. What more do you want?</p>


                    </div>

                    <ul>
                        <li id=logros><p>  logros:</p></li>
                        <li><img src="style/iconos/IconPack/6464/axe2.png" ></li>
                        <li><img id=limg2 src="style/iconos/IconPack/6464/axeDouble2.png"></li>
                        <li><img id=limg3 src="style/iconos/IconPack/6464//armor%202.png"></li>
                        <li><img id=limg4 src="style/iconos/IconPack/6464/document.png"></li>
                        <li><img id=limg5 src="style/iconos/IconPack/6464/gemGreen.png"></li>
                        <li><img id=limg6 src="style/iconos/IconPack/6464/gemRed.png"></li>
                        <li><img id=limg7 src="style/iconos/IconPack/6464/hammer.png"></li>


                    </ul>


                </div>


            </div>
            <div id=post>
                <img  id=gimlyPost src="style/fotonoticia_20171117100545_640.jpg" width="70px" height="70">
                <label>Gimli1488</label>
                <div class=radioA>
                    <img src="style/iconos/team.png" width="40px" ><br>
                    <input type="radio" selected>
                </div>
                <div class=radioA>
                    <img src="style/iconos/user.png" width="40px"><br>
                    <input type="radio">
                </div>
                <div class=radioA>
                    <img src="style/iconos/detective.png" width="40px"><br>
                    <input type="radio">

                </div>

                <form method="post" action="<?php echo $_SERVER['$PHP_SELF'];?>">
                    <textarea placeholder=" ¿En qué estas pensando ?" rows="4" cols="50" name="textArea" required></textarea>


                    <div class=radioB>
                        <input id=b class=inputfile type="file" name=file>
                        <label for="file" id=inputlabel><img id=a src="style/iconos/attachment.png" width="30px" id=a></label>
                    </div>
                    <script src="https://code.jquery.com/jquery-2.2.4.js"></script>
                    <script>
                        $("#a").on("click", function() {
                            $("#b").trigger("click");
                        });
                    </script>
                    <div >

                        <input id=radioC name="enviarboton" type="submit" value=Enviar>


                    </div>

                </form>

            </div>
            <div id=logrosPerfil>
                <img src="style/05153ebe148221af6e66fcd9b07c96af.png">
                <div id=logro1><p>Objetivos</p></div>
                <div id=logro2>
                    <span>  "Erudito"</span>
                    <img src="style/iconos/IconPack/6464/tome.png">
                    <progress max="100" value="80"></progress>
                </div>
                <div id=logro3>
                    <span>  "Odiado por muchos, querido por pocos"</span>
                    <img src="style/iconos/IconPack/6464/heart.png">
                    <progress max="100" value="50"></progress>
                </div>
                <div id=logro4>
                    <span>  "Maquina de hacer dinero"</span>
                    <img src="style/iconos/IconPack/6464/coin.png">
                    <progress max="100" value="67"></progress>
                </div>
            </div>
            <div id=nivelActual>
                <img src="style/helmet.png" width="35%">
                <span>NVL. 7</span>
                <progress id=nivelBar max="100" value="67"></progress>
                <p>Rango 7 , disfrutas de cierto poder y influencia, los jovenes te idolatran y los ancianos te respetan, solo el tiempo dirá si es merecido o no.</p>
            </div>
            <div class=fadeIn id="donutchart" style="width: 540px; height: 500px;"></div>
            <div class=fadeIn id="areachart" style="width: 540px; height: 300px;"></div>
            <div class=fadeIn id=mirendimiento>MI RENDIMIENTO</div>
            <div class=fadeIn id=tushabilidades>TUS HABILIDADES</div>
            <div id=Presult><br><br>
                <span id=feedresult>FEED</span>
                <article><img src="style/fotonoticia_20171117100545_640.jpg" width=65px height=65px><div class=cabecera><span>@gimli1488 - Enano codicioso<a href=#><div id=iconoGuardar></div></a><a href=#><div id=iconoBorrar></div></a><a href=#><div id=iconoIota></div></a></span></div><p>Varias pariatur hic ullamco, nam quorum domesticarum ea noster reprehenderit 
                    incurreret amet appellat, a malis instituendarum, ab duis nulla ut excepteur de 
                    expetendis illum ad probant sempiternum, o summis esse si singulis. <a href=#> <i class="em em-face_with_cowboy_hat"></i>@Legolas88</a><a href=#> #LiteraturaMediocre</a><a href=#> #ElBanqueteDeGimli</a>  </p></article>

                <article><img src="style/Legolas.jpg" width=65px height=65px><div class=cabecera><span>@Legolas88 - "Orejas de azucar"<a href=#><div id=iconoGuardar2></div></a><a href=#><div id=iconoBorrar2></div></a><a href=#><div id=iconoIota2></div></a></span></div><p id=p2><a href=#> @ gimli1488</a> Ni en los libros elficos prohibidos de Mordor he leido tal idioma, parece que en cada palabra que pronuncias  estas invocando un demonio diferente... <strong>*se escucha un ruido en la bodega*</strong>, GIMLI QUE HAS HECHO !? <i class="em em-angry"></i><i class="em em-angry"></i></p></article>

                <article><img src="style/fotonoticia_20171117100545_640.jpg" width=65px height=65px><div class=cabecera><span>@gimli1488 - Enano codicioso<a href=#><div id=iconoGuardar3></div></a><a href=#><div id=iconoBorrar3></div></a><a href=#><div id=iconoIota3></div></a></span></div><p id=p3> Tengo que decirte un cosa joven amigo, bueno ... teniendo en cuenta que tienes 534 años no eres demasiado joven ... ¡ Hip !<i class="em em-beer"></i> , el texto que te mandé era una simple distracción para robarte el vino y la hidromiel ! Ha , ha! <i class="em em-grin"></i><i class="em em-grin"></i></p></article>
                <br>
            </div>





        </div>
        <div class="footer">
            <footer>
                <small>&copy; Copyright 2018 , <a href=https://www.google.es/search?source=hp&ei=crFtWuDeJ8O3UeDZrrAJ&q=flashback+company&oq=flashback+company&gs_l=psy-ab.3..35i39k1j0i203k1j0i22i30k1l8.501.2463.0.2585.18.17.0.0.0.0.186.1843.5j10.15.0....0...1c.1.64.psy-ab..3.15.1841.0..0j0i67k1j0i131k1.0.DoO8uLt7OFI target=blank >FLASHBACK Corporation</a></small>
            </footer>
        </div>
    </body>

</html>