<?php
    include("../conexion.php");
    session_start();

    if(isset($_POST["Enviar"])){
        $correo = trim($_POST["correo"]);
        $pass = trim($_POST["pass"]);

        $Verificar_datos = mysqli_query($conexion,"SELECT COUNT(*) AS contar FROM `Usuarios` WHERE correo = '$correo' AND pass = '$pass'");;

        $array_verificar_datos = mysqli_fetch_array($Verificar_datos);

        if($array_verificar_datos["contar"]>0){

            $Datos_Usuario = mysqli_query($conexion,"SELECT * FROM `Usuarios` WHERE correo = '$correo' AND pass = '$pass'");

            if($Datos_Usuario){
                $row = mysqli_fetch_array($Datos_Usuario);

                $rol = $row["rol_id"];

                $_SESSION["id_usuario"] = $row["id_usuarios"];
                $_SESSION["correo"] = $correo;
                $_SESSION["pass"] = $pass;
                $_SESSION["nombre"] = $row["nombre_usuario"];
                $_SESSION["apellido"] = $row["apellido_usuario"];
                $_SESSION["direccion"] = $row["direccion"];
                $_SESSION["telefono"] = $row["telefono"];
                $_SESSION["rol"] = $rol;

                if($rol == 1){
                    header("location: ../perfil_usuario.php");
                }else{
                    header("location: ../perfil_admin.php");
                }
            }
        }else{
            header("location: ../Ingresar.php?error=1");

        }
    }
?>