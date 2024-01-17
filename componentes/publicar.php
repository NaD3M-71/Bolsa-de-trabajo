<?php session_start();

$id = $_GET['id'];

include('conexion-db.php');
$query = mysqli_query($datos_bd,"UPDATE `servicios` SET `publicado`= 1 WHERE id=$id" );
;

header('Location: ../revisar-servicios.php?servOk');