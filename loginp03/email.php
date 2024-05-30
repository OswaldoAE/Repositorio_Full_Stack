<?php
// Importa la clase PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Carga la librería de PHPMailer
require 'vendor/autoload.php';

// Crea una nueva instancia de PHPMailer
$mail = new PHPMailer(true); // Pasa true para activar excepciones

try {
    // Configura el servidor SMTP
    $mail->isSMTP(); // Indica que se usará SMTP para enviar el correo
    $mail->Host = 'smtp.gmail.com'; // Establece el servidor SMTP de Gmail
    $mail->SMTPAuth = true; // Habilita la autenticación SMTP
    $mail->Username = 'oswaldoaguilara03@gmail.com'; // Tu correo de Gmail
    $mail->Password = 'pilotoaviador1'; // Tu contraseña de Gmail o una contraseña de aplicación
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Habilita la encriptación TLS
    $mail->Port = 587; // Puerto del servidor SMTP de Gmail

    // Configura el remitente y el destinatario
    $mail->setFrom('oswaldoaguilara03@gmail.com', 'Oswaldo'); // Establece el remitente del correo
    $mail->addAddress('yare.hernandez.6789@gmail.com', 'Mi amor'); // Añade un destinatario

    // Configura el contenido del correo
    $mail->isHTML(true); // Establece que el correo se enviará en formato HTML
    $mail->Subject = 'Decirte que te extraño'; // Asigna el asunto del correo
    $mail->Body = 'hola guapisima'; // Asigna el cuerpo del correo en HTML
    $mail->AltBody = 'loviuuuuuuu'; // Asigna el cuerpo del correo en texto plano para clientes que no soportan HTML

    // Envía el correo
    $mail->send(); // Envía el correo
    echo 'El correo se ha enviado correctamente.'; // Muestra un mensaje si el correo se envió correctamente
} catch (Exception $e) {
    // Maneja cualquier excepción que pueda ocurrir durante el envío del correo
    echo 'El correo no pudo ser enviado. Error: ', $mail->ErrorInfo; // Muestra un mensaje de error si el correo no se pudo enviar
}
?>
