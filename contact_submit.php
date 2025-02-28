<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $to = "customercare@kvonline.shop"; // Your email address
    $subject = "New Contact Form Submission";
    
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    $body = "
    <html>
    <head><title>New Contact Form Message</title></head>
    <body>
        <h2>Contact Form Submission</h2>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Phone:</strong> $phone</p>
        <p><strong>Message:</strong> $message</p>
    </body>
    </html>";

    if (mail($to, $subject, $body, $headers)) {
        echo "Your message has been sent successfully!";
    } else {
        echo "Failed to send email. Try again later.";
    }
}
?>


<?php

// // $hostname = gethostbyname('smtp.kvonline.shop');
// //     echo "Your SMTP Host: " . $hostname;


// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// require 'phpmailer/Exception.php';
// require 'phpmailer/PHPMailer.php';
// require 'phpmailer/SMTP.php';
 
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    
//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $phone = $_POST['phone'];
//     $message = $_POST['message'];

//     $mail = new PHPMailer(true);

//     try {
//         // SMTP settings
//         $mail->isSMTP();
//         $mail->Host = 'smtp.kvonline.shop';
//         $mail->SMTPAuth = false;
//         $mail->Username = 'customercare@kvonline.shop'; // Your email
//         $mail->Password = 'a9EJau~yEUqb'; // Your email password
//         $mail->SMTPSecure = 'tls'; // Use TLS
//         $mail->Port = 25; // SMTP port

//         // Email headers
//         $mail->setFrom($email, $name);
//         $mail->addAddress('customercare@kvonline.shop'); // Receiver's email
//         $mail->addReplyTo($email, $name);
//         $mail->isHTML(true);
//         $mail->Subject = "New Contact Form Submission";
//         $mail->Body = "
//         <html>
//         <head><title>New Contact Form Message</title></head>
//         <body>
//             <h2>Contact Form Submission</h2>
//             <p><strong>Name:</strong> $name</p>
//             <p><strong>Email:</strong> $email</p>
//             <p><strong>Phone:</strong> $phone</p>
//             <p><strong>Message:</strong> $message</p>
//         </body>
//         </html>";

//         if ($mail->send()) {
//             echo "<span class='text-success'>Your message has been sent successfully!</span>";
//         } else {
//             echo "<span class='text-danger'>Failed to send email. Try again later.</span>";
//         }
        
//     } catch (Exception $e) {
//         echo "<script>alert('Mailer Error: {$mail->ErrorInfo}'); window.history.back();</script>";
//     }
// }
?>
