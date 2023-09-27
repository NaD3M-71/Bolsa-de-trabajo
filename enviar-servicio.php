<?php 

    $nombrecompleto= $_POST['nombre'];
    $telefono= $_POST['telefono'];
    $email= $_POST['email'];
    $servicio= $_POST['servicio'];
    $rubro= $_POST['rubro'];

    include('componentes/conexion-db.php');
    mysqli_query($datos_bd,"INSERT INTO servicios VALUES(DEFAULT,'$nombrecompleto','$telefono','$email','$servicio','$rubro')");
    header('Location: ofrecer-servicios.php?ok_bd');

?>