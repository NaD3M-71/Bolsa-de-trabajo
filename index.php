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
    <h1 class="h1 mb-0">Bolsa de trabajo <br> Esquel</h1>
    <section>
        <div class="index container">
            <div class="floater"></div>
            <div class="opcion1-inicio d-flex">
                <div class="op1-titulo-subtitulo">
                    <h3>Encontrá empleo</h3>
                    <h5>Tenes dos opciones</h5>
                </div>
                <div class="op1-texto">
                    <p >Publicá tu oficio/profesión, u ofrece tus servicios</p>
                    <p >Ó</p>
                    <p >Postulate para una vacante de empleo</p>
                </div>
                
            </div>
            <div class="opcion1-inicio d-flex">
                <div class="op1-titulo-subtitulo">
                    <h3>Contratá</h3>
                </div>
                <div class="op2-texto">
                    <p >Abrí una vacante</p>
                    <p >Revisá las postulaciones</p>
                    <p >Contratá</p>
                </div>
                
            </div>
        </div>
        
    </section>
    
    <?php
        include('componentes/footer.php')
    ?>
</body>
</html>