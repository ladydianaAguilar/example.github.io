<?php
    $destino="at72889690@idat.edu.pe";
    $nombres=$_POST["nombres"];
    $correo=$_POST["correo"];
    $celular=$_POST["celular"];
    $comentarios=$_POST["comentarios"];
    $contenido="Nombres y Apellidos: ".$nombres."\nCorreo: ".$correo."\nCelular: ".$celular."\nComentarios: ".$comentarios;

    if(mail($destino, "Mesaje",$contenido));
    echo "<script>alert('Gracias por su Mensaje')</script>";
    echo "<script>window.location.href=('index.html')</script>"

?>