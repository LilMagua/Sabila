<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/Catalogo.css">
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
    <h1 style="margin-top: 100px;">Productos Disponibles.</h1>
</center>


<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <button class="boton">
                <img src="imgCatalogo/Quinua.jpg" class="imagenproducto" width="150px" height="150px" style="float: left; padding-left: 0px;"  alt="">
                <div style="width: 320px; height: 150px; float: left;">
                    <h3 class="text-left tituloproducto">Quinua</h3>
                    <p class="text-left descripcionproducto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis odit cum repellendus iusto. Aliquam itaque, voluptates fugit ea nobis sapiente.</p>
                </div>
                <center>
                    <a name="quinua" href="producindividual.php?Producto=quinua">
                        <button class="botonagregar" style="padding-left: 210px; padding-right: 210px;">Comprar</button>
                    </a>
                </center>
            </button>
        </div>

        <div class="col-6">
            <button name="aji" class="boton">
                <img src="imgCatalogo/aji.jpeg" class="imagenproducto" width="150px" height="150px" style="float: left; padding-left: 0px;"  alt="">
                <div style="width: 320px; height: 150px; float: left;">
                    <h3 class="text-left tituloproducto">Aji</h3>
                    <p class="text-left descripcionproducto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis odit cum repellendus iusto. Aliquam itaque, voluptates fugit ea nobis sapiente.</p>
                </div>
                <center>
                    <a href="producindividual.php?Producto=aji">
                        <button class="botonagregar" style="padding-left: 210px; padding-right: 210px;">Comprar</button>
                    </a>
                </center>
            </button>
        </div>
    </div>



    <div class="row mt-5">
        <div class="col-6">
            <button class="boton">
                <img src="imgCatalogo/ajo.jpeg" class="imagenproducto" width="150px" height="150px" style="float: left; padding-left: 0px;"  alt="">
                <div style="width: 320px; height: 150px; float: left;">
                    <h3 class="text-left tituloproducto">Ajo</h3>
                    <p class="text-left descripcionproducto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis odit cum repellendus iusto. Aliquam itaque, voluptates fugit ea nobis sapiente.</p>
                </div>
                <center>
                    <a href="producindividual.php?Producto=ajo">
                        <button class="botonagregar" style="padding-left: 210px; padding-right: 210px;">Comprar</button>
                    </a>
                </center>
            </button>
        </div>

        <div class="col-6">
            <button class="boton">
                <img src="imgCatalogo/agraz.jpeg" class="imagenproducto" width="150px" height="150px" style="float: left; padding-left: 0px;"  alt="">
                <div style="width: 320px; height: 150px; float: left;">
                    <h3 class="text-left tituloproducto">Agraz</h3>
                    <p class="text-left descripcionproducto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis odit cum repellendus iusto. Aliquam itaque, voluptates fugit ea nobis sapiente.</p>
                </div>
                <center>
                    <a href="producindividual.php?Producto=agraz">
                        <button class="botonagregar" style="padding-left: 210px; padding-right: 210px;">Comprar</button>
                    </a>
                </center>
            </button>
        </div>
    </div>


    <div class="row mt-5">
        <div class="col-6">
            <button class="boton">
                <img src="imgCatalogo/arandano.jpg" class="imagenproducto" width="150px" height="150px" style="float: left; padding-left: 0px;"  alt="">
                <div style="width: 320px; height: 150px; float: left;">
                    <h3 class="text-left tituloproducto">Arandano</h3>
                    <p class="text-left descripcionproducto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis odit cum repellendus iusto. Aliquam itaque, voluptates fugit ea nobis sapiente.</p>
                </div>
                <center>
                    <a href="producindividual.php?Producto=arandano">
                        <button class="botonagregar" style="padding-left: 210px; padding-right: 210px;">Comprar</button>
                    </a>
                </center>
            </button>
        </div>

        <div class="col-6">
            <button class="boton">
                <img src="imgCatalogo/chia.jpeg" class="imagenproducto" width="150px" height="150px" style="float: left; padding-left: 0px;"  alt="">
                <div style="width: 320px; height: 150px; float: left;">
                    <h3 class="text-left tituloproducto">Chia</h3>
                    <p class="text-left descripcionproducto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis odit cum repellendus iusto. Aliquam itaque, voluptates fugit ea nobis sapiente.</p>
                </div>
                <center>
                    <a href="producindividual.php?Producto=chia">
                        <button class="botonagregar" style="padding-left: 210px; padding-right: 210px;">Comprar</button>
                    </a>
                </center>
            </button>
        </div>
    </div>


    <div class="row mt-5">
        <div class="col-6">
            <button class="boton">
                <img src="imgCatalogo/jenjibre.jpeg" class="imagenproducto" width="150px" height="150px" style="float: left; padding-left: 0px;"  alt="">
                <div style="width: 320px; height: 150px; float: left;">
                    <h3 class="text-left tituloproducto">Jengibre</h3>
                    <p class="text-left descripcionproducto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis odit cum repellendus iusto. Aliquam itaque, voluptates fugit ea nobis sapiente.</p>
                </div>
                <center>
                    <a href="producindividual.php?Producto=jengibre">
                        <button class="botonagregar" style="padding-left: 210px; padding-right: 210px;">Comprar</button>
                    </a>
                </center>
            </button>
        </div>

        <div class="col-6">
            <button class="boton">
                <img src="imgCatalogo/Sabila.jpg" class="imagenproducto" width="150px" height="150px" style="float: left; padding-left: 0px;"  alt="">
                <div style="width: 320px; height: 150px; float: left;">
                    <h3 class="text-left tituloproducto">Sabila</h3>
                    <p class="text-left descripcionproducto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis odit cum repellendus iusto. Aliquam itaque, voluptates fugit ea nobis sapiente.</p>
                </div>
                <center>
                    <a href="producindividual.php?Producto=sabila">
                        <button class="botonagregar" style="padding-left: 210px; padding-right: 210px;">Comprar</button>
                    </a>
                </center>
            </button>
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


</body>
</html>





<!--
<button>
    <img src="imgCatalogo/Quinua.jpg" width="150px" height="150px" style="float: left; padding-left: 0px;"  alt="">
    <div style="width: 320px; height: 150px; float: left;">
        <h3 class="text-left" style="padding-left: 10px;">Quinua</h3>
        <p class="text-left" style="padding-left: 10px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis odit cum repellendus iusto. Aliquam itaque, voluptates fugit ea nobis sapiente.</p>
    </div>
</button>

-->




<!--
    <center>
    <h1 style="margin-top: 100px;">Productos Disponibles.</h1>
</center>
<div class="container">
    <div class="row">
        <div class="col-6">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas, laborum.</p>
            <div class="row">
                <div class="col-4">
                    <img src="imgCatalogo/Quinua.jpg" width="150px" height="150px" alt="">
                </div>
                <div class="col-8">
                    <h3>Quinua</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo expedita sit, provident qui tempore illum nesciunt dolore nobis aperiam aspernatur!</p>
                </div>
            </div>
        </div>
        <div class="col-6">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatem, nisi?
        </div>
    </div>
</div>
-->