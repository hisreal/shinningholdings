<?php
require_once "Mail.php";
require_once "Mail/mime.php";

if(isset($_POST['firstname'], $_POST['email'])) {

    $firstname = $_POST['firstname'];
    $email = $_POST['email'];

    $from = "myemail@mydomain.com";
    $to = "john@myfriendsdomain.com";
    $subject = "New Subscriber";

    $html = "<html><body>
                <h3>New Newsletter Subscriber</h3>
                <b>Name:</b> $firstname <br>
                <b>Email:</b> $email <br>
             </body></html>";

    $text = "New Subscriber:\nName: $firstname\nEmail: $email";

    $headers = array('From' => $from, 'To' => $to, 'Subject' => $subject);

    $crlf = "\n";
    $mime = new Mail_mime($crlf);
    $mime->setTXTBody($text);
    $mime->setHTMLBody($html);

    $body = $mime->get();
    $headers = $mime->headers($headers);

    // Your hosting SMTP details
    $host = "localhost";
    $username = "myemail@mydomain.com";
    $password = "23ert5";

    $smtp = Mail::factory('smtp', [
        'host' => $host,
        'auth' => true,
        'username' => $username,
        'password' => $password
    ]);

    $mail = $smtp->send($to, $headers, $body);

    if (PEAR::isError($mail)) {
        echo "Error: " . $mail->getMessage();
    } else {
        echo "You have been subscribed successfully!";
    }

} else {
    echo "Missing fields.";
}
?>
