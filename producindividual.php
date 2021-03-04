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
    include("navbar.php");
?>

<?php
/*En un futuro, en lugar de usar php para decidir el producto, hay que usar la base de datos para traer la infromacion de cada producto, es decir, crear una tabla de productos*/
    $producto = $_GET["Producto"];
    echo $producto;

    switch ($producto) {
        case "quinua":
            ?>
            <div class="container mt-5">
                <div class="row">
                    <div class="col-8">
                        <img class="imgproducto" src="imgCatalogo/Quinua.jpg" alt="" width="550px" height="550px">
                    </div>
                    <div clas="col-4">
                        <h1 class="Titulo">Quinua</h1>
                        <h3>$25.00</h3>
                        <br>
                        <h5>Cantidad (Kg)</h5>
                        <input class="input" type="number">
                        <br>
                        <button class="botonagregar">Añadir al pedido</button>
                    </div>
                </div>
            </div>
            <?php
            break;

        case "aji":
            ?>
            <div class="container mt-5">
                <div class="row">
                    <div class="col-8">
                        <img class="imgproducto" src="imgCatalogo/aji.jpeg" alt="" width="550px" height="550px">
                    </div>
                    <div clas="col-4">
                        <h1 class="Titulo">Aji</h1>
                        <h3>$8.00</h3>
                        <br>
                        <h5>Cantidad (Paquete de 6 unidades)</h5>
                        <input class="input" type="number">
                        <br>
                        <button class="botonagregar">Añadir al pedido</button>
                    </div>
                </div>
            </div>
            <?php
            break;

        case "ajo":
            ?>
            <div class="container mt-5">
                <div class="row">
                    <div class="col-8">
                        <img class="imgproducto" src="imgCatalogo/ajo.jpeg" alt="" width="550px" height="550px">
                    </div>
                    <div clas="col-4">
                        <h1 class="Titulo">Ajo</h1>
                        <h3>$3.00</h3>
                        <br>
                        <h5>Cantidad (Frasco)</h5>
                        <input class="input" type="number">
                        <br>
                        <button class="botonagregar">Añadir al pedido</button>
                    </div>
                </div>
            </div>
            <?php
            break;

        case "arandano":
            ?>
            <div class="container mt-5">
                <div class="row">
                    <div class="col-8">
                        <img class="imgproducto" src="imgCatalogo/arandano.jpg" alt="" width="550px" height="550px">
                    </div>
                    <div clas="col-4">
                        <h1 class="Titulo">Arandano</h1>
                        <h3>$1.00</h3>
                        <br>
                        <h5>Cantidad (Caja de 300gr)</h5>
                        <input class="input" type="number">
                        <br>
                        <button class="botonagregar">Añadir al pedido</button>
                    </div>
                </div>
            </div>
            <?php
            break;

        case "chia":
            ?>
            <div class="container mt-5">
                <div class="row">
                    <div class="col-8">
                        <img class="imgproducto" src="imgCatalogo/chia.jpeg" alt="" width="550px" height="550px">
                    </div>
                    <div clas="col-4">
                        <h1 class="Titulo">Chia</h1>
                        <h3>$2.00</h3>
                        <br>
                        <h5>Cantidad (Caja de 250gr)</h5>
                        <input class="input" type="number">
                        <br>
                        <button class="botonagregar">Añadir al pedido</button>
                    </div>
                </div>
            </div>
            <?php
            break;

        case "jengibre":
            ?>
            <div class="container mt-5">
                <div class="row">
                    <div class="col-8">
                        <img class="imgproducto" src="imgCatalogo/jenjibre.jpeg" alt="" width="550px" height="550px">
                    </div>
                    <div clas="col-4">
                        <h1 class="Titulo">Jengibre</h1>
                        <h3>$4.00</h3>
                        <br>
                        <h5>Cantidad (Kg)</h5>
                        <input class="input" type="number">
                        <br>
                        <button class="botonagregar">Añadir al pedido</button>
                    </div>
                </div>
            </div>
            <?php
            break;

        case "sabila":
            ?>
            <div class="container mt-5">
                <div class="row">
                    <div class="col-8">
                        <img class="imgproducto" src="imgCatalogo/Sabila.jpg" alt="" width="550px" height="550px">
                    </div>
                    <div clas="col-4">
                        <h1 class="Titulo">Sabila</h1>
                        <h3>$25.00</h3>
                        <br>
                        <h5>Cantidad (Canasta)</h5>
                        <input class="input" type="number">
                        <br>
                        <button class="botonagregar">Añadir al pedido</button>
                    </div>
                </div>
            </div>
            <?php
            break;

        case "agraz":
            ?>
            <div class="container mt-5">
                <div class="row">
                    <div class="col-8">
                        <img class="imgproducto" src="imgCatalogo/agraz.jpeg" alt="" width="550px" height="550px">
                    </div>
                    <div clas="col-4">
                        <h1 class="Titulo">Agraz</h1>
                        <h3>$8.00</h3>
                        <br>
                        <h5>Cantidad (Caja de 300gr)</h5>
                        <input class="input" type="number">
                        <br>
                        <button class="botonagregar">Añadir al pedido</button>
                    </div>
                </div>
            </div>
            <?php
            break;
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

