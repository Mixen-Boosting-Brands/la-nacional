<?php
    /**
     * PHPMailer multiple files upload and send
     */

    //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require './PHPMailer/PHPMailer.php';
    require './PHPMailer/SMTP.php';
    require './PHPMailer/Exception.php';

    //Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);
    $mail->CharSet = 'UTF-8';

    //Server settings
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.hostinger.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'noreply@lanacional.me';                     //SMTP username
    $mail->Password   = 'pY9pzBmTYZy.';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;
    // $mail->SMTPDebug = 1;

    if(isset($_POST['nombre'])) {
        $name = strip_tags(trim($_POST["nombre"]));
        $name = str_replace(array("\r","\n"),array(" "," "),$name);
        $email = filter_var(trim($_POST["correo"]), FILTER_SANITIZE_EMAIL);
        $phone = trim($_POST["telefono"]);
        $subject = trim($_POST["asunto"]);
        $message = trim($_POST["mensaje"]);

        try {
            //Recipients
            $mail->setFrom('bcontreras@lanacional.me', 'Correo automatizado'); // Has to be the same as Username
            $mail->addAddress('bcontreras@lanacional.me');     //Add a recipient
            // $mail->addAddress('luis.pando@mixen.agency');     //Add extra recipient
            $mail->addReplyTo($email, 'Qué tal La Nacional Alimentos, necesito más información.');

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Nuevo mensaje de ' . $name . ' - ' . $subject;
            $mail->Body    = 'Nombre: ' . $name . '<br>Correo electrónico: ' . $email . '<br>Teléfono: ' . $phone . '<br>Asunto: ' . $subject. '<br>Mensaje:<br>' . $message . '<br><br>Este mensaje fue enviado desde el formulario de contacto en el sitio de La Nacional Alimentos.';

            $mail->send();
            echo '¡Gracias por tu mensaje!';
        } catch (Exception $e) {
            echo 'Lo sentimos, algo salió mal. Por favor, inténtalo de nuevo. Mailer Error: ' . $mail->ErrorInfo;
        }
    }
?>