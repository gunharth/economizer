<?php

if ($_SERVER['HTTP_REFERER'] == "") {
    die("<p>Sorry, currently the server is too busy to send this request - please try again later</p>");
}

if (!isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ($_SERVER['HTTP_X_REQUESTED_WITH'] != 'XMLHttpRequest')) {
    die("An error has occured - please try again");
}

if(!isset($_POST['form']) || $_POST['form'] == "" || !isset($_POST['language']) || $_POST['language'] == "") {
    die("An error has occured - please try again");
}

$form = $_POST['form'];
$lang = $_POST['language'];

include($form.'_'.$lang.'.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
// Load Composer's autoloader
require '../vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    include_once('smtp_secrets.php');
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption
    $mail->Port = 587; // TCP port to connect to
    $mail->CharSet = "UTF-8";

    //Recipients
    $mail->setFrom('office@agres.systems', 'Agres Systems');
    $mail->addReplyTo('office@agres.systems', 'Agres Systems');
    $mail->addAddress('hello@gunharth.io');

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $body;
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo $success;
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
