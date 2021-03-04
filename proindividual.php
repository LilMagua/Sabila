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