<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    // Composer autoload
    require 'vendor/autoload.php';

    $oMail = new PHPMailer(true);
    
    try 
    {
        //Server settings
        //$oMail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
        $oMail->isSMTP();                                            // Send using SMTP
        $oMail->Host       = 'enovateurs-mailhog';                   // Set the SMTP server to send through
        $oMail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $oMail->Username   = '';                                     // SMTP username
        $oMail->Password   = '';                                     // SMTP password
        $oMail->Port       = 1025;                                   // TCP port to connect to

        //Recipients
        $oMail->setFrom('no-reply@les-enovateurs.com', 'Les Enovateurs');
        $oMail->addAddress('jeremy@unlock-my-data.com', 'Joe User');     // Add a recipient
        $oMail->addAddress('louise@unlock-my-data.com');                 // Name is optional
        $oMail->addReplyTo('info@les-enovateurs.com', 'Informations');
        $oMail->addCC('cc@unlock-my-data.com');
        $oMail->addBCC('bcc@unlock-my-data.com');

        // Attachments
        $oMail->addAttachment('/var/www/html/livre.jpg', 'livre.jpg');    // Optional name

        // Content
        $oMail->isHTML(true);                                  // Set e-mail format to HTML
        $oMail->Subject = 'A wonderful Subject test';
        $oMail->Body    = 'An inspired message <b>in bold!</b>';
        $oMail->AltBody = 'You prefer plain text, no problem.';

        $oMail->send();
    } catch (Exception $e) {
        echo '<h1>Message could not be sent. Error: '.$oMail->ErrorInfo.'</h1>';
    }
?>