<?php session_start();
include('conexion-db.php');
$servicios_A_Revisar = mysqli_query($datos_bd, 'SELECT * FROM servicios WHERE publicado = 0');



if (mysqli_num_rows($servicios_A_Revisar)>=1) {
    while ($resultado = mysqli_fetch_assoc($servicios_A_Revisar)) {
        ?>
        <div class="servicio">
                <h3>Trabajo #<?php echo $resultado['id']?></h3>
            <p>
                Nombre: <?php echo $resultado['nombre-apellido']?> <br>
                Trabajo: <?php echo $resultado['servicio']?> <br>
                Contacto: <br>
                    Telefono:<?php echo $resultado['numero']?><br>
                    Email: <?php echo $resultado['email']?>
            </p>
            <a class="btn btn-primary" href="ServId.php?id=<?php echo $resultado['id'];?>">Ver Solicitud</a>
        </div>
        <?php
    }
}