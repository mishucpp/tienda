<?php
include 'global/config.php';
include 'carrito.php';
include 'template/cabecera.php'

?>
<br>
<h3>Lista del carrito</h3>
<?php if (!empty($_SESSION['CARRITO'])) {
 ?>
<table class="table table-light table-bordered">
<tbody>
    <tr>
      <th width="40%">Descripcion</th>
      <th width="15%" class="tex-center">Cantidad</th>
      <th width="20%" class="tex-center">Precio</th>
      <th width="20%" class="tex-center">Total</th>
      <th width="5%">--</th>
    </tr>
    <?php $total=0; ?>
    <?php foreach ($_SESSION['CARRITO'] as $indice=>$producto) {
    ?>
    <tr>
      <td width="40%"><?php echo $producto['NOMBRE'] ?></td>
      <td width="15%" class="tex-center"><?php echo $producto['CANTIDAD'] ?></td>
      <td width="20%" class="tex-center"><?php echo $producto['PRECIO'] ?></td>
      <td width="20%" class="tex-center"><?php echo number_format($producto['PRECIO']*$producto['CANTIDAD'],2);  ?></td>
      <td width="5%"><button class="btn btn-danger" type="button">Eliminar</button></td>
    </tr>
    <?php $total= $total+($producto['PRECIO']*$producto['CANTIDAD']); ?>
    <?php } ?>
    <tr>
 <td colspan="3" align="right"><h3>Total</h3></td>
 <td align="right"><h3><?php echo number_format($total,2); ?></h3></td>
 <td></td>
    </tr>
</tbody>

</table>
<?php } else{?>
  <div class="alert alert-success">
  no hay productos en el carrito
  </div>
  <?php
}?>
  
<?php include 'template/pie.php'
        ?>