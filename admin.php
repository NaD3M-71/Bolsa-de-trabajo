<?php     session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto - Bolsa de trabajo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    
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
    <h1>Bolsa de trabajo - Esquel</h1>
    <section>

        <div class="index container-md align-items-center">

            <form action="user-admin.php" method="post" class="form-admin d-flex justify-content-center align-items-center flex-wrap <?php 
            if (isset($_SESSION['admin'])) {
                echo 'd-none';
            }?>">
                <input type="text" name="usuario" class="form-control text-center mb-2 border border-black border-2" placeholder="Usuario" required>
                <input type="text" name="password" class="form-control text-center mb-2 border border-black border-2" placeholder="Constraseña" required>
                <button type="submit" class="btn btn-primary">Acceder como administrador</button>
            </form>
            <div class="inicio-admin container 
            <?php if(isset($_SESSION['admin'])){ echo 'd-block';} else {echo 'd-none';} ?> ">
                <h2 class="text-center ">Bienvenido al panel de Administrador</h2>
                <p >
                    Desde este Panel podrás Aprobar o Reprobar tanto los servicios ofrecidos como los contratos solicitados. <br>
                    Tambien podras Eliminar y Notificar a los usuarios sobre sus publicaciones.
                </p>
            </div>
        </div>
        
    </section>
    
    <footer>

    </footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>