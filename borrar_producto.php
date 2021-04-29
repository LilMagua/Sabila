<?php
    include("../conexion.php");

    $id_producto = $_GET["id"];
    $Eliminar_productos = mysqli_query($conexion,"DELETE FROM `Productos` WHERE id_productos = '$id_producto'");

    if($Eliminar_productos){
        header("location: ../productos_registrados.php");
    }else{
        echo "No se logro eliminar correctamente el producto";
    }
?>