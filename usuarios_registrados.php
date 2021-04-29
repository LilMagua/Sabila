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
    <title>Usuarios registrados</title>
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
                        <h1 class="Titulo1 mb-5">Usuarios registrados</h1>
                        
                        <div class="container datos">
                            <div class="row">
                                <div class="col-2 div1">Nombre</div>
                                <div class="col-2 div1">Apellido</div>
                                <div class="col-2 div1">Correo</div>
                                <div class="col-2 div1">Contraseña</div>
                                <div class="col-1 div1">Direccion</div>
                                <div class="col-1 div1">Rol</div>
                                <div class="col-1 div1"></div>
                                <div class="col-1 div1"></div>
                                <br>
                            </div>
                        </div>
                        
                    <?php 
                        $Traer_usuarios = mysqli_query($conexion, "SELECT * FROM `Usuarios`"); 
                        while($row = mysqli_fetch_assoc($Traer_usuarios)){

                            if($row["rol_id"] == 1){
                                $rol = "Cliente";
                            }else{
                                $rol = "Admin";
                            }
                    ?>
                        <div class="container usuarios">
                            <div class="row">
                                <div class="col-2 div1"><?php echo $row["nombre_usuario"];?></div>
                                <div class="col-2 div1"><?php echo $row["apellido_usuario"];?></div>
                                <div class="col-2 div1"><?php echo $row["correo"];?></div>
                                <div class="col-2 div1"><?php echo $row["pass"];?></div>
                                <div class="col-1 div1"><?php echo $row["direccion"];?></div>
                                <div class="col-1 div1"><?php echo $rol;?></div>
                                <div class="col-1 div1"><a href='editar_usuario.php?id=<?php echo $row["id_usuarios"]?>'><button  class="boton" >Editar</button></a></div>
                                <div class="col-1 div1"><a href="Funciones/borrar_usuario.php?id=<?php echo $row["id_usuarios"]?>"><button  class="boton" >Borrar</button></a></div>
                            </div>
                        </div>
                        <?php 
                            }
                        ?>
                    </center>

                </div>                
            </div>
        </div>
        <div class="col-1 asd">
        </div>
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
<script src="package/dist/sweetalert2.all.min.js"></script>

<script>
        function alerta(){
            Swal.fire({
                title: '¿Estas seguro de querer eliminar esta cuenta?',
                text: "No podras revertir esto",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Eliminar',
                cancelButtonText: 'Cancelar'
                }).then((result) => {
                if (result.isConfirmed) {
                    location.href = "Funciones/borrar_usuario.php?id=<?php echo $row["id_usuarios"]?>";
                }
                })
            }
    </script>

</body>
</html>

<?php
    if(isset($_GET["correcto"])){
?>
    <script>
        Swal.fire(
        'Realizado',
        'Los datos del usuario de han cambiado',
        'success'
        )
    </script>
<?php
    }
?>


<?php
    if(isset($_GET["borrado"])){
?>
    <script>
        Swal.fire(
        'Borrado',
        'Se ha borrado correctamente',
        'success'
        )
    </script>
<?php
    }
?>

