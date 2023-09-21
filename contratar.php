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
        <div class="container container-servicios">
                <div class="servicio">
                    <h3>Solicitud 1</h3>
                    <p>
                        nombre: pedro <br>
                        solicito: herrero <br>
                        contacto: 0303456
                    </p>
                </div>
                <div class="servicio">
                    <h3>Solicitud 2</h3>
                    
                </div>
                <div class="servicio">
                <h3>Solicitud 3</h3>
                </div>
                <div class="servicio">
                <h3>Solicitud 4</h3>
                </div>
            </div>
    </section>
    <footer>

    </footer>
</body>
</html>