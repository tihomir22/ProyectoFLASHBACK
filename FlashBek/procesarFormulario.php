<?php
$boolean=false;
if(isset($_POST['nombrelogin'])){
    if($_POST['nombrelogin']=="admin"){
        // echo "introduciste admin";

    }else{
        $boolean=true;


    }


}else{
    echo "debes introducir una cuenta";

}
echo "<br>";

if(isset($_POST['nombrepass'])){
    if($_POST['nombrepass']=="admin"){
        //echo "introduciste admin";


    }else{
        $boolean=true;
    }


}else{
    echo "debes introducir una contraseña";

}
echo "<br>";

if($boolean==true){
    echo "Introduciste una cuenta o contraseña erroneas";

}else{
    echo "Bievenido ";
    echo $_POST['nombrelogin'];
    echo "<br>";
    header('Location: plataforma.php');
    exit;

} 

echo '<a  href=index.html>Clickeame para volver al inicio</a>';


?>

