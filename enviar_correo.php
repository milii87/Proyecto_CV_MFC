<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];

    // Aquí puedes incluir tu código para enviar el correo electrónico.
    // Por ejemplo, usando la función mail() de PHP o un servicio externo.

    // Ejemplo con mail() (asegúrate de tener configurado un servidor de correo local):
    $destinatario = "militzaf@gmail.com";
    $asunto = "Nuevo mensaje de contacto";
    $cuerpo = "Nombre: $nombre\nCorreo: $email\nMensaje: $mensaje";
    
    mail($destinatario, $asunto, $cuerpo);

    // Puedes redirigir al usuario a una página de confirmación.
    header("Location: confirmacion.html");
    exit();
}

?>
