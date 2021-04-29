<?php
    include("conexion.php");
    session_start();

    $id_producto = $_GET["id"];

    $datos_producto = mysqli_query($conexion, "SELECT * FROM `Productos` WHERE id_productos='$id_producto'");

    $array_datos_producto = mysqli_fetch_array($datos_producto);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="icon" href="img/favicon.ico">
    <title>Comprar</title>
</head>
<body>



<?php
    include ("navbar.php");
?>


            <div class="container mt-5">
                <div class="row">
                    <div class="col-8">
                        <img class="imgproducto" src="<?php echo $array_datos_producto["ruta"]?>" alt="" width="550px" height="550px">
                    </div>
                    <div clas="col-4">
                        <h1 class="Titulo"><?php echo $array_datos_producto["nombre_producto"]?></h1>
                        <h3>$<?php echo $array_datos_producto["precio"]?></h3>
                        <br>
                    
                        <form action="Funciones/agregar_al_pedido.php" method="POST">
                            <h5>Cantidad (Kg)</h5>
                            <input type="hidden" value="<?php echo $id_producto?>" name="id_producto">
                            <input class="input" type="number" name="cantidad_comprada">
                            <br>
                            <input class="botonagregar" type="submit" value="Comprar" name="enviar">

                        </form>
                    </div>
                </div>
            </div>

       
    


<footer class="foter mt-5">
    <a class="opcionesfooter ml-5 mr-3" href="">Inicio</a>
    <a class="opcionesfooter ml-3 mr-3" href="">Portafolio</a>
    <a class="opcionesfooter ml-3 mr-3" href="">¿Quienes somos?</a>
    <a class="opcionesfooter ml-3 mr-3" href="">Contacto</a>
    <a class="opcionesfooter ml-3 mr-3" href="">Ingresar</a>
    <p class="text-right wer">@Copyright-2020</p>
    <p class="text-right">Todos los derechos reservados</p>
</footer>




<style>
    .imgproducto{
        margin-top: 50px;
        float: left;
    }
    .Titulo{
        margin-top: 80px;
    }


    .input{
    color: black;
    border-style: none;
    border: 2px solid black;

    background-color: transparent;
    font-size: 20px;
    }
    .input:focus { outline: none; }
    .input::placeholder{color: black;}


    .botonagregar{
    transition: all 1s ease;
    border-style: none;
    font-size: 18px;
    color: white;
    background-color: black;
    margin-top: 50px;
    padding-top: 20px;
    padding-bottom: 20px;
    padding-left: 100px;
    padding-right: 100px;
}
.botonagregar:hover{
    transition: all 1s ease;
    color: white;
    background-color: #387224;
}



.foter{
    padding: 15px;
    background-color: #387224;
}
.opcionesfooter{
    color: white;
}
.opcionesfooter:hover { color: white; }


</style>

</body>
</html>

