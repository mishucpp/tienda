<?php
include 'global/config.php';
include 'global/conexion.php';
include 'carrito.php';
include 'template/cabecera.php'

?>


<?php
if ($_POST) {
    $total=0;
    $SID=session_id();
    foreach( $_SESSION['CARRITO'] as $indice=>$producto){
            $total=$total+($producto['PRECIO']*$producto['CANTIDAD']);
        }
 echo"<br><br><br><br><h3>".$total."</h3>";
}


?>


<?php include 'template/pie.php'
        ?>