<?php
    session_start();

    $rol_id = $_SESSION["rol_id"];

    if(!isset($rol_id)){
        header("location: ingresar.php");
    }else if($rol_id == 2){
        header("location: cliente.php");
    }else{

    include ("conexion.php");

    $usuarios = "SELECT * FROM usuarios";
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
<center>
    <h1 class="texto2">Usuarios registrados</h1>
</center>

<?php 
                
$traer = mysqli_query($conexion, $usuarios); 
while($row = mysqli_fetch_assoc($traer)){
?>
<div class="row mt-5">
    <div class="col-6">
        <center>
            <p class=" texto mt-5 ml-5">Nombre: <?php echo $row["nombre"] ?></p>

            <p class="texto ml-5">Apellido: <?php echo $row["apellido"] ?></p>

            <p class="texto ml-5">Correo: <?php echo $row["correo"] ?></p>

            <p class="texto mb-5 ml-5">Pass: <?php echo $row["pass"] ?></p>
        </center>
    </div>
    <div class="col-6">
    
        <p class="texto mt-5 ">Direccion: <?php echo $row["direccion"] ?></p>

        <p class="texto">Telefono: <?php echo $row["telefono"] ?></p>
            
        <p class="texto">Rol: Admin</p>

    </div>
</div>

<center>
    <a class="comoseria text-center ml-5" class href="eliminarcuentadesdeadmin.php?id=<?php echo $row["id"];?>"><button class="boton_eliminar">Eliminar cuenta</button></a>
</center>

<?php
    } 
?>  

<script src="confirmar.js"></script>

<style>

    body{
        background-color: black;
    }
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
        padding-top: 100px;
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

