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
        
            <div class="alert alert-success">
                 Pantalla de mensaje...
                <a href="" class="badge badge-success">Ver carrito</a>
             </div>
             
             <div class="row">
                 <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
               <div class="card">
                   <img
                   title="Titulo del producto"
                   alt="titulo"
                   src="https://d1w7fb2mkkr3kw.cloudfront.net/assets/images/book/lrg/9781/4842/9781484217290.jpg"
                   class="card-img-top" src="">
                   <div class="card-body">
                   <span>Titulo del producto</span>
                       <h5 class="card-title">$300.00</h5>
                       <p class="card-text">Descripción</p>
                       <button class="btn btn-primary" name="btnAccion" value="Agregar" type="submit">agregar al carrito</button>
                   </div>
               </div>
                 </div>
                 
             </div>
             
        
        </div>
        
    
    
       
    
   
    
</body>
</html>