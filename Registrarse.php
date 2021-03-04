<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/Registro.css">
    <link rel="icon" href="img/favicon.ico">
    <title>Registro</title>
</head>
<body>

<?php
    //Incluye el navbar y la validacion del registro satisfactorio.
    include("navbar.php");
    //include("valRegistro.php");
?>


<!--Inicio formulario -->
<form action="valRegistro.php" method="POST" id="formulario">
    <div class="divimagen mt-5">
        <div class="container">
            <div class="row">
                <div class="col-2"></div>
                <div class="col-8 divcomoseria">
                    <center>
                        <h1 class="text-white mt-4">Formulario de Registro</h1>
                        <p class="text-white">Lorem ipsum dolor sit amet consectetur.</p>
                    </center>
                    <div class="row">
                        <div class="col-6">
                            <input name="nombre" id="nombre" class="input mt-3" type="text" placeholder="Nombres">
                            <br>
                            <input name="apellido" id="apellido" class="input mt-5" type="text" placeholder="Apellidos">
                            <br>
                            <input name="correo" id="correo" class="input mt-5" type="text" placeholder="Correo">
                            <br>
                            <input name="pass" id="pass" class="input mt-5" type="password" placeholder="Contraseña">
                        </div>
                        <div class="col-6">
                            <input name="direccion" id="direccion" class="input mt-3" type="text" placeholder="Direccion">
                            <br>
                            <input name="telefono" id="telefono" class="input mt-5" type="text" placeholder="Telefono">
                            <br>
                            <input name="rol" class="input mt-5" type="text" placeholder="Codigo empresarial">
                        </div>
                    </div>
                    <center>
                        <input id="enviar" name="enviar" type="submit" class="boton btn-block mt-5">
                        <p id="error" class="error"></p>
                    </center>
                </div>
                <div class="col-2"></div>
            </div>
        </div>
    </div>
</form>
<!--Final formulario -->

<script src="validar.js"></script>
</body>
</html>


