<?php
    session_start();

    if(isset($_SESSION["rol"])){
        $rol = $_SESSION["rol"];
        
        if($rol == 1){
            header("location: perfil_usuario.php");
        }else{
            header("location: perfil_admin.php");
        }
    }else{
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Ingresar.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="icon" href="img/favicon.ico">
    <link rel="stylesheet" href="package/dist/sweetalert2.min.css">
    
    <title>Ingresar</title>
</head>

<body>

<?php
    //Incluye el navbar y la validacion del inicio de sesion.
    include("navbar.php");
?>

<!--Inicio de formulario para inicio de sesion-->
<form action="Funciones/valIngreso.php" method="POST">
    <div class="divimagen">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <div class="divingreso">
                    <h1 class="text-center text-white  mt-5 titulo">Formulario de Ingreso</h1>
                    <h5 class="text-center text-white mt-5">¿No tienes una cuenta? <a class="boton1" href="Registrarse.php">¡Registrate aqui!</a></h5>
                    <br>
                    <center>
                        <input name="correo" class="input mt-3" type="text" placeholder="Correo">
                        <br>
                        <input name="pass" class="input mt-5 mb-5" type="password" placeholder="Contraseña">
                        <br>
                        <button name="Enviar" class="boton btn-block mt-5" type="submit">Ingresar</button>
                    </center>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
</form>
<!--Fin de formulario para inicio de sesion-->


<style>
    .boton1{
    transition: all 1s ease;
    color: white;
    background-color: #387224;
    border-style: none;
    font-size: 16px;
    margin-left: 10px;
    padding-left: 50px;
    padding-right: 50px;
    padding-top: 15px;
    padding-bottom: 15px;
    border-radius: 10px;
}
.boton1:hover{
    transition: all 1s ease;
    color: #387224;
    background-color: white;
}

</style>
<script src="package/dist/sweetalert2.all.min.js"></script>
</body>
</html>

<?php
    }
?>


<?php
    if(isset($_GET["error"])){
?>
    <script>
        Swal.fire({
            icon: 'error',
            title: 'La contraseña o usuario es incorrecto',
        })
    </script>
<?php
    }
?>