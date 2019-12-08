<?php

  $nombre = $_POST["nombre"];
  $email = $_POST["email"];
  $mensaje =$_POST["mensaje"];

  $para = "raybanss13@gmail.com";
  $asunto = "Nuevo mensaje de $nombre";

  $mensaje = "
  
    Nombre del remitente: ".$nombre."
    Correo: ".$email."
    Mensaje: ".$mensaje."
  
  ";

    mail($para,$asunto,utf8_decode($mensaje));

    header("location: autolavadoIndex.html");

?>