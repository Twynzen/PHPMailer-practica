<?php



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'micorreo@gmail.com';                     // SMTP username
    $mail->Password   = 'miclave';                               // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('enviadodesde1@gmail.com', 'remitente');          //desde donde se envia
    $mail->addAddress('adondellegaelcorreo@gmail.com', 'destinatario');     // a donde se envia
  /*  $mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');*/

    // Para enviar archivos o datos adguntos
  /*$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
                                              */
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Asunto del correo';
    $mail->Body    = 'Este es un correo de prueba ';
    /* Esti es un texto alternativo
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
*/
    $mail->send();
    echo 'El mensaje se envio bien';
} catch (Exception $e) {
    echo "Nop, no se envio salio un error: {$mail->ErrorInfo}";
}
//para el envio de un correo por medio de PHPMailer debo activar esta opción en mis opciones de seguiridad de correo

 ?>
