<?php
    $destinatario = 'togakure01@hotmail.com';
    $nombre = $_POST['nombre'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];
    $email = $_POST['email'];

    $header = "Enviado desde mi portafolio";
    $mensajeCompleto = $mensaje . "\natentamente: " . $nombre;

    mail($destinatario, $asunto, $mensajeCompleto, $header);
    echo "<script>alert('Correo enviado')</script>";
    echo "<script> setTimeout(\"location.href='index.html'\",1000)</script>";
?>