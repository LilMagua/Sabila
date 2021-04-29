<?php
    include("../conexion.php");

    $id_producto = $_GET["id"];

    $vaciar_carrito = mysqli_query($conexion,"DELETE FROM `Carrito` WHERE id_productos1 = '$id_producto'");

    if($vaciar_carrito){
        $vaciar_pedido = mysqli_query($conexion,"DELETE FROM `Pedidos` WHERE id_productos2 = '$id_producto'");

        if($vaciar_pedido){
            $Eliminar_productos = mysqli_query($conexion,"DELETE FROM `Productos` WHERE id_productos = '$id_producto'");

            if($Eliminar_productos){
                header("location: ../productos_registrados.php");
            }else{
                echo "No se logro eliminar correctamente el producto";
            }
        }
    }
?>