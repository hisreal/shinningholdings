<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

if (isset($_POST['firstname'], $_POST['email'])) {

    $firstname = trim($_POST['firstname']);
    $email = trim($_POST['email']);

    // ===========================
    // OPTIONAL: SAVE TO DATABASE (COMMENTED OUT)
    // ===========================
    /*
    $conn = new mysqli("localhost", "db_user", "db_pass", "database_name");
    if (!$conn->connect_error) {
        $stmt = $conn->prepare("INSERT INTO subscribers (firstname, email) VALUES (?, ?)");
        $stmt->bind_param("ss", $firstname, $email);
        $stmt->execute();
        $stmt->close();
        $conn->close();
    }
    */

    // ===========================
    // SEND NOTIFICATION TO ADMIN
    // ===========================
    try {
        $adminMail = new PHPMailer(true);
        $adminMail->isSMTP();
        $adminMail->SMTPAuth = true;
        $adminMail->Host = "2.qservers.net";
        $adminMail->Port = 465; 
        $adminMail->SMTPSecure = 'ssl'; // enable if needed
        $adminMail->Username = "info@shiningholdings.com";
        $adminMail->Password = "@Investment25";

        $adminMail->setFrom('no-reply@shiningholdings.com', 'New Subscriber Alert');
        $adminMail->addAddress("info@shiningholdings.com");  
        $adminMail->addReplyTo($email, $firstname);

        $adminMail->isHTML(true);
        $adminMail->Subject = "New Newsletter Subscriber";
        $adminMail->Body = "
            <html><body>
                <h3>New Subscriber Details</h3>
                <p><strong>Name:</strong> {$firstname}</p>
                <p><strong>Email:</strong> {$email}</p>
            </body></html>
        ";
        $adminMail->AltBody = "New Subscriber:\nName: $firstname\nEmail: $email";

        $adminMail->send();
    } catch (Exception $e) {
        echo "Mailer Error (Admin): " . $adminMail->ErrorInfo;
        exit;
    }

    // ===========================
    // SEND AUTO-RESPONSE TO USER
    // ===========================
    try {
        $auto = new PHPMailer(true);

        $auto->isSMTP();
        $auto->SMTPAuth = true;
        $auto->Host = "2.qservers.net";
        $auto->Port = 25; 
        // $auto->SMTPSecure = 'tls'; 
        $auto->Username = "info@shiningholdings.com";
        $auto->Password = "@Investment25";

        $auto->setFrom('no-reply@shiningholdings.com', 'Shining Holdings');
        $auto->addAddress($email, $firstname);

        // Load branded HTML email template
        $template = file_get_contents("email-template.html");
        $template = str_replace("{{firstname}}", $firstname, $template);
        $template = str_replace("{{year}}", date("Y"), $template);

        $auto->isHTML(true);
        $auto->Subject = "Thank You for Subscribing!";
        $auto->Body = $template;
        $auto->AltBody = "Dear $firstname,\nThank you for subscribing! Please see attached document.";

        // Attach PDF (replace with your PDF file path)
        $auto->addAttachment("https://shiningholdings.com/files/welcome-guide.pdf", "Welcome-Guide.pdf");

        $auto->send();

        echo "Subscription successful! Please check your email.";

    } catch (Exception $e) {
        echo "Mailer Error (Auto-response): " . $auto->ErrorInfo;
    }

} else {
    echo "Invalid request.";
}
?>
