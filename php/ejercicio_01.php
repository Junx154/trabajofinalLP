<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);
    $mensaje = htmlspecialchars($_POST['mensaje']);

    $destinatario = "tu-correo@dominio.com";
    $asunto = "Nuevo mensaje de contacto de $nombre";
    
    $cuerpo = "Nombre: $nombre\n";
    $cuerpo .= "Correo: $email\n\n";
    $cuerpo .= "Mensaje:\n$mensaje";

    $headers = "From: $email";

    if (mail($destinatario, $asunto, $cuerpo, $headers)) {
        echo "Mensaje enviado correctamente.";
    } else {
        echo "Hubo un error al enviar el mensaje.";
    }
}
?>