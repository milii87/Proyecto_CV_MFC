<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];

    // Configura los detalles del correo
    $destinatario = "tudireccion@email.com";
    $asunto = "Nuevo mensaje de contacto";
    $cuerpo = "Nombre: $nombre\nCorreo: $email\nMensaje: $mensaje";
    $headers = "From: $email";

    // Envía el correo
    if (mail($destinatario, $asunto, $cuerpo, $headers)) {
        // Redirige a una página de confirmación si el correo se envía con éxito
        header("Location: confirmacion.html");
        exit();
    } else {
        // Si hay un problema al enviar el correo, puedes manejarlo de la manera que desees
        echo "Hubo un error al enviar el correo. Por favor, intenta nuevamente.";
    }
}

?>
