<?php
    include("conexion.php");

    $id_usuarios = $_GET["id"];
    $Traer_datos_usuario = mysqli_query($conexion,"SELECT * FROM `Usuarios` WHERE id_usuarios='$id_usuarios'");

    $array = mysqli_fetch_array($Traer_datos_usuario);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Producto</title>
</head>
<body>
    <center>
        <h1>Completa los campos que desees editar</h1>

        <form action="Funciones/valEditar_usuario.php" method="POST">
            <div class="container">
                <label>Nombre:</label>
                <input type="text" value="<?php echo $array['nombre_usuario'];?>" name="nombre_usuario"> <br>
                <label>Apellido:</label>
                <input type="text" value="<?php echo $array['apellido_usuario'];?>" name="apellido_usuario"> <br>
                <label>Correo:</label>
                <input type="text" value="<?php echo $array['correo'];?>" name="correo"> <br>
                <label>Contraseña:</label>
                <input type="text" value="<?php echo $array['pass'];?>" name="pass"> <br>
                <label>Direccion:</label>
                <input type="text" value="<?php echo $array['direccion'];?>" name="direccion"> <br>
                <label>Telefono:</label>
                <input type="text" value="<?php echo $array['telefono'];?>" name="telefono"> <br>
                <input type="hidden" value="<?php echo $array['id_usuarios'];?>" name="id_usuario">

                <input type="submit" name="Enviar">
            </div>
        </form>
    </center>
</body>
</html>