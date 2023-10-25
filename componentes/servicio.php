
<?php
include('conexion-db.php');

$busqueda = mysqli_query($datos_bd, "SELECT * FROM servicios");
if(!empty($_REQUEST['page'])){
    $_REQUEST['page'] = $_REQUEST['page'];}else{ $_REQUEST['page']= '1';
}
if($_REQUEST['page'] ==''){$_REQUEST['page']='1';}

$servicios_totales= mysqli_query($datos_bd, "SELECT * FROM servicios; ");
$num_registros = mysqli_num_rows($servicios_totales);
$registros = 6;
$pagina = $_REQUEST['page'];

//Arranca el switch
if(isset($_GET["rubro"])){
    switch ($_GET["rubro"]) {
        case 'docencia':
            $idServicio1 = mysqli_query($datos_bd, "SELECT * FROM servicios WHERE rubro='docencia'");
            if (is_numeric($pagina))
            $inicio= (($pagina-1)*$registros);
            else
            $inicio=0;
            $idServicio = mysqli_query($datos_bd, "SELECT * FROM servicios WHERE rubro= 'docencia' LIMIT $inicio,$registros");
            $registros_x_rubro=mysqli_num_rows($idServicio1);
            $paginas=ceil($registros_x_rubro/$registros);

                if (mysqli_num_rows($idServicio)>=1) {
                    while ($resultado = mysqli_fetch_assoc($idServicio))  {
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
                        </div>
                        <?php
                    
                }}
            ;
            break;
        
           
             
        case 'atencion':
            $idServicio1 = mysqli_query($datos_bd, "SELECT * FROM servicios WHERE rubro='atencion'");
            if (is_numeric($pagina))
            $inicio= (($pagina-1)*$registros);
            else
            $inicio=0;
            $idServicio = mysqli_query($datos_bd, "SELECT * FROM servicios WHERE rubro= 'atencion' LIMIT $inicio,$registros");
            $registros_x_rubro=mysqli_num_rows($idServicio1);
            $paginas=ceil($registros_x_rubro/$registros);
                if (mysqli_num_rows($idServicio)>=1) {
                    while ($resultado = mysqli_fetch_assoc($idServicio))  {
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
                        </div>
                        <?php
                    
                }}
            ;
            break;
        case 'turismo':
            $idServicio1 = mysqli_query($datos_bd, "SELECT * FROM servicios WHERE rubro='turismo'");
            if (is_numeric($pagina))
            $inicio= (($pagina-1)*$registros);
            else
            $inicio=0;
            $idServicio = mysqli_query($datos_bd, "SELECT * FROM servicios WHERE rubro= 'turismo' LIMIT $inicio,$registros");
            $registros_x_rubro=mysqli_num_rows($idServicio1);
            $paginas=ceil($registros_x_rubro/$registros);
                if (mysqli_num_rows($idServicio)>=1) {
                    while ($resultado = mysqli_fetch_assoc($idServicio))  {
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
                        </div>
                        <?php
                    
                }}
            ;
            break;
        
        case 'mecanica':
            $idServicio1 = mysqli_query($datos_bd, "SELECT * FROM servicios WHERE rubro='mecanica' ");
            if (is_numeric($pagina))
            $inicio= (($pagina-1)*$registros);
            else
            $inicio=0;
            $idServicio = mysqli_query($datos_bd, "SELECT * FROM servicios WHERE rubro= 'mecanica' LIMIT $inicio,$registros");
            $registros_x_rubro=mysqli_num_rows($idServicio1);
            $paginas=ceil($registros_x_rubro/$registros);

                if (mysqli_num_rows($idServicio)>=1) {
                    while ($resultado = mysqli_fetch_assoc($idServicio))  {
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
                        </div>
                        <?php
                    
                }}
            ;
            break;
        
        case 'informatica':
            $idServicio1 = mysqli_query($datos_bd, "SELECT * FROM servicios WHERE rubro='informatica'");
            if (is_numeric($pagina))
            $inicio= (($pagina-1)*$registros);
            else
            $inicio=0;
            $idServicio = mysqli_query($datos_bd, "SELECT * FROM servicios WHERE rubro= 'informatica' LIMIT $inicio,$registros");
            $registros_x_rubro=mysqli_num_rows($idServicio1);
            $paginas=ceil($registros_x_rubro/$registros);

            
                if (mysqli_num_rows($idServicio)>=1) {
                    while ($resultado = mysqli_fetch_assoc($idServicio))  {
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
                        </div>
                        <?php
                    
                }}
            ;
            break;
        case 'otro':
            $idServicio1 = mysqli_query($datos_bd, "SELECT * FROM servicios WHERE rubro='otro' ");
            if (is_numeric($pagina))
            $inicio= (($pagina-1)*$registros);
            else
            $inicio=0;
            $idServicio = mysqli_query($datos_bd, "SELECT * FROM servicios WHERE rubro= 'otro' LIMIT $inicio,$registros");
            $registros_x_rubro=mysqli_num_rows($idServicio1);
            $paginas=ceil($registros_x_rubro/$registros);

                if (mysqli_num_rows($idServicio)>=1) {
                    while ($resultado = mysqli_fetch_assoc($idServicio))  {
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
                        </div>
                        <?php
                    
                }}
            ;
            break;
        
        default:
            
                $idServicio1 = mysqli_query($datos_bd, "SELECT * FROM servicios ");
                if (is_numeric($pagina))
                $inicio= (($pagina-1)*$registros);
                else
                $inicio=0;
                $idServicio = mysqli_query($datos_bd, "SELECT * FROM servicios  LIMIT $inicio,$registros");
                $registros_x_rubro=mysqli_num_rows($idServicio1);
                $paginas=ceil($registros_x_rubro/$registros);
                if (mysqli_num_rows($idServicio)>=1) {
                    while ($resultado = mysqli_fetch_assoc($idServicio))  {
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
                        </div>
                        <?php
                    }
                    
            ; }

        
            break;
    }
}

?>
