<?php
    include "conexion.php";

        $id = $_POST['id'];
        $producto = $_POST['producto'];
        $precio = $_POST['precio'];
        $descripcion = $_POST['descripcion'];
        $existencias = $_POST['existencias'];
        $ruta = $_POST['ruta'];

        $realizar_actualizacion = mysqli_query($conexion, "UPDATE Inventario SET producto='$producto', precio = '$precio', descripcion = '$descripcion', existencias = '$existencias', ruta = '$ruta' WHERE id=$id");

        if($realizar_actualizacion){
            header("location: productosdesdeadmin.php");
        }else{
            echo "Ups, parece que algo salio mal";
            echo $id; 
            echo $producto;
            echo $precio;
            echo $descripcion;
            echo $existencias;
            echo $ruta;
        }
    
?>