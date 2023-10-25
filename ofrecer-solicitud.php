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
            include('componentes/botonera.php')
        ?>
    </header>
    <section>
        <div class="container-service">
            <?php
                if(isset($_GET['ok_bd'])){
                    echo '
                    <div class="formulario-enviado">
                        <h4> Tu formulario fue enviado correctamente</h4>
                    </div>
                    
                    ';
                }
            ?>
            <!-- Formulario -->
            <?php 
                include('componentes/formulario-solicitud.php')
            ?>
            <!-- Fin formulario -->
        </div>
    </section>
    <?php
        include('componentes/footer.php')
    ?>
</body>
</html>