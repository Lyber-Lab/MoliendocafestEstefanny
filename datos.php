<?php

//VERIFICA SI SE HA ENVIADO EL FORMULARIO
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // RECOJE LOS DATOS DEL FORMULARIO
    $nombre = htmlspecialchars($_POST['nombre']);
    $correo = htmlspecialchars($_POST['email']);
    $telefono = htmlspecialchars($_POST['telefono']);

    //muestra los datos recogidos
    echo "<h1>Datos Recibidos</h1> <hr>";
    echo "<p><strong>Nombre:</strong> $nombre</p>";
    echo "<p><strong>Correo:</strong> $correo</p>";
    echo "<p><strong>Telefono:</strong> $telefono</p>";
    } else {
        echo "<h1>Acceso no permitido.</h1>";
    }
?>