<?php
require 'config.php';

// Fetch Data
 $name = $_POST["rid"];
 $pname = $_POST["name1"];
 $Email = $_POST["email1"];
 $response = $_POST["response"];

require 'phpmail/PHPMailerAutoload.php';
         $mail = new PHPMailer();



 $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

        $mail->SMTPDebug = 3;                               // Enable verbose debug output

        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->SMTPSecure = 'STARTTLS';
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 587;
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'your email address';                 // SMTP username
        $mail->Password = 'your gmail passcode';                           // SMTP password

        $mail->setFrom('your email ID', 'Property on Rent');
        $mail->addAddress($Email);     // Add a recipient

        // $mail->addReplyTo('info@example.com', 'Information');
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Response from Admin of Property on Rent';
        // Mail Body
        $mail->Body .= '<h3 style="color:black;">' . $response . '.</h3>';
		


        if ($mail->send()) {
            echo 'Success.';
            header('Location:dashboard.php');
        } else {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        header('Location:dashboard.php');
   
    }

?>