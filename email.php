<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function

require_once('path/to/PHPMailer/src/Exception.php');
require_once('path/to/PHPMailer/src/PHPMailer.php');
require_once('path/to/PHPMailer/src/SMTP.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
// Load Composer's autoloader
require 'vendor/autoload.php';
$dbhost = "ec2-174-129-220-12.compute-1.amazonaws.com";
$dbport = "5432";
$dbname = "da92c70sm552i5";
$dbuser = "ssrokyoydqyfei";
$dbuser = "a444cf799a4f5fb35284fa8442d4e831b25348ef1ac645da8a48c7449578984c";
$password = '$_POST[password]';
$hashed_pass = password_hash($password, PASSWORD_DEFAULT);
// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp1.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'treeshirts101@gmail.com';                     // SMTP username
    $mail->Password   = 'Treeshirts';                               // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('treeshirts101@gmail.com', 'Treeshirts');
    $mail->addReplyTo('treeshirts101@gmail.com', 'Treeshirts');


    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Contact Us';
    $mail->Body    = 'What do you need?';
    $mail->AltBody = 'What do you need?';
    $mail->AddAddress($address, $name);
    $mail->send();
    echo 'Message has been sent';
 catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        }

?>
