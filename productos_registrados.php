<?php
    include("conexion.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="icon" href="img/favicon.ico">
    <link rel="stylesheet" href="package/dist/sweetalert2.min.css">
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
                <div class="col-12 asd qwe">
                    <center>
                        <h1>Productos registrados</h1>
                        <a href='crear_producto.php'><button class="boton">Ingresar un nuevo producto</button></a> <br> <br>
                        
                        <div class="container">
                            <div class="row">
                                <div class="col-2 div1">Producto</div>
                                <div class="col-2 div1">Precio</div>
                                <div class="col-2 div1">Descripcion</div>
                                <div class="col-2 div1">Existencias</div>
                                <div class="col-2 div1">Ruta</div>
                                <div class="col-1 div1"></div>
                                <div class="col-1 div1"></div>
                                <br> <br> <br>
                            </div>
                        </div>
                        
                    <?php 
                        $Traer_productos = mysqli_query($conexion, "SELECT * FROM `Productos`"); 
                        while($row = mysqli_fetch_assoc($Traer_productos)){
                    ?>
                        <div class="container usuarios">
                            <div class="row">
                                <div class="col-2 div1"><?php echo $row["nombre_producto"];?></div>
                                <div class="col-2 div1"><?php echo $row["precio"];?></div>
                                <div class="col-2 div1"><?php echo $row["descripcion"];?></div>
                                <div class="col-2 div1"><?php echo $row["existencias"];?></div>
                                <div class="col-2 div1"><?php echo $row["ruta"];?></div>
                                <div class="col-1 div1"><a href='editar_producto.php?id=<?php echo $row["id_productos"]?>'><button class="boton">Editar</button></a></div>
                                <div class="col-1 div1"><a onclick="alerta()"><button class="boton">Borrar</button></a></div>
                                <br> <br> <br>
                            </div>
                        </div>
                    <?php 
                        }
                    ?>
                    </center>

                </div>                
            </div>
        </div>
        <div class="col-1 asd"></div>
    </div>
</div>
<script src="package/dist/sweetalert2.all.min.js"></script>
<script>
        function alerta(){
            Swal.fire({
                title: '¿Estas seguro de querer eliminar este producto?',
                text: "No podras revertir esto",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Eliminar',
                cancelButtonText: 'Cancelar'
                }).then((result) => {
                if (result.isConfirmed) {
                    location.href = "Funciones/borrar_producto.php?id=<?php echo $row["id_productos"]?>";
                }
                })
            }
    </script>
    
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
        border-radius: 20px;
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
    padding-top: 3px;
    padding-bottom: 3px;
    padding-left: 10px;
    padding-right: 10px;
    border-radius: 5px;
}
.boton:hover{
    transition: all 1s ease;
    color: #387224;
    background-color: white;
}
.datos{
    margin-bottom: 20px;
}
.usuarios{
    margin-bottom: 10px;
}


</style>
</body>
</html>
