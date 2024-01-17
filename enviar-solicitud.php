<?php 

    $nombrecompleto= $_POST['nombre'];
    $telefono= $_POST['telefono'];
    $email= $_POST['email'];
    $solicitud= $_POST['solicitud'];
    $rubro= $_POST['rubro'];

    include('componentes/conexion-db.php');
    mysqli_query($datos_bd,"INSERT INTO solicitudes VALUES(DEFAULT,'$nombrecompleto','$telefono','$email','$solicitud','$rubro',0)");
    header('Location: ofrecer-servicios.php?ok_bd');

?>

