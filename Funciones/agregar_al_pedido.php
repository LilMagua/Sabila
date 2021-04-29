<?php
    include("../conexion.php");
    session_start();

    if(isset($_POST["enviar"])){

        $id_producto = $_POST["id_producto"];
        $cantidad_comprada = $_POST["cantidad_comprada"];
        $id_usuario =  $_SESSION["id_usuario"];

        $consulta_precio_producto = mysqli_query($conexion,"SELECT `precio`FROM `Productos` WHERE id_productos='$id_producto'");

        $array_precio_producto = mysqli_fetch_array($consulta_precio_producto);

        $precio_producto = $array_precio_producto["precio"] * $cantidad_comprada;

        $verificar_producto_pedido = mysqli_query($conexion,"SELECT COUNT(*) AS contar FROM `Carrito` WHERE id_productos1='$id_producto' AND id_usuarios1='$id_usuario'");

        $array_verificar_producto_pedido = mysqli_fetch_array($verificar_producto_pedido);

        if($array_verificar_producto_pedido["contar"] > 0){
            $cantidad_comprada_pedido = mysqli_query($conexion,"SELECT  `unidades_compradas`FROM `Carrito` WHERE id_productos1='$id_producto' AND id_usuarios1='$id_usuario'");

            $array_cantidad_comprada_pedido = mysqli_fetch_array($cantidad_comprada_pedido);

            $cantidad_comprada_pedido_act = $array_cantidad_comprada_pedido["unidades_compradas"];

            $unidades_compradas_Act = $cantidad_comprada_pedido_act + $cantidad_comprada;
            
            $sumar_al_pedido = mysqli_query($conexion,"UPDATE `Carrito` SET `unidades_compradas`=$unidades_compradas_Act WHERE id_productos1='$id_producto' AND id_usuarios1='$id_usuario'");

            if($sumar_al_pedido){
                header("location: ../perfil_usuario.php");
            }else{
                echo "Ocurrio un error";
            }
        }else{
            $agregar_al_pedido = mysqli_query($conexion,"INSERT INTO `Carrito`(`id_usuarios1`, `id_productos1`, `unidades_compradas`, `precio_unidades_compradas`) VALUES ('$id_usuario','$id_producto','$cantidad_comprada','$precio_producto')");

            if($agregar_al_pedido){
                header("location: ../perfil_usuario.php");
            }else{
                echo "Ocurrio un error";
            }
        }
    }
?>