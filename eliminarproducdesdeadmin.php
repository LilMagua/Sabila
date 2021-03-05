<?php
    include "conexion.php";

    $id = $_GET["id"];
    $eliminar = mysqli_query($conexion, "DELETE FROM Inventario WHERE id=$id");

    if($eliminar){
        header("location: admin.php");
    }else{
        echo "No se pudo eliminar correctamente la cuenta";
    }
?>