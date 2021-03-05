<?php
    session_start();

    $rol_id = $_SESSION["rol_id"];

    if(!isset($rol_id)){
        header("location: ingresar.php");
    }else if($rol_id == 2){
        header("location: cliente.php");
    }else{

    $correo = $_SESSION['correo'];
    $pass = $_SESSION['pass'];
    $id = $_SESSION['id'];
    $nombre = $_SESSION['nombre'];
    $apellido = $_SESSION['apellido'];
    $direccion = $_SESSION['direccion'];
    $telefono = $_SESSION['telefono'];
    $rol_id = $_SESSION['rol_id'];
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
                    <h1 class="text-center mt-5">Mi cuenta</h1>
                    <div class="row">
                        <div class="col-6">
                            <p class=" texto mt-5 ml-5">Nombre: <?php echo $nombre ?></p>

                            <p class="texto ml-5">Apellido: <?php echo $apellido ?></p>

                            <p class="texto ml-5">Correo: <?php echo $correo ?></p>

                            <p class="texto mb-5 ml-5">Pass: <?php echo $pass ?></p>
                        </div>
                        <div class="col-6">
                            <p class="texto mt-5 ">Direccion: <?php echo $direccion ?></p>

                            <p class="texto">Telefono: <?php echo $telefono ?></p>
                            <p class="texto">Rol: Administrador</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <a class="text-center ml-5" href='salir.php'><button class="boton">Cerrar Sesion</button></a>

                            <a class="text-center ml-5" href="actualizar.php?id=<?php echo $id;?>"><button class="boton">Actualizar datos</button></a>
                        </div>
                        <div class="col-6">
                            <a class="text-center ml-5" href="usuariosregistrados.php"><button class="boton">Usuarios registrados</button></a>

                            <a class="text-center ml-5" href="productosdesdeadmin.php"><button class="boton">Inventario</button></a>                        
                        </div>
                    </div>
                    <center>
                        <a   class="comoseria text-center ml-5" class href="eliminarcuenta.php?id=<?php echo $id;?>"><button class="boton_eliminar">Eliminar cuenta</button></a>
                    </center>

                </div>                
            </div>
        </div>
        <div class="col-1 asd"></div>
    </div>
</div>

<script src="confirmar.js"></script>

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
        background-color: rgba(0, 0, 0, 0.9);
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
    padding-top: 10px;
    padding-bottom: 10px;
    padding-left: 100px;
    padding-right: 100px;
    margin-bottom: 10px;
    border-radius: 5px;
}
    .boton:hover{
        transition: all 1s ease;
        color: #387224;
        background-color: white;
    }


    .boton_eliminar{
            transition: all 1s ease;
            border-style: none;
            font-size: 15px;
            color: white;
            background-color: #ff0000;
            padding-top: 10px;
            padding-bottom: 10px;
            padding-left: 150px;
            padding-right: 150px;
            margin-bottom: 10px;
            border-radius: 5px;
    }
    .boton_eliminar:hover{
        transition: all 1s ease;
        color: #387224;
        background-color: white;
    }
</style>
</body>
</html>


<?php
}
?>

