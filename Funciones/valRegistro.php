<?php
    include("../conexion.php");
    session_start();
    
    if(isset($_POST["Enviar"])){

        //Capturar los datos de los input.
        $pass_Admin = trim($_POST["pass_admin"]);
        $nombre_usuario = trim($_POST["nombre"]);
        $apellido = trim($_POST["apellido"]);
        $pass = trim($_POST["pass"]);
        $correo = trim($_POST["correo"]);
        $direccion = trim($_POST["direccion"]);
        $telefono = trim($_POST["telefono"]); //Solo entra un numero pequeño 5 digitos

        //Verificar si se intenta registrar como Admin.
        if($pass_Admin != null){
            //echo "El campo tiene contenido";

            $Verificar_Pass_Admin = mysqli_query($conexion,"SELECT COUNT(*) AS contar FROM `Pass_Admin` WHERE pass_admin = '$pass_Admin'");

            $array_verificar_pass = mysqli_fetch_array($Verificar_Pass_Admin);

            if($array_verificar_pass["contar"]>0){

                $Insertar_Datos = mysqli_query($conexion,"INSERT INTO `Usuarios`(`nombre_usuario`, `apellido_usuario`, `correo`, `pass`, `direccion`, `telefono`, `rol_id`) VALUES ('$nombre_usuario','$apellido','$correo','$pass','$direccion','$telefono','2')");

                if($Insertar_Datos){
                    header("location: ../Ingresar.php");
                }else{
                    echo"No se lograron ingresar los datos";
                }
            }else{
                echo "La contraseña para Administrador no es correcta";
            }

        }else{
            //echo "El campo esta vacio";

            $Insertar_Datos = mysqli_query($conexion,"INSERT INTO `Usuarios`(`nombre_usuario`, `apellido_usuario`, `correo`, `pass`, `direccion`, `telefono`, `rol_id`) VALUES ('$nombre_usuario','$apellido','$correo','$pass','$direccion','$telefono','1')");

            if($Insertar_Datos){
                header("location: ../Ingresar.php");
            }else{
                echo"No se lograron ingresar los datos y se intenta acceder como usuario";
            }
        }
    }
?>