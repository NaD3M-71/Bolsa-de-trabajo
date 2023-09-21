
<?php
include('conexion-db.php');

    switch ($_GET["rubro"]) {
        case 'docencia':
            for ($i= 1; $i < 7; $i++) { 
                $idServicio = mysqli_query($datos_bd, "SELECT * FROM servicios WHERE id = $i AND rubro= 'docencia'");
                if (mysqli_num_rows($idServicio)>=1) {
                    include('cuadro-servicio.php');
                }
            };
            break;
        
        case 'atencion':
            for ($i= 1; $i < 7; $i++) { 
                $idServicio = mysqli_query($datos_bd, "SELECT * FROM servicios WHERE id = $i AND rubro= 'atencion'");
                if (mysqli_num_rows($idServicio)>=1) {
                    include('cuadro-servicio.php');
                }
            };
            break;
        
        case 'mecanica':
            for ($i= 1; $i < 7; $i++) { 
                $idServicio = mysqli_query($datos_bd, "SELECT * FROM servicios WHERE id = $i AND rubro= 'mecanica'");
                if (mysqli_num_rows($idServicio)>=1) {
                    include('cuadro-servicio.php');
                }
            };
            break;
        
        case 'informatica':
            for ($i= 1; $i < 7; $i++) { 
                $idServicio = mysqli_query($datos_bd, "SELECT * FROM servicios WHERE id = $i AND rubro= 'informatica'");
                if (mysqli_num_rows($idServicio)>=1) {
                    include('cuadro-servicio.php');
                }
            };
            break;
        
        default:
            for ($i= 1; $i < 7; $i++) { 
                $idServicio = mysqli_query($datos_bd, "SELECT * FROM servicios WHERE id = $i");
                if (mysqli_num_rows($idServicio)>=1) {
                    include('cuadro-servicio.php');
                }
            };
        
            break;
    }


    
?>
