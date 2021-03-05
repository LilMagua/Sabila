<?php
    include "conexion.php";

        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $correo = $_POST['correo'];
        $pass = $_POST['pass'];
        $direccion = $_POST['direccion'];
        $telefono = $_POST['telefono'];

        $realizar_actualizacion = mysqli_query($conexion, "UPDATE usuarios SET nombre='$nombre', apellido = '$apellido', correo = '$correo', pass = '$pass', direccion = '$direccion', telefono = '$telefono' WHERE id=$id");

        if($realizar_actualizacion){
            header("location: salir.php");
        }else{
            echo "Ups, parece que algo salio mal";
            echo $id; 
            echo $nombre;
            echo $apellido;
            echo $correo;
            echo $pass;
            echo $direccion;
            echo $telefono;
        }
    
?>
