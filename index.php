<?php
include 'global/config.php';
include 'global/conexion.php';
include 'carrito.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
       <title>Tienda</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</head>
<body>
    
   
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <a class="navbar-brand">icono</a>
        <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="my-nav" class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">home</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="#">tienda</a>
                </li>
            </ul>
        </div>
    </nav>

        <div class="container">
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
                print_r($listaProductos);
?> 
<?php foreach($listaProductos as $producto){
    ?>

                 <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3">
                   <div class="card">
                   <img
                   title="<?php echo$producto['nombre'];?>"
                   alt="titulo"
                   src="<?php echo$producto['imagen'];?>"
                   class="card-img-top" src="">
                   <div class="card-body">
                   <span><?php echo$producto['nombre'];?></span>
                       <h5 class="card-title">$<?php echo$producto['precio'];?></h5>
                       <p class="card-text"><?php echo$producto['descripcion'];?></p>
                       <form action="" method="post">
                       <input type="text" value="<?php echo openssl_encrypt($producto['id'],COD,KEY);?>" name="id" id="id">
                       <input type="text" value="<?php echo openssl_encrypt($producto['nombre'],COD,KEY);?>" name="nombre" id="nombre">
                       <input type="text" value="<?php echo openssl_encrypt($producto['precio'],COD,KEY);?>" name="precio" id="precio">
                       <input type="text" value="<?php echo openssl_encrypt(1,COD,KEY);?>" name="cantidad" id="cantidad">
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
             
        
        </div>
        
    
    
       
    
   
    
</body>
</html>