<?php
    include("../conexion.php");
    session_start();

    $rol = $_SESSION["rol"];

    if(isset($_POST["Enviar"])){

        //Capturar los datos de los input.
        $id_usuario = $_SESSION["id_usuario"];
        $nombre_usuario = trim($_POST["nombre"]);
        $apellido = trim($_POST["apellido"]);
        $pass = trim($_POST["pass"]);
        $correo = trim($_POST["correo"]);
        $direccion = trim($_POST["direccion"]);
        $telefono = trim($_POST["telefono"]); //Solo entra un numero pequeño 5 digitos

        //Cambiar los datos de $_SESSION

        $_SESSION["nombre"] = $nombre_usuario;
        $_SESSION["apellido"] = $apellido;
        $_SESSION["pass"] = $pass;
        $_SESSION["correo"] = $correo;
        $_SESSION["direccion"] = $direccion;
        $_SESSION["telefono"] = $telefono;


        $Insertar_Datos = mysqli_query($conexion,"UPDATE `Usuarios` SET `nombre_usuario`='$nombre_usuario',`apellido_usuario`='$apellido',`correo`='$correo',`pass`='$pass',`direccion`='$direccion',`telefono`='$telefono' WHERE id_usuarios='$id_usuario'");

        if($Insertar_Datos){
            if($rol == 1){
                header("location: ../perfil_usuario.php?actualizado=1");
            }else{
                header("location: ../perfil_admin.php?actualizado=1");
            }
        }else{
            echo "Ups, parece que algo salio mal";
            echo $id_usuario; 
            echo $nombre_usuario;
            echo $apellido;
            echo $correo;
            echo $pass;
            echo $direccion;
            echo $telefono;
        }
    }
?>