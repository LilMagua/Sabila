<?php
    include("../conexion.php");

    $id_usuario = $_GET["id"];

    $Vaciar_carrito = mysqli_query($conexion,"DELETE FROM `Carrito` WHERE id_usuarios1= '$id_usuario'");

    if($Vaciar_carrito){
        $Vaciar_pedidos = mysqli_query($conexion,"DELETE FROM `Pedidos` WHERE id_usuarios2= '$id_usuario'");

        if($Vaciar_pedidos){
            $Eliminar_usuario = mysqli_query($conexion,"DELETE FROM `Usuarios` WHERE id_usuarios = '$id_usuario'");

            if($Eliminar_usuario){
                header("location: salir.php");
            }else{
                echo "No se logro eliminar correctamente la cuenta";
            }
        }
    }
?>



<?php
    /*include("../conexion.php");

    $id = $_GET["id"];
    $eliminar = mysqli_query($conexion, "DELETE FROM `Usuarios` WHERE id_usuarios='$id'");

    if($eliminar){
        header("location: salir.php");
    }else{
        echo "No se pudo eliminar correctamente la cuenta";
    }
?>