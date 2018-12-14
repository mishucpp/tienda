<?php
include 'global/config.php';
include 'global/conexion.php';
include 'carrito.php';
include 'template/cabecera.php'

?>

        <br>
        <br>
        <br>
            <div class="alert alert-success">
                
                 <?php 
                 echo $mensaje;
                 ?>
                <a href="#" class="badge badge-success">Ver carrito</a>
             </div>
             
             <div class="row">
             <?php
                 $sentencia=$pdo->prepare("SELECT * FROM tblproductos");
                 $sentencia->execute();
                 $listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
               
?> 
<?php foreach($listaProductos as $producto){
    ?>

                 <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3">
                   <div class="card">
                   <img
                   title="<?php echo$producto['nombre'];?>"
                   alt="titulo"
                   src="<?php echo$producto['imagen'];?>"
                   class="card-img-top" height="317px">
                   <div class="card-body">
                   <span><?php echo$producto['nombre'];?></span>
                       <h5 class="card-title">$<?php echo$producto['precio'];?></h5>
                       <p class="card-text"><?php echo$producto['descripcion'];?></p>
                       <form action="" method="post">
                       <input type="hidden" value="<?php echo openssl_encrypt($producto['id'],COD,KEY);?>" name="id" id="id">
                       <input type="hidden" value="<?php echo openssl_encrypt($producto['nombre'],COD,KEY);?>" name="nombre" id="nombre">
                       <input type="hidden" value="<?php echo openssl_encrypt($producto['precio'],COD,KEY);?>" name="precio" id="precio">
                       <input type="hidden" value="<?php echo openssl_encrypt(1,COD,KEY);?>" name="cantidad" id="cantidad">
                       <button class="btn btn-primary" name="btnAccion"
                        value="Agregar"
                         type="submit">agregar al carrito</button>
                       </form>
                     
                   </div>
                  </div>
                 </div>
                 
    <?php
}?>
                 
             </div>
             
        
        <?php include 'template/pie.php'
        ?>