<?php
    if(isset($_POST['register'])){
        include_once 'baseDatos.php';
        $usuario = mysqli_real_escape_string($connection,$_POST['username']);
        $email = mysqli_real_escape_string($connection,$_POST['email']);
        $password = mysqli_real_escape_string($connection,$_POST['password']);
        $usuario = mysqli_real_escape_string($connection,$_POST['username']);
        $usuario = mysqli_real_escape_string($connection,$_POST['username']);
        
        
    }else{
        header("Location: ../login.php");
        exit();
    }


?>