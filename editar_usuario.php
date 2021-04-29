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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="icon" href="img/favicon.ico">
    <title>Mi perfil</title>
</head>
<body>



<!--Inicio del Navbar-->
<?php
    include("navbar.php");
?>
<!--Fin del Navbar-->

<div class="divimagen mt-5">
    <div class="row">
        <div class="col-1 asd"></div>
        <div class="col-10 mt-2">
            <div class="row"> 
                <div class="col-3 asd weq">
                    <h4 class="text-center" style="margin-top: 150px;">¿Algun problema? Contactanos</h4>
                    <h5 class="text-center texto2">distribuidorajjc@gmail.com</h5>
                    <h5 class="text-center texto2">+1(585) 902-8665</h5>
                </div>
                <div class="col-9 asd qwe">
                    <center>
                        <h1>Completa los campos que desees editar</h1>

                        <form action="Funciones/valEditar_usuario.php" method="POST">
                            <div class="container">
                                <label>Nombre:</label>
                                <input class="input" type="text" value="<?php echo $array['nombre_usuario'];?>" name="nombre_usuario"> <br>
                                <label>Apellido:</label>
                                <input class="input" type="text" value="<?php echo $array['apellido_usuario'];?>" name="apellido_usuario"> <br>
                                <label>Correo:</label>
                                <input class="input" type="text" value="<?php echo $array['correo'];?>" name="correo"> <br>
                                <label>Contraseña:</label>
                                <input class="input" type="text" value="<?php echo $array['pass'];?>" name="pass"> <br>
                                <label>Direccion:</label>
                                <input class="input" type="text" value="<?php echo $array['direccion'];?>" name="direccion"> <br>
                                <label>Telefono:</label>
                                <input  class="input" type="text" value="<?php echo $array['telefono'];?>" name="telefono"> <br>
                                <input class="input" type="hidden" value="<?php echo $array['id_usuarios'];?>" name="id_usuario">

                                <input class="boton" type="submit" name="Enviar" value="Editar Usuario">
                            </div>
                        </form>

                    </center>

                </div>                
            </div>
        </div>
        <div class="col-1 asd"></div>
    </div>
</div>
    
<style>

    .beditar{
        background-color: transparent;
        padding: none;
        border: none;
    }

    .bg-personalizado{
    transition: all 1s ease;
    background-color: #387224;
    }
    .texto1{
        margin-top: 100px;
        color: white;
    }
    .divimagen{
        background: linear-gradient(
            rgba(0, 0, 0, 0.3),
            rgba(0, 0, 0, 0.3)
        ),url("img/fondoperfil.jpg");
        background-size: cover;
        background-position: center;
        height: 100vh;
        margin-bottom: 10px;;
    }
    .asd{
        margin-top: 50px;
        color: white;
    }
    .qwe{
        background-color: rgba(0, 0, 0, 1);
        border-top-right-radius: 20px;
        border-bottom-right-radius: 20px;
    }
    .weq{
        background-color: rgba(0, 120, 0, 0.9);
        border-top-left-radius: 20px;
        border-bottom-left-radius: 20px;
    }
    .texto{
        color: white;
        margin-left: 150px;
        font-size: 22px;
    }
    .texto2{
        color: white;
    }

    .boton{
    transition: all 1s ease;
    border-style: none;
    font-size: 15px;
    color: white;
    background-color: #387224;
    padding-top: 15px;
    padding-bottom: 15px;
    padding-left: 150px;
    padding-right: 150px;
    margin-bottom: 10px;
    border-radius: 5px;
    margin-top: 20px;
}
.boton:hover{
    transition: all 1s ease;
    color: #387224;
    background-color: white;
}


.input{
    color: white;
    border-style: none;
    border-bottom: 2px solid #387224;
    padding-right: 70px;
    background-color: transparent;
    font-size: 20px;
}
.input:focus { outline: none; }
.input::placeholder{color: white;}
</style>
</body>
</html>

