<?php 
$id = $_GET['id'];

include('componentes/conexion-db.php');
$query = mysqli_query($datos_bd,"SELECT * FROM servicios WHERE id= $id" );
$resultado = mysqli_fetch_assoc($query)
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto - Bolsa de trabajo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <div class="logo">
            <img src="./imagenes/logo-muni-esquel-2020-180px.png" alt="Logo-muni-esquel">
        </div>
        <?php
            include('componentes/botonera-admin.php')
        ?>
    </header>

    <section>
        <div class="container container-servicios">
            <div class="card mb-3" ">
                <div class="row g-0">
                    <div class="col-md-4">
                <img src="imagenes/usuario.webp" class="img-fluid rounded-start" alt="Imagen de usuario">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Nombre: <?php echo $resultado['nombre-apellido']?></h5>
                            <p class="card-text">Trabajo: <?php echo $resultado['servicio']?> <br></p>
                            <p class="card-text">Contacto: <br>
                                Telefono: <?php echo $resultado['numero']?><br>
                                Email: <?php echo $resultado['email']?><br></p>
                            <div class="botones d-flex align-items-end justify-content-end">
                                <a href="componentes/publicar.php?id=<?php echo $resultado['id']?>" class="btn btn-primary ">Publicar</a>
                                <a href="#" class="btn btn-danger">Denegar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
        include('componentes/footer.php')
    ?>
</body>
</html>








