<?php
    include("../conexion.php");
    session_start();

    date_default_timezone_set("America/Mexico_City");

    $dia = date("d") + 2;
    $fecha = date("Y-m-$dia");

    $id_usuario = $_SESSION["id_usuario"];

    $datos_carrito = mysqli_query($conexion, "SELECT `id_usuarios1`, `id_productos1`, `unidades_compradas`, `precio_unidades_compradas` FROM `Carrito` WHERE id_usuarios1 = '$id_usuario'"); 
    while($row = mysqli_fetch_assoc($datos_carrito)){

        $id_producto = $row["id_productos1"];
        $unidades_compradas = $row["unidades_compradas"];
        $precio_unidades_compradas =$row["precio_unidades_compradas"];

        $insertar_en_pedido = mysqli_query($conexion,"INSERT INTO `Pedidos`(`id_usuarios2`, `id_productos2`, `unidades_compradas`, `precio_unidades_compradas`, `fecha`) VALUES ('$id_usuario','$id_producto', '$unidades_compradas' , '$precio_unidades_compradas','$fecha')");
        
        if($insertar_en_pedido){
            $eliminar_del_carrito = mysqli_query($conexion,"DELETE FROM `Carrito` WHERE id_usuarios1 = '$id_usuario'");

            if($eliminar_del_carrito){
                header("location: ../perfil_usuario.php");
            }
        }
    }


    
?>