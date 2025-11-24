<?php
require_once "Mail.php"; 
require_once "Mail/mime.php";

if(isset($_POST['name'], $_POST['email'], $_POST['subject'], $_POST['phone'], $_POST['message'])) {

    $name    = $_POST['name'];
    $email   = $_POST['email'];
    $subject = $_POST['subject'];
    $phone   = $_POST['phone'];
    $message = $_POST['message'];

    $from = "info@shiningholdings.com"; 
    $to   = "info@shiningholdings.com"; 
    $subjectLine = "New Contact Form Submission: $subject";

    $html = "
        <html><body>
        <h3>New Contact Form Submission</h3>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Phone:</strong> $phone</p>
        <p><strong>Subject:</strong> $subject</p>
        <p><strong>Message:</strong><br>$message</p>
        </body></html>
    ";

    $text = "Name: $name\nEmail: $email\nPhone: $phone\nSubject: $subject\nMessage: $message";

    $headers = array(
        'From'    => $from,
        'To'      => $to,
        'Subject' => $subjectLine
    );

    $crlf = "\n";
    $mime = new Mail_mime($crlf);
    $mime->setTXTBody($text);
    $mime->setHTMLBody($html);

    $body = $mime->get();
    $headers = $mime->headers($headers);

    $smtp = Mail::factory('smtp', array(
        'host'     => "localhost",
        'auth'     => true,
        'username' => "info@shiningholdings.com",
        'password' => "@Investment25"
    ));

    $mail = $smtp->send($to, $headers, $body);

    if (PEAR::isError($mail)) {
        echo "Error: " . $mail->getMessage();
    } else {
        echo "Your message has been successfully sent!";
    }
    
} else {
    echo "Please fill all required fields.";
}
?>
