<?php
    include("../conexion.php");

    $id_usuario = $_GET["id"];

    $Vaciar_carrito = mysqli_query($conexion,"DELETE FROM `Carrito` WHERE id_usuarios1= '$id_usuario'");

    if($Vaciar_carrito){
        $Vaciar_pedidos = mysqli_query($conexion,"DELETE FROM `Pedidos` WHERE id_usuarios2= '$id_usuario'");

        if($Vaciar_pedidos){
            $Eliminar_usuario = mysqli_query($conexion,"DELETE FROM `Usuarios` WHERE id_usuarios = '$id_usuario'");

            if($Eliminar_usuario){
                header("location: ../usuarios_registrados.php?borrado=1");
            }else{
                echo "No se logro eliminar correctamente el usuario";
            }
        }
    }
?>