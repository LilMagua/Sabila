<?php
    include "conexion.php";

    $id = $_GET["id"];
    $eliminar = mysqli_query($conexion, "DELETE FROM usuarios WHERE id=$id");

    if($eliminar){
        header("location: salir.php");
    }else{
        echo "No se pudo eliminar correctamente la cuenta";
    }
?>