<!DOCTYPE HTML>
<html>

    <head>
        <title>Be a Flash...</title>
        <link rel="icon" href="style/flashback_logo.png">
        <meta name="description" content="website description" />
        <meta name="keywords" content="website keywords, website keywords" />
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <link rel="stylesheet" type="text/css" href="style/styleLogin.css" />
    </head>

    <body>
        <div id=wrapper>
            <header>
            <span>FLASHBACK</span>
            <img src="style/Flashback0102gris.png">
            
            </header>
            <div id=Exposicion>
                <h1>Bievenido a la red social de Flashback, Poet !</h1><br>
                <p>Estas muy cerca de comenzar a disfrutar las ventajas de usar Poet, una plataforma social donde compartir tus relatos y interactuar con otros escritores o lectores.</p>
                
                <div id=registro>
                    <br>
                    <a href="index.html"><input type="button"  value="Registrar ahora" ></a>
                    
                </div>
            </div>
            
            
            <div id=form>
                <p>Acceso/Registro</p>
                <form method="post" action="procesarFormulario.php">
                    <div id=login>
                        <input type="text" name=nombrelogin placeholder="Login..." required>
                        <br>
                    </div>
                    <div id=pass>
                        <input type="password" name=nombrepass placeholder="Contraseña..." required>
                    </div>
                    <div id=recuerdame>
                        <span>Recuerdame</span>
                        <input type="checkbox" name=recuerdame>
                    </div>
                    <br>
                    <input id=boton type=submit value=Enviar name=submit>
                    <div id=registro>
                        <br><span>No tienes una cuenta todavia? Puedes <a href=# >crear cuenta </a>clickeando en el enlace y empezar a disfrutar de la plataforma. Tambien puedes unirte mediante:</span>
                    </div>
                    <div id=cuentas>
                        <a href=#><img id=google src="style/2000px-Google__G__Logo.svg.png" width="17%"></a>
                        <a href=#><img id=twitter src="style/580b57fcd9996e24bc43c53e.png" width="17%"></a>
                    </div>




                </form>
            </div>

        </div>

    </body>
</html>