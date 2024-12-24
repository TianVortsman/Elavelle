<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/../vendor/autoload.php';

session_start(); // Start the session to store the message

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Capture form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'tianryno01@gmail.com'; // Your Gmail address
        $mail->Password = 'axms oobi witf ytqa'; // Your Gmail password or App Password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Recipients
        $mail->setFrom('tianryno01@gmail.com', 'DLR');
        $mail->addAddress('info@dlr-artigianato-e-pelle.shop'); // Recipient email

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'New Contact Us Form Submission';
        $mail->Body    = "
        <h2>New Contact Form Submission</h2>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Message:</strong></p>
        <p>$message</p>
        ";

        $mail->send();
        $_SESSION['popup_message'] = 'Message has been sent!'; // Store success message
    } catch (Exception $e) {
        $_SESSION['popup_message'] = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"; // Store error message
    }

    // Redirect to the contact page with the message
    header('Location: contact.php');
    exit;
}
?>
