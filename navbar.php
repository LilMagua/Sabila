<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>

<!--Inicio del Navbar-->
<div class="container-fluid">
    <nav id="menu" class="navbar navbar-expand-lg navbar-dark fixed-top bg-personalizado">
        <a class="navbar-brand ml-3" href="index.html">
            <img src="img/sabila.png" width="30" height="30">
        </a>

        <button class="navbar-toggler mr-5" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-expanded="false" >
          <span class="navbar-toggler-icon "></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link active mr-5 ml-3" href="index.html">Inicio</a>
                <a class="nav-item nav-link active mr-5 ml-3" href="Catalogo.php">Productos</a>
                <a class="nav-item nav-link active mr-5 ml-3" href="index.html">¿Quienes Somos?</a>
                <a class="nav-item nav-link active mr-5 ml-3" href="index.html">Contacto</a>
                <a class="nav-item nav-link active mr-5 ml-3" href="Ingresar.php">Perfil</a>
            </div>
        </div>
    </nav>
</div>
<!--Fin del Navbar-->

<style>
    .bg-personalizado{
    transition: all 1s ease;
    background-color: #387224;
}
</style>
    
</body>
</html>