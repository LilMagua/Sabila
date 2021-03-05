<?php
    include("conexion.php");
    session_start();


    if(isset($_POST['enviar'])){
        if(strlen($_POST['correo']) > 1 && strlen($_POST['pass']) > 1){

            //Variables que capturan los datos de los inputs de Ingresar.php
            $correo = trim($_POST['correo']);
            $pass = trim($_POST['pass']);

            //Verificar que los datos ingresados son correctos.
            $verificar = mysqli_query($conexion,"SELECT COUNT(*) AS contar FROM usuarios WHERE correo='$correo' AND pass='$pass'");
            $array = mysqli_fetch_array($verificar);

            
            if($array['contar']>0){
                $datos_usuario = "SELECT id, nombre, apellido, correo, pass, direccion, telefono, rol_id FROM usuarios WHERE correo='$correo'";
                $consulta_datos = mysqli_query($conexion, $datos_usuario);

                if($consulta_datos){
                    $row = $consulta_datos->fetch_array();

                    $id = $row["id"];
                    $nombre = $row["nombre"];
                    $apellido = $row["apellido"];
                    $direccion = $row["direccion"];
                    $telefono = $row["telefono"];
                    $rol_id = $row["rol_id"];


                    $_SESSION['correo'] = $correo;
                    $_SESSION['pass'] = $pass;
                    $_SESSION['id'] = $id;
                    $_SESSION['nombre'] = $nombre;
                    $_SESSION['apellido'] = $apellido;
                    $_SESSION['direccion'] = $direccion;
                    $_SESSION['telefono'] = $telefono;
                    $_SESSION['rol_id'] = $rol_id;

                    if($rol_id == 1){
                        header("location: admin.php");
                    }else{
                        header("location: cliente.php");
                    }
                    
                }

            }else{
                ?>
                <script>alert("Los datos son incorrectos");</script>
                <?php
            }

        }else{
            ?>
            <script>alert("Complete todos los campos");</script>
            <?php
        }
    }
?>