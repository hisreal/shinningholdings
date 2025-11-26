<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

$auto = new PHPMailer(true);

try {
    $auto->isSMTP();
    $auto->SMTPAuth = true;
    $auto->Host = "2.qservers.net";
    $auto->Port = 465;
    $auto->SMTPSecure = 'ssl'; // enable if needed
    $auto->Username = "info@shiningholdings.com";
    $auto->Password = "@Investment25";

    $auto->setFrom('no-reply@shiningholdings.com', 'Shining Holdings');
    $auto->addAddress($email, $firstname);

    // 1️⃣ Attach the logo **first**
    $logoPath = __DIR__ . "/img/user/shining-logo.png";
    $cid = "logo_cid";
    if(file_exists($logoPath)){
        $auto->addEmbeddedImage($logoPath, $cid, 'shining-logo.png');
    }

    // 2️⃣ Load template **after embedding** the image
    $templatePath = __DIR__ . "/email_template_subscribe.html";
    $template = file_get_contents($templatePath);
    $template = str_replace("{{logo_cid}}", $cid, $template);
    $template = str_replace("{{firstname}}", $firstname, $template);
    $template = str_replace("{{year}}", date("Y"), $template);

    $auto->isHTML(true);
    $auto->Subject = "Thank You for Subscribing!";
    $auto->Body = $template;
    $auto->AltBody = "Dear $firstname, thank you for subscribing! Please check the attached PDF.";

    // 3️⃣ Attach PDF
    $pdfPath = __DIR__ . "/files/welcome-guide.pdf";
    if(file_exists($pdfPath)){
        $auto->addAttachment($pdfPath, "Welcome-Guide.pdf");
    }

    $auto->send();
    echo "Subscription successful! Please check your email!";

} catch (Exception $e) {
    echo "Mailer Error: " . $auto->ErrorInfo;
}

?>
