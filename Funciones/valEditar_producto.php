<?php
    include("../conexion.php");

    if(isset($_POST["Enviar"])){

        $id_producto = trim($_POST["id_producto"]);
        $nombre_producto = trim($_POST["nombre_producto"]);
        $precio = trim($_POST["precio"]);
        $descripcion = trim($_POST["descripcion"]);
        $existencias = trim($_POST["existencias"]);
        $ruta = trim($_POST["ruta"]);

        $Realizar_cambio = mysqli_query($conexion,"UPDATE `Productos` SET `nombre_producto`='$nombre_producto',`precio`='$precio',`descripcion`='$descripcion',`existencias`='$existencias',`ruta`='$ruta' WHERE id_productos='$id_producto'");

        if($Realizar_cambio){
            header("location: ../productos_registrados.php");
        }else{
            echo "No se logro realizar correctamente la actulizacion";
        }
    }
?>