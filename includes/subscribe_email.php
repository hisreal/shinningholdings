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

        // ===========================
        // LOAD EMAIL TEMPLATE
        // ===========================
        $templatePath = __DIR__ . "/email_template_subscribe.html";
        if(file_exists($templatePath)){
            $template = file_get_contents($templatePath);

            // Embed local logo as Base64
            $logoPath = __DIR__ . "/img/user/shining-logo.png"; 
            if(file_exists($logoPath)){
                $logoBase64 = base64_encode(file_get_contents($logoPath));
            } else {
                $logoBase64 = ""; // empty if missing
            }
            $template = str_replace("{{logo_base64}}", $logoBase64, $template);

            // Replace placeholders
            $template = str_replace("{{firstname}}", $firstname, $template);
            $template = str_replace("{{year}}", date("Y"), $template);

            $auto->Body = $template;
        } else {
            // fallback body
            $auto->Body = "<p>Dear $firstname,</p><p>Thank you for subscribing to our newsletter!</p>";
        }

        $auto->AltBody = "Dear $firstname, thank you for subscribing! Please check the attached PDF.";

        // ===========================
        // ATTACH PDF
        // ===========================
        $pdfPath = __DIR__ . "/files/welcome-guide.pdf";
        if(file_exists($pdfPath)){
            $auto->addAttachment($pdfPath, "Welcome-Guide.pdf");
        } else {
            error_log("PDF not found: $pdfPath");
        }

        $auto->isHTML(true);
        $auto->Subject = "Thank You for Subscribing!";
        $auto->send();

        echo "Subscription successful! Please check your email.";

    } catch (Exception $e) {
        echo "Mailer Error (Auto-response): " . $auto->ErrorInfo;
    }

} else {
    echo "Invalid request.";
}
?>
