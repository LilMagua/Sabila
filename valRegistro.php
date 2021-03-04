<?php
    include("conexion.php");

    if($conexion){
        echo "<h1>TODO MELO</h1>";
    }else{
        echo "ALGO SALIO MAL";
    }


    if(isset($_POST['enviar'])){

            //Variables que capturan los datos de los inputs de Registrarse.php
            $nombre = trim($_POST['nombre']);
            $apellido = trim($_POST['apellido']);
            $correo = trim($_POST['correo']);
            $pass = trim($_POST['pass']);
            $direccion = trim($_POST['direccion']);
            $telefono = trim($_POST['telefono']);
            $rol = trim($_POST['rol']);

            //Verificar la existencia de ese correo, telefono y direccion, para no duplicar usuarios.
            $verificar_correo = mysqli_query($conexion,"SELECT `correo`, `direccion`, `telefono` FROM `usuarios` WHERE correo='$correo'");

            $verificar_telefono = mysqli_query($conexion,"SELECT `correo`, `direccion`, `telefono` FROM `usuarios` WHERE telefono='$telefono'");

            $verificar_direccion = mysqli_query($conexion,"SELECT `correo`, `direccion`, `telefono` FROM `usuarios` WHERE direccion='$direccion'");


            //No mandar el mensaje de "Datos ya registrados" con un alert, una solucion mas elegante.
            if(mysqli_num_rows($verificar_correo) > 0 || mysqli_num_rows($verificar_telefono) > 0 || 
               mysqli_num_rows($verificar_direccion) > 0){
                   ?>
                   <script> alert("Esos datos ya estan registrados");</script>
                   <?php
               }else{
                    //Insertar datos.
                    $insertar = "INSERT INTO usuarios(nombre, apellido, correo, pass, direccion, telefono, rol_id) VALUES ('$nombre','$apellido','$correo','$pass','$direccion','$telefono','$rol')";

                    $realizar = mysqli_query($conexion,$insertar);
                    header("location: Ingresar.php");
               }



        
    }
?>