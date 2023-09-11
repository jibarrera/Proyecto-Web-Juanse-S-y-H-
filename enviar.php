<?php

    $destino = "administracion@juansesyh.com.ar";
    $nombre_apellido = $_POST["nombre-empresa"];
    $correo = $_POST["correo"];
    $telefono = $_POST["telefono"];
    $asunto = $_POST["asunto"];
    $mensaje = $_POST["mensaje"];
    $contenido = "Nombre/Empresa" . $nombre_apellido . "\nCorreo:" . $correo . "\nTelefono:" . $telefono . "\nMensaje: " . $asunto . "\nAsunto:" .  $mensaje;
    mail ($destino, "Contacto", $contenido);
    header("Location: index.html");