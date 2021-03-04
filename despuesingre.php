<?php
    include("navbar.php");
    session_start();

    $correo = $_SESSION['correo'];

    if(!isset($correo)){
        header("location: Ingresar.php");
    }else{

        echo " <center>
        <h1>HA INGRESADO CORRECTAMENTE</h1>
        <h1> Hola, como vas $correo </h1>
        <a href='salir.php'>Salir</a>
        </center>";
    }
?>
    
