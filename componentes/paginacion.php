<!-- remplazado por paginas.php y servicio.php -->
<?php
include('conexion-db.php');
//paginacion
if(!empty($_REQUEST['page'])){
    $_REQUEST['page'] = $_REQUEST['page'];}else{ $_REQUEST['page']= '1';
}
if($_REQUEST['page'] ==''){$_REQUEST['page']='1';}

$servicios_totales= mysqli_query($datos_bd, "SELECT * FROM servicios; ");
$num_registros = mysqli_num_rows($servicios_totales);
$registros = 6;
$pagina = $_REQUEST['page'];

if (is_numeric($pagina))
            $inicio= (($pagina-1)*$registros);
            else
            $inicio=0;
            $idServicio=mysqli_query($datos_bd,"SELECT * FROM servicios LIMIT $inicio,$registros;");
            $paginas=ceil($num_registros/$registros);


//paginas
?>
<div class="container-fluid paginacion col-12">
        <ul class="pagination paginacion pg-dark justify-content-center pb-5 pt-5 mb-0" style="float: none;" >
            <li class="page-item">
            <?php
            if($_REQUEST["page"] == "1" ){
            $_REQUEST["page"] == "0";
                echo  "";
            }else{
            if ($pagina>1)
            $ant = $_REQUEST["page"] - 1;
                echo "<a class='page-link' aria-label='Previous' href='servicios.php?rubro=".$_GET['rubro']."&page=1'><span aria-hidden='true'>&laquo;</span><span class='sr-only'>Previous</span></a>"; 
                echo "<li class='page-item '><a class='page-link' href='servicios.php?rubro=".$_GET['rubro']."&page=". ($pagina-1) ."' >".$ant."</a></li>"; }
                echo "<li class='page-item active'><a class='page-link' >".$_REQUEST["page"]."</a></li>"; 
            $sigui = $_REQUEST["page"] + 1;
            $ultima = $num_registros / $registros;
            if ($ultima == $_REQUEST["page"] +1 ){
            $ultima == "";}
            if ($pagina<$paginas && $paginas>1)
                echo "<li class='page-item'><a class='page-link' href='servicios.php?rubro=".$_GET['rubro']."&page=". ($pagina+1) ."'>".$sigui."</a></li>"; 
            if ($pagina<$paginas && $paginas>1)
                echo "<li class='page-item'><a class='page-link' aria-label='Next' href='servicios.php?rubro=".$_GET['rubro']."&page=". ceil($ultima) ."'><span aria-hidden='true'>&raquo;</span><span class='sr-only'>Ultima</span></a></li>";
            ?>
        </ul>
    </div>
