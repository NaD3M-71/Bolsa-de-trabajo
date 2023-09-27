<?php
include('componentes/conexion-db.php');
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
            include('componentes/botonera.php')
        ?>
    </header>
    <section>
        <aside class="aside">
            <ul class="categorias list-group">
                <?php
                    echo '<h6 class="mt-2">Categorias</h6>';
                    echo '<li class="list-group-item list-group-item-action "><a href="servicios.php?rubro=docencia&page=">Docencia</a></li>';
                    echo '<li class="list-group-item list-group-item-action "><a href="servicios.php?rubro=atencion&page=">Atencion al cliente</a></li>';
                    echo '<li class="list-group-item list-group-item-action "><a href="servicios.php?rubro=mecanica&page=">Rubro automotor</a></li>';
                    echo '<li class="list-group-item list-group-item-action "><a href="servicios.php?rubro=informatica&page=">informatica y tecnologia</a></li>';
                    echo '<li class="list-group-item list-group-item-action "><a href="servicios.php?rubro=otro&page=">Otros</a></li>';

                    echo '<li class="list-group-item list-group-item-action "><a href="servicios.php?rubro=all&page=">Todos</a></li>';
                ?>
                

            </ul>
        </aside>
        <div class="container container-servicios">
            <?php
                include('componentes/servicio.php');
                include('componentes/paginas.php')
                
                
            ?>
            
        </div>
    </section>
    <footer>

    </footer>
</body>
</html>