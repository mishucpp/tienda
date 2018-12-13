<?php
session_start();

$mensaje="";
if(isset($_POST['btnAccion'])){
    switch($_POST['btnAccion']){
        case 'Agregar' :
        if(is_numeric( openssl_decrypt($_POST['id'],COD,KEY))){
               $ID=openssl_decrypt($_POST['id'],COD,KEY);
               $mensaje.="oK ID correcto". $ID;
        }else{
            $mensaje.="ups ID incorrecto". $ID;

        }
        break;
        if(is_numeric( openssl_decrypt($_POST['nombre'],COD,KEY))){
            $NOMBRE=openssl_decrypt($_POST['nombre'],COD,KEY);
            $mensaje.="oK nombre correcto". $NOMBRE;
     }else{
         $mensaje.="ups nombre incorrecto". $NOMBRE;

     }
     break;
     if(is_numeric( openssl_decrypt($_POST['cantidad'],COD,KEY))){
        $CANTIDAD=openssl_decrypt($_POST['cantidad'],COD,KEY);
        $mensaje.="oK cantidad correcto". $CANTIDAD;
 }else{
     $mensaje.="ups cantidad incorrecto". $CANTIDAD;

 }
 break;
 if(is_numeric( openssl_decrypt($_POST['precio'],COD,KEY))){
    $PRECIO=openssl_decrypt($_POST['precio'],COD,KEY);
    $mensaje.="oK precio correcto". $PRECIO;
}else{
 $mensaje.="ups precio incorrecto". $PRECIO;

}
break;
    }
}

?>