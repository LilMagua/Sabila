<?php
    include ("conexion.php");

    if(isset($_POST['Send'])){
        $producto = $_POST['producto'];
        $precio = $_POST['precio'];
        $descripcion = $_POST['descripcion'];
        $existencias = $_POST['existencias'];
        $ruta = $_POST['ruta'];

        $introducir_producto = mysqli_query($conexion,"INSERT INTO Inventario( Producto, Precio, Descripcion, Existencias, Ruta) VALUES ('$producto','$precio','$descripcion','$existencias','$ruta')");

        if($introducir_producto){
            header("location: productosdesdeadmin.php");
        }else{
            echo "Algo ha ocurrido";
        }
    }
?>