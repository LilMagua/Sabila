<?php
    include "conexion.php";

    $Productos = "SELECT * FROM Productos";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/csscatalogo.css">
    <link rel="icon" href="img/favicon.ico">
    <title>Catalogo</title>
</head>
<body>

<!--Inicio del Navbar-->
<?php
    include("navbar.php");
?>
<!--Fin del Navbar-->


<center>
    <h1 style="margin-top: 100px; margin-bottom: 50px">Productos Disponibles.</h1>
</center>

<?php 
    $traer = mysqli_query($conexion, $Productos); 
    while($row = mysqli_fetch_assoc($traer)){
?>

    
<div>     
<center>
    <button class="boton">
        <img src="<?php echo $row["ruta"] ?>" class="imagenproducto" width="150px" height="150px" style="float: left; padding-left: 0px;"  alt="">
        <div style="width: 320px; height: 150px; float: left;">
            <h3 class="text-left tituloproducto"><?php echo $row["nombre_producto"] ?></h3>
            <p class="text-left descripcionproducto">Descripcion: <?php echo $row["descripcion"] ?></p>
            <p class="text-left descripcionproducto">Precio: <?php echo $row["precio"] ?> $</p>    
        </div>
  
              
    </button>
    </center>         
</div>

<center>
    <a href='producto_individual.php?id=<?php echo $row["id_productos"]?>'>
        <button class="botonagregar  mb-5" style="padding-left: 400px; padding-right: 400px;">Comprar</button>
    </a>  
</center>


<?php 
    }
?>

<footer class="foter mt-5">
    <a class="opcionesfooter ml-5 mr-3" href="">Inicio</a>
    <a class="opcionesfooter ml-3 mr-3" href="">Portafolio</a>
    <a class="opcionesfooter ml-3 mr-3" href="">¿Quienes somos?</a>
    <a class="opcionesfooter ml-3 mr-3" href="">Contacto</a>
    <a class="opcionesfooter ml-3 mr-3" href="">Ingresar</a>
    <p class="text-right wer">@Copyright-2020</p>
    <p class="text-right">Todos los derechos reservados</p>
</footer>


</body>
</html>


