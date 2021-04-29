<?php
    include("../conexion.php");
    session_start();

    $id_producto = $_GET["id"];
    $id_usuario = $_SESSION["id_usuario"];

    $eliminar_del_carrito = mysqli_query($conexion,"DELETE FROM `Carrito` WHERE id_usuarios1 = '$id_usuario' AND id_productos1 = '$id_producto'");

    if($eliminar_del_carrito){
        header("location: ../perfil_usuario.php");
    }else{
        echo "Ups, ha ocurrido algo";
    }

?>