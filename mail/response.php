<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load composer's autoloader
require 'vendor/autoload.php';

	$mail = new PHPMailer(true);// 
	if(isset($_POST['submit'])){
    //Get form data
    $email = $_POST['email'];
    $name = $_POST['name'];
    $message = $_POST['message'];

    //Create a new PHPMailer instance
    $mail = new PHPMailer(); 
    //Enable Smtp
    $mail->IsSMTP(); 
    $mail->SMTPDebug = 1; 
    //Set Auth true
    $mail->SMTPAuth = true;
    //Set Security ssl or tsl 
    $mail->SMTPSecure = 'ssl';
    //set a host 
    $mail->Host = "smtp.gmail.com";
    //Set a port
    $mail->Port = 465; 
    $mail->IsHTML(true);
    //Username to use for SMTP authentication
    $mail->Username = "xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx@gmail.com";
    //Set Password
    $mail->Password = "xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx";
    //Provide Email Address
    //$mail->AddAddress($address, $name);
    $mail->AddAddress ($email, $name);
    //Set who the message is to be sent from
    $mail->setFrom($email, $name);
    //Replace the plain text body with one created manually
    $mail->Subject    = "PHPMailer Test Subject via smtp (Gmail), basic";
    $mail->IsHTML(true);
    $mail ->MsgHTML($message);
    $mail->Body = $message;

    //send the message, check for errors
    if (!$mail->send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        echo "Message sent!";
    }
   }else{
   echo"Set all parameter first";
   }
?>