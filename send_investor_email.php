<?php
require_once "Mail.php";
require_once "Mail/mime.php";

if(isset($_POST['fullname'], $_POST['email'], $_POST['message'])) {

    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'] ?? '';
    $country = $_POST['country'];
    $investor_type = $_POST['investor_type'];
    $investment_capacity = $_POST['investment_capacity'];
    $interests = isset($_POST['interest']) ? implode(", ", $_POST['interest']) : '';
    $message = $_POST['message'];

    $from = "myemail@mydomain.com";
    $to = "john@myfriendsdomain.com";
    $subject = "New Investor Profile Submission";

    if(!is_dir('uploads')) { mkdir('uploads', 0777, true); }

    $attachment = '';
    if(isset($_FILES['id_document']) && $_FILES['id_document']['error'] == 0){
        $uploaded_file = $_FILES['id_document'];
        $file_path = 'uploads/' . basename($uploaded_file['name']);
        move_uploaded_file($uploaded_file['tmp_name'], $file_path);
        $attachment = $file_path;
    }

    $headers = array('From'=>$from, 'To'=>$to, 'Subject'=>$subject);

    $html = "<html><body>
        <strong>Full Name:</strong> $fullname <br>
        <strong>Email:</strong> $email <br>
        <strong>Phone:</strong> $phone <br>
        <strong>Country:</strong> $country <br>
        <strong>Investor Type:</strong> $investor_type <br>
        <strong>Investment Capacity:</strong> $investment_capacity <br>
        <strong>Area of Interest:</strong> $interests <br>
        <strong>Message:</strong> $message <br>
    </body></html>";
    $text = "Full Name: $fullname\nEmail: $email\nPhone: $phone\nCountry: $country\nInvestor Type: $investor_type\nInvestment Capacity: $investment_capacity\nArea of Interest: $interests\nMessage: $message";

    $crlf = "\n";
    $mime = new Mail_mime($crlf);
    $mime->setTXTBody($text);
    $mime->setHTMLBody($html);
    if($attachment) { $mime->addAttachment($attachment); }

    $body = $mime->get();
    $headers = $mime->headers($headers);

    $host = "localhost";
    $username = "myemail@mydomain.com";
    $password = "23ert5";

    $smtp = Mail::factory('smtp', array(
        'host'=>$host,
        'auth'=>true,
        'username'=>$username,
        'password'=>$password
    ));

    $mail = $smtp->send($to, $headers, $body);

    if(PEAR::isError($mail)) {
        echo "Error: " . $mail->getMessage();
    } else {
        echo "Your investor profile has been submitted successfully!";
    }

} else {
    echo "Please fill in all required fields.";
}
?>
