<?php
  if ($_POST["nombre"] && $_POST["email"] && $_POST["mensaje"]) {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    $to = "tucorreo@dominio.com";
    $subject = "Nueva solicitud de servicio";
    $body = "Nombre: $nombre\nEmail: $email\nMensaje:\n$mensaje";

    mail($to, $subject, $body);

    header("refresh:3;url=../index.php");
  } else {
    echo "<p>Error, redireccionando...</p>";
    header("refresh:3;url=../index.php");
  }
?>