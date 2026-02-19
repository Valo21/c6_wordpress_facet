<?php
  if (!empty($_POST["nombre"]) && !empty($_POST["email"]) && !empty($_POST["mensaje"])) {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    $to = "tucorreo@dominio.com";
    $subject = "Nueva solicitud de servicio";
    $body = "Nombre:".$nombre."\nEmail:".$email."\nMensaje:\n".$mensaje;
    
    echo '<p>Enviando mail a '.$email."</p>";
    header("refresh:0;url=index.php");
  } else {
    echo "<p>Error, redireccionando...</p>";
    header("refresh:3;url=index.php");
  }
?>