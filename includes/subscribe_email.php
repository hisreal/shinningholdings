<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

if (isset($_POST['firstname'], $_POST['email'])) {

    $firstname = $_POST['firstname'];
    $email = $_POST['email'];

    $mail = new PHPMailer(true);

    try {
        // SMTP configuration
        $mail->isSMTP();
        $mail->SMTPAuth = true;
        $mail->Host = "2.qservers.net";
        $mail->Port = 25; 
        // $mail->SMTPSecure = 'tls'; // enable if your hosting requires it
        $mail->Username = "test2@shiningholdings.com";
        $mail->Password = "[P.;H9.;rN!NimLT";

        // Email headers
        $mail->setFrom('no-reply@shiningholdings.com', 'New Subscriber');
        $mail->addReplyTo($email, $firstname); 
        $mail->addAddress("hello@mcu.eduportal.app"); // receiver email

        // Email content
        $mail->isHTML(true);
        $mail->Subject = "New Newsletter Subscriber";
        $mail->Body = "
            <html><body>
                <h3>New Subscriber Details</h3>
                <p><strong>Name:</strong> {$firstname}</p>
                <p><strong>Email:</strong> {$email}</p>
            </body></html>
        ";

        $mail->AltBody = "New Subscriber:\nName: $firstname\nEmail: $email";

        // Send
        $mail->send();

        echo "Subscription successful! Thank you.";

    } catch (Exception $e) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    }

} else {
    echo "Invalid request.";
}

?>
