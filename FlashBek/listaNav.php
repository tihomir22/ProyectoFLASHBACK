<ul>
    <li>
        <div class="welcome">
            <img style="width:50px;height:50px;border:2px solid white;border-radius: 50%;"src="<?= $_SESSION['avatar'] ?>"><span style="color: white;margin-bottom: 20px;"> <i class="fa fa-star"></i>Nivel <?= $_SESSION['Nivel']?></span><br/>
            <span id="bienv" style="color:white;font-size:12px;">Bienvenido</span><br>
            <span class="user" style="color:white;"><strong><?=$_SESSION['Rango']." ". $_SESSION['username'] ?></strong></span>
        </div>

    </li>

    <li>
        <a href="#">
            <span><i class="fa fa-user"></i></span>
            <span>Usuarios</span>
        </a>
    </li>
    <li>
        <a href="#">

            <span><i class="fa fa-envelope"></i></span>
            <span>Mensajes</span>
        </a>
    </li>

    <li class="active">
        <a href="plataformaN.php">
            <span><i class="fa fa-bar-chart"></i></span>
            <span>Dashboard</span>
        </a>
    </li>
    <li>
        <a href="#">

            <span><i class="fa fa-line-chart"></i></span>
            <span>Tendencias</span>
        </a>
    </li>
    <li>
        <a href="#">

            <span><i class="fa fa-flask"></i></span>
            <span>Experencia</span>
        </a>
    </li>
    <li>
        <a href="#">

            <span><i class="fa fa-pencil"></i></span>
            <span>Escribir</span>
        </a>
    </li>
    <li id="forja" >
        <a href="forja.php">

            <span><i class="ion-fireball" style="font-size: 20px;"></i></span>
            <span style="margin-left: 18px;">The Forge</span>
        </a>
    </li>
    <li>
        <a href="#">

            <span><i class="fa fa-vcard"></i></span>
            <span>Wallet</span>
        </a>
    </li>
    <li>
        <a href="#">

            <span><i class="fa fa-life-bouy"></i></span>
            <span>Contactar</span>
        </a>
    </li>

    <li>
        <a href="#">

            <span><i class="fa fa-newspaper-o"></i></span>
            <span>FAQ</span>
        </a>
    </li>
    <li>
        <a href="#">

            <span><i class="fa fa-heart"></i></span>
            <span>Donar</span>
        </a>
    </li>
    <li>
        <a href="logout.php">
            <span><i class="fa fa-sign-out"></i></span>
            <span>Desconectarse</span>
        </a>
    </li>


</ul>