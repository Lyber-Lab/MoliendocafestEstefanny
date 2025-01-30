<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST["nombre"]);
    $email = htmlspecialchars($_POST["email"]);
    $mensaje = htmlspecialchars($_POST["mensaje"]);

    // Guardar en archivo o enviar por email (ajusta según necesites)
    $archivo = fopen("mensajes.txt", "a");
    fwrite($archivo, "Nombre: $nombre\nCorreo: $email\nMensaje: $mensaje\n\n");
    fclose($archivo);

    echo "¡Gracias por tu mensaje, $nombre!";
}
?>
