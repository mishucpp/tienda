<?php
session_start();

$mensaje="";
if(isset($_POST['btnAccion'])){
    switch($_POST['btnAccion']){
        case 'Agregar' :
        if(is_numeric( openssl_decrypt($_POST['id'],COD,KEY))){
               $ID=openssl_decrypt($_POST['id'],COD,KEY);
               $mensaje.="oK ID correcto". $ID."<br>";
        }else{
            $mensaje.="ups ID incorrecto". $ID."<br>";

        }
        
        if(is_string( openssl_decrypt($_POST['nombre'],COD,KEY))){
            $NOMBRE=openssl_decrypt($_POST['nombre'],COD,KEY);
            $mensaje.="oK nombre correcto". $NOMBRE."<br>";
     }else{
         $mensaje.="ups nombre incorrecto". $NOMBRE."<br>";

     break;}
     
     if(is_string( openssl_decrypt($_POST['cantidad'],COD,KEY))){
        $CANTIDAD=openssl_decrypt($_POST['cantidad'],COD,KEY);
        $mensaje.="oK cantidad correcto". $CANTIDAD."<br>";
 }else{
     $mensaje.="ups cantidad incorrecto". $CANTIDAD."<br>";

 break;}
 
 if(is_numeric( openssl_decrypt($_POST['precio'],COD,KEY))){
    $PRECIO=openssl_decrypt($_POST['precio'],COD,KEY);
    $mensaje.="oK precio correcto". $PRECIO."<br>";
}else{
 $mensaje.="ups precio incorrecto". $PRECIO."<br>";
 break;
}

 if (!isset($_SESSION['CARRITO'])) {
     $producto=array(
         'ID'=>$ID,
         'NOMBRE'=>$NOMBRE,
         'CANTIDAD'=>$CANTIDAD,
         'PRECIO'=>$PRECIO
     );
     $_SESSION['CARRITO'][0]=$producto;
 }else{
     $numeroProductos=count($_SESSION['CARRITO']);
     $producto=array(
        'ID'=>$ID,
        'NOMBRE'=>$NOMBRE,
        'CANTIDAD'=>$CANTIDAD,
        'PRECIO'=>$PRECIO
    );
    $_SESSION['CARRITO'][$numeroProductos]=$producto;
 }
 $mensaje= print_r($_SESSION,true);
break;

    }
}

?>