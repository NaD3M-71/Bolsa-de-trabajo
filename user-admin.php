<?php     session_start();
$usuario = $_POST['usuario'];
$password = $_POST['password'];

include('componentes/conexion-db.php');

$consultar_admin = mysqli_query($datos_bd,"SELECT usuario,password FROM `admin` WHERE usuario= '$usuario' AND password = $password");


if( mysqli_num_rows($consultar_admin) == 1 ){
    $_SESSION['admin'] = $usuario;
    header('Location: admin.php?success');
} else {
    header('Location: admin.php?error');
}