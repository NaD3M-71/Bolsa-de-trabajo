<?php
    $row = mysqli_fetch_array($idServicio);
?>
<div class="servicio">
    <h3>Trabajo #<?php echo $row['id']?></h3>
    <p>
        nombre: <?php echo $row['nombre-apellido']?> <br>
        trabajo: <?php echo $row['servicio']?> <br>
        contacto: <?php echo $row['numero']?>
    </p>
</div>

