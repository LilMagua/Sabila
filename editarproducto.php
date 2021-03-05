<?php
    include "conexion.php";

    $id = $_GET["id"];

    $consultar_datos = mysqli_query($conexion,"SELECT  Producto, Precio, Descripcion, Existencias, Ruta FROM Inventario WHERE id = '$id'");

    if($consultar_datos){
        $row = $consultar_datos->fetch_array();

        $producto = $row['Producto'];
        $precio = $row['Precio'];
        $descripcion = $row['Descripcion'];
        $existencias = $row['Existencias'];
        $ruta = $row['Ruta'];
    }

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
                    <h1 class="text-center mt-5">Actualizar los datos del producto</h1>
                    <h4 class="text-center ">xd</h4>
                    <center>
                        <form action="realizaractuproductos.php" method="post">
                            <input type="hidden" value="<?php echo $id ?>" name="id">
                            <label>Producto: </label>
                            <input class="input" type="text" value="<?php echo $producto ?>" name="producto"> <br>
                            <label>Precio: </label>
                            <input class="input" type="text" value="<?php echo $precio ?>" name="precio"> <br>
                            <label>Descripcion: </label>
                            <input class="input" type="text" value="<?php echo $descripcion ?>" name="descripcion"> <br>
                            <label>Existencias: </label>
                            <input class="input" type="text" value="<?php echo $existencias ?>" name="existencias"> <br>
                            <label>Ruta: </label>
                            <input class="input" type="text" value="<?php echo $ruta ?>" name="ruta"> <br>

                            
                            <button class="boton mt-5" type="submit" name="Send">Actualizar</button>
                        </form>

                    </center>

                </div>                
            </div>
        </div>
        <div class="col-1 asd"></div>
    </div>
</div>

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
        background-color: rgba(0, 0, 0, 1);
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
    padding-top: 20px;
    padding-bottom: 20px;
    padding-left: 300px;
    padding-right: 300px;
    margin-bottom: 10px;
    border-radius: 5px;
}
.boton:hover{
    transition: all 1s ease;
    color: #387224;
    background-color: white;
}


.input{
    color: white;
    border-style: none;
    border-bottom: 2px solid #387224;
    padding-right: 70px;
    background-color: transparent;
    font-size: 20px;
}
.input:focus { outline: none; }
.input::placeholder{color: white;}
</style>
</body>
</html>
