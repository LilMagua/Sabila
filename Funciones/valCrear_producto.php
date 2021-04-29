<?php
    include("../conexion.php");

    if(isset($_POST["Enviar"])){

        $producto = trim($_POST["producto"]);
        $precio = trim($_POST["precio"]);
        $descripcion = trim($_POST["descripcion"]);
        $existencias = trim($_POST["existencias"]);
        $ruta = trim($_POST["ruta"]);

        $Insertar_producto = mysqli_query($conexion,"INSERT INTO `Productos`( `nombre_producto`, `precio`, `descripcion`, `existencias`, `ruta`) VALUES ('$producto','$precio','$descripcion','$existencias','$ruta')");

        if($Insertar_producto){
            header("location: ../productos_registrados.php");
        }else{
            echo "Algo ocurrio y el producto no se pudo crear";
        }
    }
?>