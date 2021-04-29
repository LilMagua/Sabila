<?php
    include("../conexion.php");

    if(isset($_POST["Enviar"])){

        $id_usuario =  trim($_POST["id_usuario"]);
        $nombre_usuario = trim($_POST["nombre_usuario"]);
        $apellido = trim($_POST["apellido_usuario"]);
        $correo = trim($_POST["correo"]);
        $pass = trim($_POST["pass"]);
        $direccion = trim($_POST["direccion"]);
        $telefono = trim($_POST["telefono"]);


        $Realizar_cambio = mysqli_query($conexion,"UPDATE `Usuarios` SET `nombre_usuario`='$nombre_usuario',`apellido_usuario`='$apellido',`correo`='$correo',`pass`='$pass',`direccion`='$direccion',`telefono`='$telefono' WHERE id_usuarios = '$id_usuario'");

        if($Realizar_cambio){
            header("location: ../usuarios_registrados.php?correcto=1");
        }else{
            header("location: ../usuarios_registrados.php?correcto=1");
        }
    }
?>